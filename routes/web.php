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
Route::get('/blog',function(){
    $skipStyles = true;
    return view('pages.maquetacion',compact('skipStyles'));
})->name('blog');

Route::group(['prefix' => 'admin'], function() {
    Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');
    Route::resource('categories',CategoryController::class);
    Route::resource('recipes',RecipeController::class);

});