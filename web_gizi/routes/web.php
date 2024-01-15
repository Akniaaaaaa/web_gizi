<?php

use App\Http\Controllers\FastfoodController;
use App\Http\Controllers\PhysicController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/physic/activity', [PhysicController::class, 'index'])->name('physic.activity');
    Route::get('/check_gizi', [PhysicController::class, 'create'])->name('check_gizi');
    Route::post('/check_gizi/str', [PhysicController::class, 'store'])->name('calculate_activity');
    Route::get('/check_gizi/result', [PhysicController::class, 'result'])->name('result_activity');
});
Route::middleware('auth')->group(function () {
    Route::get('/fastfood_track', [FastfoodController::class, 'index'])->name('fastFood_track');
    // Route::get('/check_gizi', [FastfoodController::class, 'create'])->name('check_gizi');
    // Route::post('/check_gizi/str', [FastfoodController::class, 'store'])->name('calculate_activity');
    Route::get('/fastfood/result', [FastfoodController::class, 'result'])->name('result_fastfood');
});

require __DIR__ . '/auth.php';
