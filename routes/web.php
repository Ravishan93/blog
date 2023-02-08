<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BookController;
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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


 Route::get('/books/store', [BookController::class, 'store'])->name('books.store');
 Route::get('/books/{bookId}/show', [BookController::class, 'show'])->name('books.show');
 Route::get('/books/all', [HomeController::class, 'allbooks'])->name('books.all');
 Route::get('/req/all', [HomeController::class, 'allReq'])->name('books.req');
 Route::get('/books/{bookId}/edit', [BookController::class, 'edit'])->name('books.edit');
 Route::post('/books/{bookId}/update', [BookController::class, 'update'])->name('books.update');
 Route::get('/books/{bookId}/delete', [BookController::class, 'delete'])->name('books.delete');
//  Route::get('/layouts/{bookId}/borrow', [BookController::class, 'store'])->name('books.delete');

 Route::get('/layouts/{bookId}/borrow', function () {
    return view('Request Sent!');
});