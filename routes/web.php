<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryStateCityController;
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


 
 
Route::get('categories', [CountryStateCityController::class, 'categories']);
Route::post('subcategories', [CountryStateCityController::class, 'subcategories']);

//Route::post('get-cities-by-state', [CountryStateCityController::class, 'getCity']);