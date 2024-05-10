<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = auth()->user();
            if ($user->roles == 'mahasiswa') {
                return redirect()->route('mahasiswa-dashboard');
            } elseif ($user->roles == 'dosen') {
                return redirect()->route('dosen-dashboard');
            }
        }
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $user = auth()->user();
            if ($user->roles == 'mahasiswa') {
                return redirect()->route('mahasiswa-dashboard');
            } elseif ($user->roles == 'dosen') {
                return redirect()->route('dosen-dashboard');
            }
        }

        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    public function logout(Request $request)
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
