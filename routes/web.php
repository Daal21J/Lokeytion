<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\AlreadyLoggedIn;

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
Route::get('/login',[AuthController::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/login',[AuthController::class,'registration'])->middleware('alreadyLoggedIn');
Route::post('/registerUser',[AuthController::class,'registerUser'])->name('registerUser');
Route::post('/loginUser',[AuthController::class,'loginUser'])->name('loginUser');
Route::get('/profile',[AuthController::class,'profile'])->middleware('isLoggedIn');
Route::get('/logout',[AuthController::class,'logout']);

Route::get('/annonces',[AnnonceController::class,'showAnnonces']);
Route::get('/depotAnnonces',[AnnonceController::class,'depot']);
Route::get('/detail',[AnnonceController::class,'details']);
Route::get('/MesAnnonces',[AnnonceController::class,'mesannonces']);
Route::get('/MesDemandes',[DemandeController::class,'showDemande'])->name('Demande.show');
Route::get('/MesDemandes/Refuse/{id}',[DemandeController::class,'refuse'])->name('Demande.refuse');
Route::get('/MesDemandes/Accept/{id}',[DemandeController::class,'accept'])->name('Demande.accept');
Route::get('/MesDemandes/search',[DemandeController::class,'search'])->name('Demande.search');
Route::get('/MonPanier',[PanierController::class,'showPanier']);
Route::get('/Comment',[CommentController::class,'showComment']);
