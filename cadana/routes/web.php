<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CadanaDashboardPages;
use App\Http\Controllers\CadanaUpdateDatabaseController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// registration routes
Route::get('/donor-registration', [CadanaDashboardPages::class, 'donor_registration'])->name('donor_registration');

Route::middleware('auth')->group(function () {

    Route::get('/', [CadanaDashboardPages::class, 'dashboardindex'])->name('dashboardindex');
    Route::get('/dashboard', [CadanaDashboardPages::class, 'dashboardindex'])->name('dashboard');

    Route::get('/assignaccount', [CadanaDashboardPages::class, 'assignaccount'])->name('assignaccount');

    Route::post('/database_update', [CadanaUpdateDatabaseController::class, 'database_update'])->name('database_update');

    Route::get('/allusers', [CadanaDashboardPages::class, 'allusers'])->name('allusers');
    Route::get('/clinicprofile', [CadanaDashboardPages::class, 'clinicprofile'])->name('clinicprofile');
    Route::get('/clinicsettings', [CadanaDashboardPages::class, 'clinicsettings'])->name('clinicsettings');

    Route::get('/donorprofile', [CadanaDashboardPages::class, 'donorprofile'])->name('donorprofile');
    Route::get('/donorsettings/{x}', [CadanaDashboardPages::class, 'donorsettings'])->name('donorsettings');

    Route::get('/donorsettings/{x}/{y}', [CadanaDashboardPages::class, 'donorsettings'])->name('donorsettings');

    Route::get('/medicalhistory/edit/{ownerid}/{postid}', [CadanaDashboardPages::class, 'edit_medical_history'])->name('edit_medical_history');

    Route::get('/settings', [CadanaDashboardPages::class, 'authenticatedsettings'])->name('authenticatedsettings');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
