<?php

use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\SkillController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', WelcomeController::class)->name('welcome');
Route::post('/contact', ContactController::class);


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('/skills', SkillController::class);
    Route::resource('/projects', ProjectController::class);
   Route::get('/profile/edit', 'ProfileController@edit')->name('profile.edit');
});

require __DIR__ . '/auth.php';