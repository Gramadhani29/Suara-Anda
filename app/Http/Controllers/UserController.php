<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Menampilkan form registrasi
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Menangani proses registrasi
    public function submitRegisterForm(Request $request)
    {
        // Validasi data input
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:3|confirmed',
            'role' => 'required', // Pastikan hanya menerima role yang valid
        ]);

        // Membuat pengguna baru
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ]);

        // Redirect ke halaman login setelah registrasi
        return redirect()->route('login')->with('success', 'Registrasi berhasil. Silakan login.');
    }

    // Menangani proses login
    public function submitLoginForm(Request $request)
    {
        // Validasi data input
        $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:3',
        ]);

        // Kredensial autentikasi
        $credentials = $request->only('email', 'password');

        // Coba autentikasi
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            // Redirect berdasarkan role pengguna
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role === 'user') {
                return redirect()->route('pengguna.dashboard');
            }
        }

        // Jika autentikasi gagal
        return back()->withErrors([
            'email' => 'Email atau password tidak valid.',
        ])->withInput();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

