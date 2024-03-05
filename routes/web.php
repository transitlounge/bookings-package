<?php

use Illuminate\Support\Facades\Route;

Route::get('/transitlounge/bookings', function () {
    return view('transitlounge::bookings');
})->name('transitlounge.bookings');
