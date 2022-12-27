<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\HomeController;
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

// views
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', function () {

})->name('login');
Route::get('/register', function () {

})->name('register');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contact.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/posts', [PostController::class, 'index'])->name('post.index');

// CRUD
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/update', [PostController::class, 'update']);
Route::get('/posts/delete', [PostController::class, 'delete']);
Route::get('/posts/restore', [PostController::class, 'restore']);
Route::get('/posts/first-or-create', [PostController::class, 'firstOrCreate']);
Route::get('/posts/update-or-create', [PostController::class, 'updateOrCreate']);

Route::get('/hello_php', [HelloController::class, 'Hello_PHP']);
Route::get('/hello_laravel', [HelloController::class, 'Hello_Laravel']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
