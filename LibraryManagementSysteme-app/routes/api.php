<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\ReaderController;
use App\Models\book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/////////////////////////////////// public routes //////////////////////////////////
// crud API for book 
Route::get('books', [LibraryController::class ,'index']);
Route::get('book/{id}', [LibraryController::class ,'showById']);
Route::get('book/search/{name}', [LibraryController::class ,'search']);

// crud API for article 
Route::get('articles', [ReaderController::class ,'index']);
Route::get('article/{id}', [ReaderController::class ,'showById']);

// crud for reader  
Route::get('readers', [AdminController::class ,'indexForReader']);
Route::get('reader/{id}', [AdminController::class ,'showByIdReader']);

// crud for library 
Route::get('libraries', [AdminController::class ,'indexforlibrary']);
Route::get('library/{id}', [AdminController::class ,'showByIdLibrary']);

// register and logout and login for reader
Route::post('registerReader',[AuthController::class ,'registerReader']);
Route::post('logoutReader',[AuthController::class ,'logoutForReader']);
Route::post('loginReader',[AuthController::class ,'loginReader']);

// register  and logout and login for librarian
Route::post('registerLibrarian',[AuthController::class , 'registerLibrarian']);
Route::post('loginLibrarian',[AuthController::class , 'loginLibrarian']);

/////////////////////////////////// protecting routes //////////////////////////////////

Route::group(['middleware'=>['auth:sanctum']], function() {
    
    Route::delete('DeleteReader/{id}', [AdminController::class,'destroyforReader']);
    Route::delete('DeleteLibrary/{id}', [AdminController::class,'destroyforlibrary']);
    // for book
    Route::delete('DeleteBook/{id}', [LibraryController::class,'destroy']);
    Route::put('EditBook/{id}', [LibraryController::class,'update']);
    Route::post('AddBook',[LibraryController::class ,'store']);
    // for article
    Route::post('AddArticle',[ReaderController::class ,'store']);
    Route::delete('DeleteArticle/{id}', [ReaderController::class,'destroy']);
    Route::put('EditArticle/{id}',[ReaderController::class, 'update']);
});

















Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
