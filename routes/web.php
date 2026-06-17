<?php

use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('autocomplete', [SearchController::class, 'autocomplete'])->name('autocomplete');
Route::get('search', [SearchController::class, 'index'])->name('search');
