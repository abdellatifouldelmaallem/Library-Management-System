<?php


use App\Models\admin;
use App\Models\city;
use App\Models\library;
use App\Models\reader;
use Carbon\Factory;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LibraryController;
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
Route::get('/home', [AuthController::class ,'isLogin']);

Route::get('/ReaderDash', function () {
    return view('ReaderDash');
})->name('ReaderDash');

Route::get('/LibraryDash', function () {
    return view('library.LibraryDash');
})->name('LibraryDash');

Route::get('/adminDash', function () {
    return view('adminDash');
})->name('adminDash');


Route::get('/contact', function () {  
    return view('contact');
})->name("contact");

Route::get('/about', function () {  
    return view('about');
})->name("about");

Route::get('/dashbord', function () {   
    return view('library.LibraryDash');
})->name("dashboard");

Route::get('/books', [LibraryController::class,'index'])->name("books");

Route::get('/books/AddBook', [LibraryController::class , 'createForAdd'])->name("AddBook");

Route::get('/books/EditBook', [LibraryController::class , 'createForEdit'] )->name("EditBook");

// Route::get('/mix', [LibrraryController::class,'mix']);

// Route::get('/find/{id}', [LibrraryController::class,'getAllLibrariesByCity']);