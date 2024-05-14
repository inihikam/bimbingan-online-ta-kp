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
            $user = Auth::user();

            if ($user->hasRole('mahasiswa')) {
                return redirect()->route('mahasiswa-dashboard');
            }
            if ($user->hasRole('mahasiswa')) {
                return redirect()->route('dosen-dashboard');
            }
        }
        return view('login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->hasRole('mahasiswa')) {
                return redirect()->route('mahasiswa-dashboard');
            } elseif ($user->hasRole('dosen')) {
                return redirect()->route('dosen-dashboard');
            }
        }

        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
