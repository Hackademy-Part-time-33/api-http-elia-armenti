<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;

Route::get('/', [AnimeController::class, 'homepage'])->name('anime.genre');
Route::get('/anime/category{id}', [AnimeController::class, 'genre'])->name('anime.detail');
Route::get('/anime/detail/{id}', [AnimeController::class, 'detail'])->name('anime.genre.detail');
