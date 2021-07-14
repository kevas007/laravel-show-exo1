<?php

use App\Http\Controllers\IngredientsController;
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

// Route::get("/create", [IngredientsController::class, "create"]);

Route::get("/", [IngredientsController::class, "index"]);

Route::post("/ingredientStore", [IngredientsController::class, "store"]);

Route::delete("/ingredients/{id}/delete", [IngredientsController::class, "destroy"]);

Route::get("/ingredients/{id}/show", [IngredientsController::class, "show"]);

