<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [HomeController::class, 'getHome']);

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/logout', function () {
    return 'Logout usuario';
})->name('logout');

Route::get('/category', [CategoryController::class, 'getIndex']);

Route::get('/category/show/{id}', [CategoryController::class, 'getShow']);

Route::get('/category/create', [CategoryController::class, 'getCreate']);

Route::get('/category/edit/{id}', [CategoryController::class, 'getEdit']);
?>