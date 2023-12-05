<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PostController::class,"index"])->name('post.index');
Route::get('/posts/create', [PostController::class,"create"])->name('post.create');
Route::post('/posts/create', [PostController::class,"store"])->name('post.store');
Route::get('/posts/show/{id}', [PostController::class,"show"])->name('post.show');
Route::delete('/posts/delete/{id}', [PostController::class,"destroy"])->name('post.destroy');
Route::get('/posts/edit/{id}', [PostController::class,"edit"])->name('post.edit');
Route::put('/posts/update/{id}', [PostController::class,"update"])->name('post.update');
