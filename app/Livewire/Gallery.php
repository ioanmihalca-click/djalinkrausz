<?php

namespace App\Livewire;

use App\Models\GalleryItem;
use Livewire\Component;

class Gallery extends Component
{
    public string $activeTab = 'photo';

    public function setTab($tab)
    {
        $this->activeTab = $tab;
    }

    public function render()
    {
        $photos = GalleryItem::where('type', 'photo')
            ->where('active', true)
            ->orderBy('order')
            ->get();
            
        $videos = GalleryItem::where('type', 'video')
            ->where('active', true)
            ->orderBy('order')
            ->get();
        
        return view('livewire.gallery', [
            'photos' => $photos,
            'videos' => $videos
        ]);
    }
}