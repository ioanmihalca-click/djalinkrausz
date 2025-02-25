<?php

namespace App\Livewire;

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
        return view('livewire.gallery');
    }
}