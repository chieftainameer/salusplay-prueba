<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AdminController,
    RecipeController,
    CategoryController,
    HomeController
};
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
Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/categories/{category:slug}',[HomeController::class,'showCategory'])->name('home.categories.show');
Route::get('/recipes/{recipe:slug}',[HomeController::class,'showRecipe'])->name('home.recipes.show');

Route::group(['prefix' => 'admin'], function() {
    Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');
    Route::resource('categories',CategoryController::class);
    Route::get('/categories/hide/{recipe}',[CategoryController::class,'hide'])->name('categories.hide');
    Route::resource('recipes',RecipeController::class);
    Route::get('/recipes/hide/{recipe}',[RecipeController::class,'hide'])->name('recipes.hide');

});