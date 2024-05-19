<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('register');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:50|min:2|string',
            'email' => 'required|email:dns|max:50',
            'password' => 'required'
        ], [
            'required' => ":attribute Tidak boleh kosong",
            'string' => ":attribute Harus berformat string",
            'email' => "Tolong ketikan :attribute yang valid"
        ], [
            'nama' => "Nama",
            'email' => "Email",
            'password' => "Password"
        ]);
        return view('profile.simpan-registrasi');
    }
}
