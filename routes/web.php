<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route("login");
});

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
