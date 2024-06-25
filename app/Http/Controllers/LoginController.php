<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Mengimpor kelas Auth dari ruang nama yang benar

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('Vlogin'); // Mengembalikan tampilan formulir login
    }

    // Proses logout pengguna
    public function logout() 
    {
        Auth::logout(); // Menggunakan Auth secara langsung
        return redirect('/'); // Redirect ke halaman utama setelah logout
    }

    // Proses login pengguna
    // Controller
public function login(Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Jika autentikasi berhasil
        return redirect()->intended('/berita'); // Redirect ke halaman yang sesuai
    } else {
        // Jika autentikasi gagal
        return back()->withInput()->withErrors(['email' => 'Invalid email or password.']);
    }
}

    
}
