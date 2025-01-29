<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FilmController; // Importamos el controlador de FILMS

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/films', [FilmController::class, 'index']); // Listar todas las peliculas
Route::get('/films/{id}', [FilmController::class, 'show']); // Listar pelicula por id
Route::delete('/films/{id}', [FilmController::class, 'destroy']); // Listar pelicula por id