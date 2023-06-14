<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [HomeController::class,'redirect']);

Route::get('/', [HomeController::class,'index']);

Route::get('/product', [AdminController::class,'product']);

Route::post('/uploadlisting', [AdminController::class,'uploadlisting']);

Route::get('/showproduct', [AdminController::class,'showproduct']);

Route::get('/deleteproduct/{id}', [AdminController::class,'deleteproduct']);

Route::get('/updateview/{id}', [AdminController::class,'updateview']);

Route::post('/updatelisting/{id}', [AdminController::class,'updatelisting']);

Route::get('/search', [HomeController::class,'search']);

Route::post('/addbookmark/{id}', [HomeController::class,'addbookmark']);

Route::get('/showbookmark', [HomeController::class,'showbookmark']);

Route::get('/delete/{id}', [HomeController::class,'deletebookmark']);

Route::post('/order', [HomeController::class,'confirmorder']);

Route::get('/showrental', [AdminController::class,'showrental']);

Route::get('/updatestatus/{id}', [AdminController::class,'updatestatus']);

Route::get('/about', [HomeController::class,'about']);

Route::get('/product_details/{id}', [HomeController::class,'product_details']);