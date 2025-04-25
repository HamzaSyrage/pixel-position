<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/jobs/create', [JobController::class, 'create'])->can('create', App\Models\Job::class)->name('job.create');
    Route::post('/jobs', [JobController::class, 'store'])->name('job.store');
});

Route::get('/jobs/{job}', [JobController::class, 'show'])->name('job.show');

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');

    Route::get('/login', [SessionController::class, 'create'])->name('login');
    Route::post('/login', [SessionController::class, 'store'])->name('login.store');
});

Route::delete('/logout', [SessionController::class, 'destroy'])->name('logout')->middleware('auth');

Route::get('/search', SearchController::class)->name('search');
Route::get('/tag/{tag:name}', TagController::class)->name('tag.show');
