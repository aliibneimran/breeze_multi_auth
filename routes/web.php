<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
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

//Admin
Route::prefix('admin')->group(function(){
    Route::get('login',[AdminController::class,'index'])->name('admin_login_form');
    Route::post('login/owner',[AdminController::class,'login'])->name('admin_login');
    Route::get('dashboard',[AdminController::class,'dashboard'])->name('admin_dashboard')->middleware('admin');
    Route::get('/logout',[AdminController::class,'logout'])->name('admin_logout')->middleware('admin');
    Route::get('register',[AdminController::class,'register'])->name('admin_register');
    Route::post('register/create',[AdminController::class,'registration'])->name('admin.register.create');
});

//Company
Route::prefix('company')->group(function(){
    Route::get('login',[CompanyController::class,'index'])->name('company_login_form');
    Route::post('login/company',[CompanyController::class,'login'])->name('company_login');
    Route::get('dashboard',[CompanyController::class,'dashboard'])->name('company_dashboard')->middleware('company');
    Route::get('logout',[CompanyController::class,'logout'])->name('company_logout')->middleware('company');
    Route::get('register',[CompanyController::class,'register'])->name('company_register');
    Route::post('register/create',[CompanyController::class,'registration'])->name('company.register.create');
});

//Candidate
Route::prefix('candidate')->group(function(){
    Route::get('login',[AdminController::class,'index'])->name('candidate_login_form');
    Route::post('login/owner',[AdminController::class,'login'])->name('candidate_login');
    Route::get('dashboard',[AdminController::class,'dashboard'])->name('candidate_dashboard')->middleware('candidate');
    Route::get('dashboard',[AdminController::class,'dashboard'])->name('candidate_dashboard')->middleware('candidate');
});



Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
