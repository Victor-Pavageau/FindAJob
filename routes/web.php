<?php

use App\Models\Entreprise;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\PiloteController;
use App\Http\Controllers\CandidatureController;
use App\Http\Controllers\DelegueController;
use App\Http\Controllers\Offre_de_stageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WishlistController;
use App\Models\Offre_de_stage;
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

Route::post('entreprise', [EntrepriseController::class, "store"]);
Route::post('comptes_pilotes', [PiloteController::class, "store"]);
Route::post('mescandidatures', [CandidatureController::class, "store"]);
Route::post('gerer_delegues', [DelegueController::class, "store"]);
Route::post('offres_de_stage', [Offre_de_stageController::class, "store"]);
Route::post('mesdonnees', [ProfileController::class, "store"]);
Route::post('wishlist', [WishlistController::class, "store"]);

Route::get('/', function () {
    return view('index');
})->name("home");

Route::get('/legal', function () {
    return view('legal');
})->name("legal");

Route::get('/inscription', function () {
    return view('inscription');
})->name("inscription");

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

Route::get('/mesdonnees', function () {
    return view('modifier_Donnees_Personelles');
})->name("mesdonnees");

Route::get('/identification', function () {
    return view('login');
})->name("login");