<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackageController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
// Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/about', [HomeController::class, 'about'])->name('about');

// Packages / Pricing Plans
Route::get('/packages', [PackageController::class, 'packages'])->name('packages');
Route::get('/plan-request', [PackageController::class, 'planRequest'])->name('plan-request');
Route::post('/plan-request', [PackageController::class, 'sendPlanRequest'])->name('plan-request');
