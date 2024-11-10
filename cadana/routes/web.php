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
    // database_upload_profileimg
    Route::post('/database_upload_file', [CadanaUpdateDatabaseController::class, 'database_upload_file'])->name('database_upload_file');
    Route::post('/database_upload_profileimg', [CadanaUpdateDatabaseController::class, 'database_upload_profileimg'])->name('database_upload_profileimg');

    Route::get('/allusers', [CadanaDashboardPages::class, 'allusers'])->name('allusers');
    Route::get('/clinics', [CadanaDashboardPages::class, 'allclinics'])->name('allclinics');
    Route::get('/professionals', [CadanaDashboardPages::class, 'allprofessionals'])->name('allprofessionals');
    Route::get('/donors', [CadanaDashboardPages::class, 'alldonors'])->name('alldonors');

    Route::get('/profile/{x}', [CadanaDashboardPages::class, 'accountsprofile'])->name('accountsprofile');
    Route::get('/clinicprofile', [CadanaDashboardPages::class, 'clinicprofile'])->name('clinicprofile');
    Route::get('/clinicsettings', [CadanaDashboardPages::class, 'clinicsettings'])->name('clinicsettings');

    Route::get('/donorprofile', [CadanaDashboardPages::class, 'donorprofile'])->name('donorprofile');
    Route::get('/usersettings/{x}', [CadanaDashboardPages::class, 'donorsettings'])->name('donorsettings');
    Route::get('/vettedcredentials/{x}', [CadanaDashboardPages::class, 'vettedcredentials'])->name('vettedcredentials');
    Route::get('/updatepassword/{x}', [CadanaDashboardPages::class, 'updatepassword'])->name('updatepassword');
    Route::get('/accountsverification/{x}', [CadanaDashboardPages::class, 'accountsverification'])->name('accountsverification');
    Route::get('/medicalrecords/{x}', [CadanaDashboardPages::class, 'medicalrecords'])->name('medicalrecords');
    Route::get('/donationrecords/{x}', [CadanaDashboardPages::class, 'donationrecords'])->name('donationrecords');

    Route::get('/donorsettings/{x}/{y}', [CadanaDashboardPages::class, 'donorsettings'])->name('donorsettings');

    Route::get('/medicalhistory/edit/{postid}', [CadanaDashboardPages::class, 'edit_medical_history'])->name('edit_medical_history');
    Route::get('/donatinghistory/edit/{postid}', [CadanaDashboardPages::class, 'edit_donating_history'])->name('edit_donating_history');

    Route::get('/settings', [CadanaDashboardPages::class, 'authenticatedsettings'])->name('authenticatedsettings');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
