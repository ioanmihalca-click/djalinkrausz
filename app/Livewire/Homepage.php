<?php

namespace App\Livewire;

use App\Models\Testimonial;
use Livewire\Component;

class Homepage extends Component
{
    public function render()
    {
        // Obține testimoniale active, ordonate după câmpul "order"
        $testimonials = Testimonial::where('active', true)
            ->orderBy('order', 'asc')
            ->get();
        
        return view('livewire.homepage', [
            'testimonials' => $testimonials
        ]);
    }
}