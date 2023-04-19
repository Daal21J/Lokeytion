<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\CommentController;
use App\Models\Annonce;
use App\Models\Objet;

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
Route::get('/editAnnonces/{id}', [AnnonceController::class, 'edit']);
Route::get('/detail',[AnnonceController::class,'details']);
Route::get('/MesAnnonces',[AnnonceController::class,'mesannonces']);
Route::get('/MesDemandes',[DemandeController::class,'showDemandes']);
Route::get('/MonPanier',[PanierController::class,'showPanier']);
Route::get('/Comment',[CommentController::class,'showComment']);
Route::get('/message', [CommentController::class, 'showMessage']);

Route::post('/store', [AnnonceController::class, 'store'])->name('store');
Route::post('/addComment', [CommentController::class, 'addComment'])->name('addComment');

Route::put('/editAnnonces/{id}', [AnnonceController::class, 'update'])->name('update');

