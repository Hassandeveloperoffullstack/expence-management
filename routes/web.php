<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.layout.layout');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard.dashboard');
})->name('dashboard');
