<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\IndustryController;
use App\Http\Controllers\backend\LocationController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\frontend\HomeController;
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

//category
    Route::get('categories',[CategoryController::class,'index'])->name('categories.index')->middleware('admin');
    Route::get('categories/create',[CategoryController::class,'create'])->name('categories.create')->middleware('admin');
    Route::post('categories/store',[CategoryController::class,'store'])->name('categories.store')->middleware('admin');
    Route::get('categories/edit/{id}',[CategoryController::class,'edit'])->name('categories.edit')->middleware('admin');
    Route::post('categories/update/{id}',[CategoryController::class,'update'])->name('categories.update')->middleware('admin');
    Route::get('categories/delete/{id}',[CategoryController::class,'delete'])->name('categories.delete')->middleware('admin');

//location
    Route::get('locations',[LocationController::class,'index'])->name('locations.index')->middleware('admin');
    Route::get('locations/create',[LocationController::class,'create'])->name('locations.create')->middleware('admin');
    Route::post('locations/store',[LocationController::class,'store'])->name('locations.store')->middleware('admin');
    Route::get('locations/edit/{id}',[LocationController::class,'edit'])->name('locations.edit')->middleware('admin');
    Route::post('locations/update/{id}',[LocationController::class,'update'])->name('locations.update')->middleware('admin');
    Route::get('locations/delete/{id}',[LocationController::class,'delete'])->name('locations.delete')->middleware('admin');

//Industries
    Route::get('industries',[IndustryController::class,'index'])->name('industries.index')->middleware('admin');
    Route::get('industries/create',[IndustryController::class,'create'])->name('industries.create')->middleware('admin');
    Route::post('industries/store',[IndustryController::class,'store'])->name('industries.store')->middleware('admin');
    Route::get('industries/edit/{id}',[IndustryController::class,'edit'])->name('industries.edit')->middleware('admin');
    Route::post('industries/update/{id}',[IndustryController::class,'update'])->name('industries.update')->middleware('admin');
    Route::get('industries/delete/{id}',[IndustryController::class,'delete'])->name('industries.delete')->middleware('admin');
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


//Frontend
// Route::get('/', [HomeController::class, 'index'])->name('home');


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

require __DIR__.'/auth.php';
