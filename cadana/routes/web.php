<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CadanaDashboardPages;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // 
    Route::get('/', [CadanaDashboardPages::class, 'dashboardindex'])->name('dashboardindex');
    Route::get('/dashboard', [CadanaDashboardPages::class, 'dashboardindex'])->name('dashboard');

    Route::get('/allusers', [CadanaDashboardPages::class, 'allusers'])->name('allusers');
    Route::get('/clinicprofile', [CadanaDashboardPages::class, 'clinicprofile'])->name('clinicprofile');
    Route::get('/clinicsettings', [CadanaDashboardPages::class, 'clinicsettings'])->name('clinicsettings');

    Route::get('/donorprofile', [CadanaDashboardPages::class, 'donorprofile'])->name('donorprofile');
    Route::get('/donorsettings', [CadanaDashboardPages::class, 'donorsettings'])->name('donorsettings');

    Route::get('/settings', [CadanaDashboardPages::class, 'authenticatedsettings'])->name('authenticatedsettings');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
