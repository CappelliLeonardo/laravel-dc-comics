<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\ComicController;

Route::get('/', function () {
    return view('welcome', [
       
    ]);
    // return view('welcome', compact('firstName', 'lastName'));
});


Route::resource('comics', ComicController::class);
// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)
