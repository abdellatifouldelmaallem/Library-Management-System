<?php

use App\Http\Controllers\AdminController;
use App\Models\admin;
use App\Models\city;
use App\Models\library;
use App\Models\reader;
use Carbon\Factory;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\ReaderController;
use App\Http\Controllers\SearchController;
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
})->name('home');

Route::get('/contact', function () {  
    return view('contact');
})->name("contact");

Route::get('/about', function () {  
    return view('about');
})->name("about");
Route::get('/home', [AuthController::class ,'isLogin']);



Route::get('/search',[SearchController::class,'search'])->name('search');




Route::get('/LibraryDash', function () {
        return view('library.LibraryDash');
    })->name('LibraryDash');
    
    
    ////////////////////////////////////////////////special for library and books///////////////////////////////////////////
Route::get('/dashbord', function () {   
    return view('library.LibraryDash');
})->name("dashboard");

// Route::get('/dashbord/books', function () {   
//     return view('library.books');
// })->name("allbooks");


Route::get('/books/AddBook', [LibraryController::class , 'createForAdd'])->name("AddBook");

Route::get('/books/EditBook', [LibraryController::class , 'createForEdit'] )->name("EditBook");

// crud for book 
Route::get('/books', [LibraryController::class,'index'])->name("books");

Route::get('/books/edit/{id}', [LibraryController::class,'showById'])->name('edit.Book');

Route::post('/books/update/{id}', [LibraryController::class,'update'])->name('updateBook');

Route::post('/books/NewBook', [LibraryController::class ,'store'])->name('NewBook');

Route::get('/books/{id}', [LibraryController::class ,'delete'])->name('delete.book');

///////////////////////////////////////////////////special for reader and articles////////////////////////////////////////////////////

Route::get('/ReaderDash', function () {
    return view('reader.ReaderDash');
})->name('ReaderDash');

Route::get('/AddArticle', function(){
    return view('reader.AddArticle');
})->name('add.article');

// crud

Route::get('/Articles',[ReaderController::class,'index'])->name('articles');

Route::post('/articles/NewArticle',[ReaderController::class,'store'])->name('newArticle')->middleware('auth');

Route::get('/article/edit/{id}', [ReaderController::class,'showById'])->name('edit.article');

Route::post('/Article/update/{id}', [ReaderController::class, 'update'])->name('updateArticle');

Route::get('/article/delete/{id}', [ReaderController::class ,'delete'])->name('delete.article');

/////////////////////////////////////special for admin///////////////////////////////////////////////

Route::get('/adminDash', function () {
return view('admin.adminDash');
})->name('adminDash');

Route::get('/allArticles', function () {
return view('admin.allArticles');
})->name('allarticles');

// Route::get('/allBooks', function () {
// return view('admin.allBooks');
// })->name('allbooks');




// crud for reader 
Route::get('/admin/allReaders',[AdminController::class,'AllReaders'])->name('allReaders');
Route::get('/admin/deleteReader/{id}',[AdminController::class,'deleteReaders'])->name('DeleteReaders');

// crud for library 
Route::get('/admin/allLibraries',[AdminController::class,'AllLibraries'])->name('AllLibraries');
Route::get('/admin/deleteLibrary/{id}',[AdminController::class,'deleteLibrary'])->name('deleteLibrary');

// crud for articles 
Route::get('/dashboard/articles',[AdminController::class , 'AllArticles'])->name('all.Articles');
Route::get('/delete/{id}',[AdminController::class , 'deleteArt'])->name('deleteArt');

//crud for books
Route::get('/dashboard/books',[AdminController::class , 'AllBooks'])->name('all.Books');