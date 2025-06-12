<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Menampilkan dashboard setelah login berhasil
    public function index()
    {
        return view('admin.dashboard'); // Pastikan view admin.dashboard ada
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi inputan
        $validated = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Proses login
        if (Auth::attempt(['username' => $validated['username'], 'password' => $validated['password']], $request->filled('remember'))) {
            // Jika login berhasil, simpan nama pengguna di session
            $request->session()->put('user_name', Auth::user()->name);

            // Redirect ke dashboard
            return redirect()->route('admin.dashboard');
        }

        // Jika login gagal, kembali ke halaman login dengan pesan error
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }

    // Proses logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
