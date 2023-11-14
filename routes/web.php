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
    return view('home');
})->name('home');

Route::prefix('characters')->group(function () {
    Route::get('/', function () {
        return view('allcharacter');
    })->name('allcharacter');

    Route::get('5stars', function () {
        return view('character5star');
    })->name('character5star');

    Route::get('4stars', function () {
        return view('character4star');
    })->name('character4star');
});

Route::prefix('weapons')->group(function () {
    Route::get('/', function () {
        return view('allweapon');
    })->name('allweapon');

    Route::get('5stars', function () {
        return view('weapon5star');
    })->name('weapon5star');

    Route::get('4stars', function () {
        return view('weapon4star');
    })->name('weapon4star');

    Route::get('3stars', function () {
        return view('weapon3star');
    })->name('weapon3star');

    Route::get('2stars', function () {
        return view('weapon2star');
    })->name('weapon2star');

    Route::get('1stars', function () {
        return view('weapon1star');
    })->name('weapon1star');
});

Route::get('artifacts', function () {
    return view('artifacts');
})->name('artifacts');
