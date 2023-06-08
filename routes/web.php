<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AdminController,
    RecipeController,
    CategoryController
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


Route::group(['prefix' => 'admin'], function() {
    Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');
    Route::resource('categories',CategoryController::class);
    Route::resource('recipes',RecipeController::class);
});