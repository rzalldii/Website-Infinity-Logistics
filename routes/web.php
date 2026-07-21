<?php

use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MaintenanceController;

Route::view('/', 'sections.index')->name('home');

Route::post('/send-email', [ContactController::class, 'send'])
    ->middleware(['throttle:1,3', ProtectAgainstSpam::class])
    ->name('send.email');

Route::post('/language/switch', [LanguageController::class, 'switch'])
    ->name('language.switch');

Route::get('/maintenance/{token}', [MaintenanceController::class, 'clear'])
    ->middleware('throttle:5,1');

Route::view('/about', 'sections.about')->name('about');
Route::view('/services', 'sections.services')->name('services');
Route::view('/contact', 'sections.contact')->name('contact');
Route::view('/nvocc', 'services.nvocc')->name('nvocc');
Route::view('/nvocc-schedule', 'services.nvocc-schedule')->name('nvocc-schedule');
Route::view('/freight-forwarding', 'services.freight-forwarding')->name('freight-forwarding');
Route::view('/domestic-forwarding', 'services.domestic-forwarding')->name('domestic-forwarding');
Route::view('/flexitank-flexibag', 'services.flexitank-flexibag')->name('flexitank-flexibag');
Route::view('/flexitank-flexibag-details', 'services.flexitank-flexibag-details')->name('flexitank-flexibag-details');
Route::view('/project-logistics', 'services.project-logistics')->name('project-logistics');
Route::view('/customs-clearance', 'services.customs-clearance')->name('customs-clearance');