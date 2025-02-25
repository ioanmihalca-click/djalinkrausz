<?php

use App\Livewire\Despre;
use App\Livewire\Contact;
use App\Livewire\Homepage;
use Illuminate\Support\Facades\Route;

Route::get('/', Homepage::class);
Route::get('/despre', Despre::class);
Route::get('/contact', Contact::class);
