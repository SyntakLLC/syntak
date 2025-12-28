<?php

use App\Http\Controllers\CaseStudy\AiPapiCaseStudyController;
use App\Http\Controllers\CaseStudy\NotedlyCaseStudyController;
use App\Http\Controllers\CaseStudy\RadarCaseStudyController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\PrayerTimesController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
});

Route::get('/', LandingController::class)->name('landing');

Route::prefix('case-study')->group(function () {
    Route::get('/notedly', NotedlyCaseStudyController::class)->name('case-study.notedly');
    Route::get('/aipapi', AiPapiCaseStudyController::class)->name('case-study.aipapi');
    Route::get('/radar', RadarCaseStudyController::class)->name('case-study.radar');
});

Route::get('/logo', LogoController::class)->name('logo');

Route::get('/prayer-times', PrayerTimesController::class)->name('prayer-times');
Route::post('/api/prayer-times/location', [PrayerTimesController::class, 'getPrayerTimesByLocation'])->name('prayer-times.location');

Route::prefix('designs')->group(function () {
    Route::get('/', function () {
        return Inertia::render('Designs/Index');
    })->name('designs.index');
    Route::get('better-call-saul', function () {
        return Inertia::render('Designs/BetterCallSaul');
    })->name('designs.better-call-saul');
    Route::get('wayne-enterprises', function () {
        return Inertia::render('Designs/WayneEnterprises');
    })->name('designs.wayne-enterprises');
    Route::get('death-star', function () {
        return Inertia::render('Designs/DeathStar');
    })->name('designs.death-star');
    Route::get('daily-bugle', function () {
        return Inertia::render('Designs/DailyBugle');
    })->name('designs.daily-bugle');
    Route::get('jurassic-park', function () {
        return Inertia::render('Designs/JurassicPark');
    })->name('designs.jurassic-park');
});

Route::prefix('pixel-maps')->group(function () {
    Route::get('privacy-policy', function () {
        return Inertia::render('PixelMaps/PrivacyPolicy');
    })->name('pixel-maps.privacy-policy');
    Route::get('terms-and-conditions', function () {
        return Inertia::render('PixelMaps/TermsAndConditions');
    })->name('pixel-maps.terms-and-conditions');
    Route::get('support', function () {
        return Inertia::render('PixelMaps/Support');
    })->name('pixel-maps.support');
});
