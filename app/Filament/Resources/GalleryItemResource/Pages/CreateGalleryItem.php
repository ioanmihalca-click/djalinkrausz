<?php

namespace App\Filament\Resources\GalleryItemResource\Pages;

use App\Filament\Resources\GalleryItemResource;
use Filament\Resources\Pages\CreateRecord;

class CreateGalleryItem extends CreateRecord
{
    protected static string $resource = GalleryItemResource::class;
    
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Asigură-te că URL-ul YouTube este în formatul corect pentru a fi folosit cu iframe
        if (!empty($data['youtube_url'])) {
            $data['youtube_url'] = $this->formatYoutubeUrl($data['youtube_url']);
        }
        
        return $data;
    }
    
    protected function formatYoutubeUrl(string $url): string
    {
        // Extrage ID-ul video din URL-ul YouTube
        $videoId = '';
        
        if (preg_match('/youtube\.com\/watch\?v=([^&]+)/', $url, $matches)) {
            $videoId = $matches[1];
        } elseif (preg_match('/youtu\.be\/([^&]+)/', $url, $matches)) {
            $videoId = $matches[1];
        } elseif (preg_match('/youtube\.com\/embed\/([^&]+)/', $url, $matches)) {
            $videoId = $matches[1];
        }
        
        if (!empty($videoId)) {
            return 'https://www.youtube.com/embed/' . $videoId;
        }
        
        return $url;
    }
}