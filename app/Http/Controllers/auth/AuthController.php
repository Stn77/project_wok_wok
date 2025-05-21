<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('users.auth.login');
    }

    public function Login(Request $request)
    {
        $credentials = $request->validate([
            'nisn' => 'required|numeric',
            'password' => 'required'
        ]);

        $user = User::where('nisn', $request->nisn)->first();
        if(!$user){
            return redirect()->back()->withErrors([
                'nisn' => 'nisn salah / tidak terdaftar'
            ]);
        }

        if($user->status === 'ban'){
            return redirect()->back()->withErrors([
                'ban' => 'maaf akun kamu sedang di blokir, silahkan hubungi yang bersangkutan'
            ]);
        }

        if(!Auth::attempt($credentials)){
            return redirect()->back()->withErrors([
                'password' => 'password Salah'
            ]);
        }
        
        $request->session()->regenerate();
        
        $user = Auth::user();
        if($user->role === 'admin'){
            return redirect()->route('admin.dashboard');
        } else if ($user->role === 'guru'){
            
        } else {

        }
    }
}
