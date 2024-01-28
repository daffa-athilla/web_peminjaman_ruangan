<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    public function index() {
        return view('home', [
            'title' => 'Peminjaman Ruangan - Home',
            'header' => 'Peminjaman Ruangan - Home',
            'admin' => User::where('username', auth()->user()->username ?? '')->get(),
        ]);
    }
}