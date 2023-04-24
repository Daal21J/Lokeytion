<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\CommentController;

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

Route::get('/',[StaticController::class,'index']);
Route::get('/login',[StaticController::class,'login']);
Route::get('/annonces',[AnnonceController::class,'showAnnonces']);
Route::get('/depotAnnonces',[AnnonceController::class,'depot']);
Route::get('/detail',[AnnonceController::class,'details']);
Route::get('/MesAnnonces',[AnnonceController::class,'mesannonces']);
Route::get('/MesDemandes',[DemandeController::class,'showDemande'])->name('Demande.show');
Route::get('/MesDemandes/Refuse/{id}',[DemandeController::class,'refuse'])->name('Demande.refuse');
Route::get('/MesDemandes/Accept/{id}',[DemandeController::class,'accept'])->name('Demande.accept');
Route::get('/MesDemandes/search',[DemandeController::class,'search'])->name('Demande.search');
Route::get('/MonPanier',[PanierController::class,'showPanier']);
Route::delete('/Monpanier/{id}', [PanierController::class,'deletePanier'])->name('panier.delete');
Route::post('/demandes', [PanierController::class,'storeDemande'])->name('demande.store');
Route::get('/unreadDemandes', function () {
    return view('unreadDemandes');
});
Route::get('/Comment',[CommentController::class,'showComment']);



/****TEST*****/
Route::get('/navbar', function () {
    return view('navbar');
});