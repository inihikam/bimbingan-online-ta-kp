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
            if ($user->hasRole('dosen')) {
                return redirect()->route('dosen-dashboard');
            }
            if ($user->hasRole('koordinator')) {
                return redirect()->route('koor-dashboard');
            }
            if ($user->hasRole('administrator')) {
                return redirect()->route('admin-dashboard');
            }
        }
        return view('login');
    }

    public function login(Request $request)
    {
        try {
            $credentials = $request->only('email', 'password');
//            dd($credentials);
            if (Auth::attempt($credentials)) {
//                dd(Auth::check());
                $request->session()->regenerate();

                $user = Auth::user();
//                dd($user->hasRole('dosen'));
                if ($user->hasRole('mahasiswa')) {
                    return redirect()->route('mahasiswa-dashboard');
                } elseif ($user->hasRole('dosen')) {
                    return redirect()->route('dosen-dashboard');
                } elseif ($user->hasRole('koordinator')) {
                    return redirect()->route('koor-dashboard');
                } elseif ($user->hasRole('administrator')) {
                    return redirect()->route('admin-dashboard');
                }
            }
        } catch (\Exception $e) {
            dd($e);
        }

//        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
