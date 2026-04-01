<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/transactions', function () {
    return view('transactions');
});

Route::get('/reports', function () {
    return view('reports');
});

Route::get('/accounts', function () {
    return view('accounts');
});

Route::get('/settings', function () {
    return view('settings');
});
