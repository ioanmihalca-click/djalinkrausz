<?php

use App\Livewire\Homepage;
use App\Livewire\Despre;
use Illuminate\Support\Facades\Route;

Route::get('/', Homepage::class);
Route::get('/despre', Despre::class);