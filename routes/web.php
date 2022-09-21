<?php

use App\Http\Controllers\Home;

Route::redirect('/', 'auth/login');

Route::get('dashboard', \App\Http\Controllers\DashboardController::class)->name('dashboard');

Route::middleware(['auth', 'verified'])
    ->group(
        function () {
            Route::get('/home', Home::class)->name('home');
        }
    );

include __DIR__.'/auth.php';
include __DIR__.'/my.php';
