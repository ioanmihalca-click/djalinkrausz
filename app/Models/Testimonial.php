<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'company',
        'content',
        'rating',
        'active',
        'order',
    ];

    protected $casts = [
        'active' => 'boolean',
        'rating' => 'integer',
        'order' => 'integer',
    ];
    
    /**
     * Obține inițialele numelui pentru a fi folosite ca avatar
     */
    public function getInitialsAttribute(): string
    {
        $words = explode(' ', $this->name);
        $initials = '';
        
        foreach ($words as $word) {
            if (!empty($word)) {
                $initials .= mb_substr($word, 0, 1);
                
                // Dacă avem 2 caractere, ne oprim
                if (mb_strlen($initials) >= 2) {
                    break;
                }
            }
        }
        
        return mb_strtoupper($initials);
    }
}