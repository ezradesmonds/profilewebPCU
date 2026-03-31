<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FacilityController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/facility', [FacilityController::class, 'index'])->name('facility');
