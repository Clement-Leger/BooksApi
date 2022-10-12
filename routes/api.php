<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Books;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getAll', function(){
    return Books::all();
});

Route::get('getBookByYear', function(){
    return Books::orderBy('date_of_parution', 'ASC')->get();
});

Route::get('getBookByAuthor', function(){
    $search = $_GET['query'];
    return Books::where('author','LIKE', '%'.$search.'%')->get();
});

Route::get('getBookByCategory', function(){
    $search = $_GET['query'];
    return Books::where('category', 'LIKE', '%'.$search.'%')->get();
});