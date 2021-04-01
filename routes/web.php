<?php

use App\Models\Entreprise;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\PiloteController;
use App\Http\Controllers\CandidatureController;
use App\Http\Controllers\DelegueController;
use App\Http\Controllers\Offre_de_stageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\UtilisateurController;
use App\Models\Promotion;
use Illuminate\Support\Facades\Route;

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;


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

Route::post('entreprise', [EntrepriseController::class, "store"])->middleware('checkIdentifier');
Route::post('comptes_pilotes', [PiloteController::class, "store"])->middleware('checkIdentifier');
Route::post('mescandidatures', [CandidatureController::class, "store"])->middleware('checkIdentifier');
Route::post('gerer_delegues', [DelegueController::class, "store"])->middleware('checkIdentifier');
Route::post('offres_de_stage', [Offre_de_stageController::class, "store"])->middleware('checkIdentifier');
Route::post('mesdonnees', [ProfileController::class, "store"])->middleware('checkIdentifier');
Route::post('wishlist', [WishlistController::class, "store"])->middleware('checkIdentifier');

Route::get('/identification', [UtilisateurController::class, 'login'])->name("identification")->middleware('dejaIdentifier');
Route::post('/creationUtilisateur',[UtilisateurController::class, 'create'])->name("creeUtilisateur");//sans vue
Route::post('/verification',[UtilisateurController::class, 'check'])->name("verifUtilisateur");//sans vue
Route::get('/deconnexion',[UtilisateurController::class, 'logout'])->name("deconnecteUtilisateur");//sans vue
Route::post('/modifierUtilisateur',[UtilisateurController::class, 'modify'])->name("modifierUtilisateur");//sans vue

Route::get('/', function () {
    return view('index');
})->name("home")->middleware('checkIdentifier');

Route::get('/legal', function () {
    return view('legal');
})->name("legal")->middleware('checkIdentifier');

Route::get('/inscription', function () {
    return view('inscription');
})->name("inscription")->middleware('dejaIdentifier');;

Route::get('/candidatures', function () {
    return view('candidatures');
})->name("mescandidatures")->middleware('checkIdentifier');

Route::get('/wishlist', function () {
    return view('wishlist');
})->name("wishlist")->middleware('checkIdentifier');

Route::get('/comptes_pilotes', function () {
    return view('comptes_pilotes');
})->name("comptes_pilotes")->middleware('checkIdentifier');

Route::get('/droits_delegues', function () {
    return view('droits_delegues');
})->name("droits_delegues")->middleware('checkIdentifier');

Route::get('/entreprise', function () {
    return view('entreprise');
})->name("entreprise")->middleware('checkIdentifier');

Route::get('/gerer_delegues', function () {
    return view('gerer_delegues');
})->name("gerer_delegues")->middleware('checkIdentifier');

Route::get('/offres_de_stage', function () {
    return view('offres_de_stage');
})->name("offres_de_stage")->middleware('checkIdentifier');

Route::get('/pilote', function () {
    return view('piloteMain');
})->name("piloteMain")->middleware('checkIdentifier');

Route::get('/mesdonnees', function () {
    return view('modifier_Donnees_Personelles');
})->name("mesdonnees")->middleware('checkIdentifier');

Route::get('/utilisateurs', function () {
    return view('utilisateurs');
})->name("utilisateurs")->middleware('checkIdentifier');

Route::get('/email', function () {
    Mail::to('guillaume.rouvin@viacesi.fr')->send(new WelcomeMail());
    return new WelcomeMail();
});

