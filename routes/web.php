<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [CustomAuthController::class, 'index'])->name('login');
    Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
    Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
    Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
    Route::get('dashboard', [BookController::class, 'index']);
    Route::get('create', [BookController::class, 'create'])->name('book.create');
    Route::post('store', [BookController::class, 'store'])->name('book.store');
    Route::get('edit/{id}', [BookController::class, 'edit'])->name('book.edit');
    Route::post('update', [BookController::class, 'update'])->name('book.update');
    Route::get('destroy/{id}', [BookController::class, 'destroy'])->name('book.destroy');
});
