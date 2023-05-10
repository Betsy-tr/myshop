<?php

use App\Http\Controllers\ProduitsController;
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

Route::get('/',[ProduitsController::class,'index'])->name('accueil');

//Filtre par catégorie
Route::get('/filtre/{categorie}',[ProduitsController::class,'index'])->name('filtre.categorie');

//Route détail 
Route::get('/detail/{produit}',[ProduitsController::class,'detail'])->name('accueil.detail');


Route::get('/addtocart/{produit}',[ProduitsController::class,'addToCart'])->name('addtocart');


