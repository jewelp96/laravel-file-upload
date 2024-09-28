<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

// Define the route with a required 'id' parameter
Route::get('/profile/{id}', [ProfileController::class, 'index']);
