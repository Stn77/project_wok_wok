<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminUser extends Controller
{
    //
    public function dashboard()
    {
        return view('users.admin.dashboard');
    }

    public function guru()
    {
        return view('users.admin.user.guru');
    }

    public function siswa()
    {
        return view('users.admin.user.siswa');
    }

    public function mapel()
    {
        return view('users.admin.user.mata-pelajaran');
    }

    public function kelasJurusan()
    {
        return view('users.admin.user.kelas-jurusan');
    }
}
