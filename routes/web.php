<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('/home');
Route::get('/about-us', function () {
    return view('about-us');
})->name('/about');
Route::get('/our-service', function () {
    return view('our-service');
})->name('/service');
Route::get('/founder', function () {
    return view('founder');
})->name('/founder');

Route::get('/faq', function () {
    return view('faq');
})->name('/faq');
