<?php

use App\Http\Controllers\CaseStudy\AiPapiCaseStudyController;
use App\Http\Controllers\CaseStudy\NotedlyCaseStudyController;
use App\Http\Controllers\CaseStudy\RadarCaseStudyController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\PrayerTimesController;
use Illuminate\Support\Facades\Route;

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
