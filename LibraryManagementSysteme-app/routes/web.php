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

// Route::get('/login', function () {
   
//     return view('login');
// })->name("login");

// Route::get('/register', function () {
   
//     return view('register');
// })->name("register");

Route::get('/contact', function () {
   
    return view('contact');
})->name("contact");

Route::get('/about', function () {
   
    return view('about');
})->name("about");

Route::get('/dashbord', function () {
   
    return view('librarain');
})->name("dashboard");

Route::get('/books', function () {
   
    return view('books');
})->name("books");

Route::get('/books/AddBook', function () {
   
    return view('Add_Book');
})->name("AddBook");

Route::get('/books/EditBook', function () {
   
    return view('Update_Book');
})->name("EditBook");

// Route::get('/mix', [LibrraryController::class,'mix']);

// Route::get('/find/{id}', [LibrraryController::class,'getAllLibrariesByCity']);