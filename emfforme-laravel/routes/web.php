<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages/welcome');
})->name('home');

Route::get('/sobre', function () {
    return view('pages/sobre');
})->name('sobre');

Route::get('/missao', function () {
    return view('pages/missao');
})->name('missao');

Route::get('/contato', function () {
    return view('pages/contato');
})->name('contato');
