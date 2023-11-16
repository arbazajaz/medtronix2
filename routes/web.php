<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SalarySlipController;

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
    return view('index');
});

Route::get('/projects', function () {
    return view('project');
});

Route::get('/team', function () {
    return view('team');
});
Route::get('/services', function () {
    return view('service');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/about-us', function () {
    return view('about');
});
Route::get('/contact-us', function () {
    return view('contact');
});

// employee


// Routes for admins
Route::middleware(['auth'])->group(function () {

    Route::get('/admin', [DashboardController::class, 'user'])->name('dashboard');
    Route::get('/employees', [DashboardController::class, 'index'])->name('employees.index');
    Route::get('/profile-settings', [DashboardController::class, 'profile_settings'])->name('profile.settings');

    Route::get('/employees/create', [DashboardController::class, 'create'])->name('employees.create');
    Route::get('/employees/{employee}', [DashboardController::class, 'show'])->name('employees.show');
    Route::post('/employees', [DashboardController::class, 'store'])->name('employees.store');
    Route::get('/profile/{employee}/edit', [DashboardController::class, 'edit'])->name('employees.edit');
    Route::put('/employees/{employee}', [DashboardController::class, 'update'])->name('employees.update');
    Route::delete('/employees/{employee}', [DashboardController::class, 'destroy'])->name('employees.destroy');
    Route::post('/employees/update-profile-picture/{employee}', [DashboardController::class, 'updateProfilePicture'])->name('updateProfilePicture');

    // update profile 
    Route::post('/profile-settings-picture', [DashboardController::class, 'profile_settings_picture'])->name('update.profile.picture');
    Route::post('/profile-settings-info', [DashboardController::class, 'profile_settings_info'])->name('update.profile.info');
    Route::post('/profile-settings-links', [DashboardController::class, 'profile_settings_links'])->name('update.profile.links');
    

    Route::get('/salary_slips', [SalarySlipController::class, 'index'])->name('salary_slips.index');
    Route::get('/salary_slips/create/{id}', [SalarySlipController::class, 'create'])->name('salary_slips.create');
    Route::post('/salary_slips', [SalarySlipController::class, 'store'])->name('salary_slips.store');
    Route::get('/salary_slips/{id}', [SalarySlipController::class, 'show'])->name('salary_slips.show');
    Route::get('/salary_slips/{id}/edit', [SalarySlipController::class, 'edit'])->name('salary_slips.edit');
    Route::put('/salary_slips/{id}', [SalarySlipController::class, 'update'])->name('salary_slips.update');
    Route::delete('/salary_slips/{id}', [SalarySlipController::class, 'destroy'])->name('salary_slips.destroy');
});







Auth::routes();
// Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
