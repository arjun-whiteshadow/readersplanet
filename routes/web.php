<?php

use App\Models\Contact;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use App\Models\Book;

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

Route::get('/', [App\Http\Controllers\WelcomeController::class,'index'])->name('welcome');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// create book and category

Route::get('/admin/book/create', [App\Http\Controllers\BookController::class,'create'])->name('bookcreate');
Route::get('/admin/book/createcategory', [App\Http\Controllers\CategoryController::class,'create']);
Route::post('/admin/book/store', [App\Http\Controllers\BookController::class,'store']);
Route::post('/admin/book/storecat', [App\Http\Controllers\CategoryController::class,'storecat']);




Route::get('contact-us', [App\Http\Controllers\ContactController::class,'create'])->name('contact');
Route::post('/contact-save', [App\Http\Controllers\ContactController::class,'store'])->name('contactsave');