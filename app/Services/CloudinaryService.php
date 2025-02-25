<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class CloudinaryService
{
    /**
     * Verifică dacă Cloudinary este configurat corect
     *
     * @return bool
     */
    public static function isConfigured(): bool
    {
        return !empty(config('cloudinary.cloud_url'));
    }

    /**
     * Încarcă un fișier în Cloudinary
     *
     * @param string $path Calea locală către fișier
     * @param array $options Opțiuni de upload
     * @return string|null URL-ul fișierului încărcat sau null în caz de eroare
     */
    public static function upload(string $path, array $options = []): ?string
    {
        if (!self::isConfigured()) {
            Log::warning('Cloudinary nu este configurat corect.');
            return null;
        }

        try {
            $defaultOptions = [
                'folder' => 'gallery',
                'transformation' => [
                    'quality' => 'auto',
                    'fetch_format' => 'auto',
                ]
            ];

            $options = array_merge($defaultOptions, $options);
            
            $uploadedFile = cloudinary()->upload($path, $options);
            return $uploadedFile->getSecurePath();
        } catch (\Exception $e) {
            Log::error('Eroare la încărcarea fișierului în Cloudinary: ' . $e->getMessage());
            return null;
        }
    }

    /**
     * Șterge un fișier din Cloudinary
     *
     * @param string $url URL-ul Cloudinary al fișierului
     * @return bool
     */
    public static function delete(string $url): bool
    {
        if (!self::isConfigured() || empty($url)) {
            Log::warning('Cloudinary nu este configurat corect sau URL-ul este gol.');
            return false;
        }

        try {
            // Extract public ID from Cloudinary URL
            $parts = parse_url($url);
            $path = $parts['path'] ?? '';
            $segments = explode('/', $path);
            $filename = end($segments);
            $publicId = 'gallery/' . pathinfo($filename, PATHINFO_FILENAME);
            
            // Delete from Cloudinary
            cloudinary()->destroy($publicId);
            return true;
        } catch (\Exception $e) {
            Log::error('Eroare la ștergerea fișierului din Cloudinary: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Obține URL-ul de încărcare a imaginii - Cloudinary sau local în caz de eroare
     * 
     * @param mixed $file Fișierul încărcat (TemporaryUploadedFile)
     * @param string $localFolder Folderul local pentru backup
     * @return string URL-ul fișierului
     */
    public static function getImageUrl($file, string $localFolder = 'gallery'): string
    {
        // Verificăm dacă fișierul este o instanță TemporaryUploadedFile
        if ($file instanceof TemporaryUploadedFile) {
            try {
                // Facem o copie a fișierului temporar pentru a evita erorile de acces
                $tempDir = storage_path('app/tmp');
                if (!is_dir($tempDir)) {
                    mkdir($tempDir, 0755, true);
                }
                
                $tempFilePath = $tempDir . '/' . uniqid() . '-' . $file->getClientOriginalName();
                copy($file->getRealPath(), $tempFilePath);
                
                // Încărcăm în Cloudinary din copia temporară
                if (self::isConfigured()) {
                    $cloudinaryUrl = self::upload($tempFilePath);
                    
                    if ($cloudinaryUrl) {
                        // Ștergem fișierul temporar după încărcare
                        if (file_exists($tempFilePath)) {
                            @unlink($tempFilePath);
                        }
                        
                        return $cloudinaryUrl;
                    }
                }
                
                // Dacă Cloudinary nu este configurat sau a apărut o eroare, 
                // copiem fișierul temporar în directorul public
                $path = Storage::disk('public')->putFileAs(
                    $localFolder, 
                    $tempFilePath, 
                    uniqid() . '-' . $file->getClientOriginalName()
                );
                
                $localUrl = Storage::disk('public')->url($path);
                
                // Ștergem fișierul temporar
                if (file_exists($tempFilePath)) {
                    @unlink($tempFilePath);
                }
                
                return $localUrl;
            } catch (\Exception $e) {
                Log::error('Eroare la procesarea imaginii: ' . $e->getMessage());
                
                // Încercăm metoda simplă de salvare ca backup
                try {
                    // Copiază direct în public storage
                    $path = $file->storePublicly($localFolder, 'public');
                    return Storage::disk('public')->url($path);
                } catch (\Exception $e2) {
                    Log::error('Eroare la metoda de backup pentru salvare: ' . $e2->getMessage());
                    return '';
                }
            }
        } else {
            // Pentru alte tipuri de fișiere, folosim metoda standard
            try {
                $path = $file->store($localFolder, 'public');
                $fullPath = storage_path('app/public/' . $path);
                $localUrl = Storage::disk('public')->url($path);
                
                if (self::isConfigured()) {
                    $cloudinaryUrl = self::upload($fullPath);
                    
                    if ($cloudinaryUrl) {
                        // Ștergem fișierul local dacă am reușit să-l încărcăm în Cloudinary
                        Storage::disk('public')->delete($path);
                        return $cloudinaryUrl;
                    }
                }
                
                return $localUrl;
            } catch (\Exception $e) {
                Log::error('Eroare la procesarea imaginii: ' . $e->getMessage());
                return '';
            }
        }
    }
}