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
   
    return view('layout');
});

Route::get('/login', function () {
   
    return view('login');
});

Route::get('/register', function () {
   
    return view('register');
});

Route::get('/dashbord', function () {
   
    return view('librarain');
});

// Route::get('/mix', [LibrraryController::class,'mix']);

// Route::get('/find/{id}', [LibrraryController::class,'getAllLibrariesByCity']);