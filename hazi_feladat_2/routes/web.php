<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// 1. Feladat
Route::get('/welcome', function () {
    return 'Hello, világ!';
});

// 2. Feladat
Route::get('/hello/{felhasznalonev}', function (string $felhasznalonev) {
    return 'Hello, ' . $felhasznalonev . '!';
});

// 3. Feladat
Route::prefix('admin')->group(function () {
    Route::get('categories', [CategoryController::class, 'index']);
    Route::get('products', [ProductController::class, 'index']);
});

// 4. Feladat
Route::post('store', [UserController::class, 'store']);

// 5. Feladat
Route::get('today', [TestController::class, 'today']);

// 6. Feladat
Route::get('user/{name?}', [UserController::class, 'index']);

// 7. Feladat
Route::get('users', [UserController::class, 'list'])->name('users.list');

// 8. Feladat
Route::redirect('/felhasznalok', '/users');
