<?php

use App\Http\Controllers\EtudiantController;
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

Route::get('/', function (){
    return view('welcome');
})->name("accueil");

Route::get('/home', 'App\Http\Controllers\MainController@home');


Route::get('/bonjour', function(){
    echo 'Bonjour';
});
Auth::routes();

Route::get('/newtech', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/etudiant", [EtudiantController::class,"index"])->name("etudiant");