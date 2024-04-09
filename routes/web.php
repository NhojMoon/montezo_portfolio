<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ContactController;
use App\Http\Middleware\RoleChecker;
use App\Models\Educations;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::middleware(['RoleChecker:admin'])->group(function () {
        Route::resource('profiles', AdminController::class);
        Route::resource('admin', UserController::class);
    });

Route::resource('work', WorkController::class);
Route::resource('contacts', ContactController::class);
Route::resource('education', EducationController::class);
Route::resource('experience', ExperienceController::class);
Route::resource('skills', SkillController::class);
Route::resource('/', FrontendController::class);