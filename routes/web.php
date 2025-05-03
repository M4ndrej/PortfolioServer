<?php

use App\Http\Controllers\admin\ExperienceAdminController;
use App\Http\Controllers\admin\ProjectAdminController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});
Route::middleware(['auth'])->group(function(){
    Route::resource('dashboard', DashboardController::class);
    Route::resource('project', ProjectAdminController::class);
    Route::resource('experience', ExperienceAdminController::class);

    Route::post('logout', [AdminUserController::class,'adminLogout'])->name('admin.logout');
    Route::prefix('admin')->group(function(){
    });
});
