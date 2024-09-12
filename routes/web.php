<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('/home');

Route::get('/about-us', function () {
    return view('about-us');
})->name('/about');
Route::get('/photo-gallery', function () {
    return view('photo');
})->name('/photo-gallery');

Route::get('/our-people', function () {
    return view('founder');
})->name('/founder');

Route::post('/send-mail', [MailController::class, 'sendMail'])->name('send.mail');
