<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home'])->name('home');

// delete
Route::get('/person/delete/{person}', [MainController::class, 'personDelete'])
    ->name('person.delete');


// form che l'utente utilizzera' per inserire i dati
Route::get('/person/create', [MainController::class, 'personCreate'])
    ->name('person.create');

//  rotta per la ricezione dei dati dal form
Route::post('/person/store', [MainController::class, 'personStore'])
    ->name('person.store');
