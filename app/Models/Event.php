<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'description',
        'location',
        'date',
        'time',
        'active'
    ];
    
    protected $casts = [
        'date' => 'date',
        'active' => 'boolean'
    ];
    
    // Returnează doar evenimentele active și viitoare
    public static function getUpcomingEvents($limit = 6)
    {
        return self::where('active', true)
            ->where('date', '>=', now()->format('Y-m-d'))
            ->orderBy('date', 'asc')
            ->limit($limit)
            ->get();
    }
}