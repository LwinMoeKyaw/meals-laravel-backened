<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
// use App\Repositories\Api\CategoryRepository;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('/ok', function(){

//     dd('hi');

// });
Route::controller(CategoryController::class)->group(function(){

    Route::get('categories','all');

    Route::get('/categories/{id}','getCategoryById');

});
// Route::get('categories', [CategoryController::class,'all']);
// Route::get('/categories/{id}',[CategoryController::class,'getCategoryById']);

Route::get('products', [ProductController::class,'all']);
Route::get('products/{id}', [ProductController::class,'getProductById']);


