<?php

use App\Http\Controllers\admin\AdminUser;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\guru\GuruPageController;
use App\Http\Controllers\siswa\SiswaPageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware(['guest'])->group(function (){
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login/s', [AuthController::class, 'login'])->name('login.submit');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/dashboard', function(){
    if(Auth::user()->role === 'admin'){
        return redirect()->route('admin.dashboard');
    }else if(Auth::user()->role === 'siswa'){
        return redirect()->route('siswa.dashboard');
    }else{
        return redirect()->route('guru.dashboard');
    }
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::controller(AdminUser::class)->middleware(['auth', 'admin'])->group(function (){
    Route::get('admin', 'dashboard')->name('admin.dashboard');
    Route::get('admin/guru', 'dashboard')->name('admin.guru');
    Route::get('admin/siswa', 'dashboard')->name('admin.siswa');
    Route::get('admin/kelas-jurusan', 'dashboard')->name('admin.kj');
    Route::get('admin/mapel', 'dashboard')->name('admin.mapel');
});

Route::controller(SiswaPageController::class)->middleware(['auth', 'siswa'])->group(function (){
    Route::get('siswa', 'dashboard')->name('siswa.dashboard');
});

Route::controller(GuruPageController::class)->middleware(['auth', 'guru'])->group(function () {
    Route::get('guru', 'dashboard')->name('guru.dashboard');
});