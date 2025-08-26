<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

use Spatie\Honeypot\ProtectAgainstSpam;

use App\Http\Controllers\ContactController;

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::post('/send-email', [ContactController::class, 'send'])
    ->middleware(['throttle:1,5', ProtectAgainstSpam::class])
    ->name('send.email');

Route::get('/nvocc', function () { return view('nvocc'); });
Route::get('/freight-forwarding', function () { return view('freight-forwarding'); });
Route::get('/domestic-forwarding', function () { return view('domestic-forwarding'); });
Route::get('/flexitank-flexibag', function () { return view('flexitank-flexibag'); });
Route::get('/flexitank-flexibag-details', function () { return view('flexitank-flexibag-details'); });
Route::get('/project-logistics', function () { return view('project-logistics'); });

Route::get('/terms-and-conditions', function () { return view('terms-and-conditions'); });
Route::get('/privacy-policy', function () { return view('privacy-policy'); });
