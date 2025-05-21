<?php

use App\Http\Controllers\admin\AdminUser;
use App\Http\Controllers\auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return route('login');
});

Route::middleware(['guest'])->group(function (){
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login/s', [AuthController::class, 'login'])->name('login.submit');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::controller(AdminUser::class)->middleware(['auth', 'admin'])->group(function (){
    Route::get('admin', 'dashboard')->name('admin.dashboard');
    Route::get('admin/guru', 'dashboard')->name('admin.guru');
    Route::get('admin/siswa', 'dashboard')->name('admin.siswa');
    Route::get('admin/kelas-jurusan', 'dashboard')->name('admin.kj');
    Route::get('admin/mapel', 'dashboard')->name('admin.mapel');
});

