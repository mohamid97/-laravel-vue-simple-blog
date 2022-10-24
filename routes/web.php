<?php

use App\Http\Controllers\PostController;
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
Route::get('/mohamed', function () {
    dd('fdfd');
})->name('dd');
Route::get('/api/getPosts' , [PostController::class , 'getPosts'])->name('getPosts');
Route::get('/api/post/{id}' , [PostController::class , 'getPost'])->name('getpost');
