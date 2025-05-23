<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuruPageController extends Controller
{
    //
    public function dashboard()
    {
        return view('users.siswa.dashboard');
    }
}
