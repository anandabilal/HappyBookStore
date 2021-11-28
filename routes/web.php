<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DetailController;

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

/*
NIM         : 2301883725
Nama        : Ananda Bilal
Jurusan     : Teknik Informatika
Semester    : 5 (Odd 2021/2022)
Kelas       : COMP6681001 - Web Programming LK01
*/

Route::get('/', [BookController::class, 'getBookTitleAndAuthor']);

Route::get('/detail/{id}', [DetailController::class, 'getBookDetail']);

Route::get('/category/{id}', [CategoryController::class, 'getBookCategory']);

Route::get('/contact', [CategoryController::class, 'getAllCategoryOnly']);
