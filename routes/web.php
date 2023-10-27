<?php

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
Route::get('/teachers', function () {
    return view('/teachers');
});
Route::get('/aboutus', function () {
    return view('/aboutus');
});
Route::get('/schedule', function () {
    return view('/schedule');
});
Route::get('/classes', function () {
    return view('/classes');
});
Route::get('/competition-team', function () {
    return view('/competition-team');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('trial', 'App\Http\Controllers\TrialController@create')->name('trial.create');
Route::post('trial', 'App\Http\Controllers\TrialController@store')->name('trial.store');

require __DIR__.'/auth.php';
