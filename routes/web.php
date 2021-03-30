<?php

use App\Models\Entreprise;
use App\Models\Promotion;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
>>>>>>> 2db4471d75f5c6e4a7d31a6d3596d32eb24edbb6
})->name("home");

Route::get('/legal', function () {
    return view('legal');
})->name("legal");

Route::get('/auth', function () {
    return view('authentification');
})->name("auth");

Route::get('/mescandidatures', function () {
    return view('mescandidatures');
})->name("mescandidatures");

Route::get('/wishlist', function () {
    return view('wishlist');
})->name("wishlist");

Route::get('/comptes_pilotes', function () {
    return view('comptes_pilotes');
})->name("comptes_pilotes");

Route::get('/droits_delegues', function () {
    return view('droits_delegues');
})->name("droits_delegues");

Route::get('/entreprise', function () {
    return view('entreprise');
})->name("entreprise");

Route::get('/gerer_delegues', function () {
    return view('gerer_delegues');
})->name("gerer_delegues");

Route::get('/offres_de_stage', function () {
    return view('offres_de_stage');
})->name("offres_de_stage");

Route::get('/pilote', function () {
    return view('piloteMain');
})->name("piloteMain");

Route::get('/comptes_pilotes', function () {
    return view('comptes_pilotes');
})->name("comptes_pilotes");