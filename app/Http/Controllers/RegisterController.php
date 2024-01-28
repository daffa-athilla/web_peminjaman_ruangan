<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create() {
        return view('register', [
            'title' => 'Peminjaman Ruangan - Register',
            'header' => 'Peminjaman Ruangan',
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'username' => 'required|unique:users',
            'email_address' => 'required|email:dns|unique:users',
            'password' => 'required'
        ]);

        // if (preg_match('/\s/', $validatedData['username'])) {
        //     return redirect('register');
        // }

        $validatedData['username'] = strtolower($validatedData['username']);
        
        User::create($validatedData);
        
        return redirect('login')->with('success', 'Registrasi Sukses, sekarang anda dapat Login.');
    }
}