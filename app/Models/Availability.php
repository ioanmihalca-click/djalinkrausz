<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'status', // 'available', 'reserved', 'unavailable'
        'note',   // Notă opțională pentru rezervare/indisponibilitate
    ];

    protected $casts = [
        'date' => 'date',
    ];

    /**
     * Verifică dacă o anumită dată este disponibilă
     */
    public static function isAvailable(string $date): bool
    {
        $availability = self::where('date', $date)->first();
        
        if (!$availability) {
            return true; // Implicit disponibil dacă nu există înregistrare
        }
        
        return $availability->status === 'available';
    }

    /**
     * Verifică dacă o anumită dată este rezervată
     */
    public static function isReserved(string $date): bool
    {
        $availability = self::where('date', $date)->first();
        
        if (!$availability) {
            return false;
        }
        
        return $availability->status === 'reserved';
    }
    
    /**
     * Obține toate disponibilitățile pentru o anumită lună și an
     */
    public static function getMonthAvailability(int $month, int $year): array
    {
        $startDate = "{$year}-{$month}-01";
        $endDate = date('Y-m-t', strtotime($startDate));
        
        $availabilities = self::whereBetween('date', [$startDate, $endDate])
            ->get()
            ->keyBy('date')
            ->toArray();
            
        return $availabilities;
    }
}