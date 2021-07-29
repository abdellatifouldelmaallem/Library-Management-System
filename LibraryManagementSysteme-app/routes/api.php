<?php

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

Route::get('book', function () {
    return book::all();
});

Route::post('book', function (Request $request) {
    return book::create([
        'name'=>$request->name,
        'image'=>$request->image,
        'description'=>$request->description,
        'price'=>$request->price,
        'auther_id'=>$request->auther_id,
        'category_id'=>$request->category_id,
    ]);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
