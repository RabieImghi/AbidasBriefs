<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoriesControllers;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Controller::class, 'index']);
Route::get('/Products', [ProductController::class, 'index']);
Route::get('/Categories', [CategoriesControllers::class, 'index']);
Route::post('/addProduct', [ProductController::class, 'add']);
Route::post('/addCategory', [CategoriesControllers::class, 'add']);
Route::post('/updateCategory/{id}', [CategoriesControllers::class, 'update']);
Route::get('/DeletCategory/{id}', [CategoriesControllers::class, 'delet']);
