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
    
    $promotion = Promotion::create([
    'Nom' => 'BAC']);
    return view('home');
})->name("home");

Route::get('/legal', function () {
    return view('legal');
})->name("legal");
