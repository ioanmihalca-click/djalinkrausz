<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use CloudinaryLabs\CloudinaryLaravel\MediaAlly;

class GalleryItem extends Model
{
    use HasFactory, MediaAlly;

    protected $fillable = [
        'title',
        'description',
        'type', // 'photo' sau 'video'
        'image_url', // URL Cloudinary pentru imagini
        'youtube_url', // URL YouTube pentru videoclipuri
        'active',
        'order',
    ];

    protected $casts = [
        'active' => 'boolean',
        'order' => 'integer',
    ];
}