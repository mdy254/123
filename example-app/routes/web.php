<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}) -> name('home');

Route::get('/users/getAll',[\App\Http\Controllers\User\UserController::class,'viewUser']) ->name('user');
Route::get('/users',[\App\Http\Controllers\User\UserController::class,'getUser']) ->name('users');
Route::get('/users/user/{id}',[\App\Http\Controllers\User\UserController::class,'one']);
Route::get('/news', [\App\Http\Controllers\NewsController::class, 'index'])->name('news.index');
Route::get('/news/create', [\App\Http\Controllers\NewsController::class, 'create'])->name('news.create');
Route::post('/news', [\App\Http\Controllers\NewsController::class, 'store'])->name('news.store');
Route::get('/news/{id}', [\App\Http\Controllers\NewsController::class, 'show'])->name('news.show');
Route::get('/news/{id}/edit', [\App\Http\Controllers\NewsController::class, 'edit'])->name('news.edit');
Route::put('/news/{id}', [\App\Http\Controllers\NewsController::class, 'update'])->name('news.update');
Route::get('/404', function () {
    if (true) {
        abort(404);
    }
    return 'This is an 404 page';
}) -> name('404');
