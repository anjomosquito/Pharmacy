<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/Admin-Dashboard', function () {
    return view('dashboard');
});

Route::get('/Admin-Account', function () {
    return view('accountsset\account');
});

Route::get('/Admin-Notifications', function () {
    return view('accountsset\notification');
});


