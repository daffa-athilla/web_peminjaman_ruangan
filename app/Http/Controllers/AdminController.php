<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Auth::check() || auth()->user()->is_admin === 0) {
            return redirect('/home');
        }

        return view('admin', [
            'title' => 'Peminjaman Ruangan - Admin',
            'peminjamans' => Form::all(),
        ]);
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
    public function edit($id)
    {
        if (!Auth::check() || auth()->user()->is_admin === 0) {
            return redirect('/home');
        }

        return view('admin_edit', [
            'title' => 'Peminjaman Ruangan - Admin',
            'peminjaman' => Form::where('id', $id)->first(),
            'pilihan_ruangans' => [
                'LAB Bisnis Digital',
                'LAB Hardware',
                'LAB 4 GSG',
                'LAB 3 GSG',
                'LAB 2 GSG',
                'LAB 1 GSG',
            ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if (isset($request->nama_lengkap_peminjam)) {
            $validatedData = $request->validate([
                'nama_lengkap_peminjam' => 'required',
                'nama_ruangan' => 'required',
                'nama_kegiatan' => 'required',
            ]);

            Form::where('id', $id)->update($validatedData);
    
            return redirect('/admin');
        }

        $validatedData = $request->validate([
            'id' => 'required',
            'status' => 'required',
        ]);

        Form::where('id', $id)->update($validatedData);

        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Form::where('id', $id)->delete();

        return redirect('/admin');
    }

    public function logout() {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}