<?php


use App\Models\admin;
use App\Models\city;
use App\Models\library;
use App\Models\reader;
use Carbon\Factory;
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

Route::get('/', function () {
   
    return view('welcome');
});

// Route::get('/mix', [LibrraryController::class,'mix']);

// Route::get('/find/{id}', [LibrraryController::class,'getAllLibrariesByCity']);