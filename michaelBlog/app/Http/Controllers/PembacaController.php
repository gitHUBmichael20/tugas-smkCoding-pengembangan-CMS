<?php

namespace App\Http\Controllers;

use App\Models\Pembaca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PembacaController extends Controller
{
    protected $id, $email, $password, $username;
    public function store(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:pembaca,email',
            'username' => 'required|string|unique:pembaca,username|min:3',
            'password' => 'required|string|min:6'
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Create new user
            $pembaca = Pembaca::create([
                'email' => $request->email,
                'username' => $request->username,
                'password' => Hash::make($request->password)
            ]);

            return redirect()->route("landing-pages");
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Registration failed',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to login
        if (Auth::attempt($credentials, $request->has('remember-me'))) {
            // Login berhasil
            return redirect()->route('landing-pages');
        }

        // Login gagal
        return back()
            ->with('error', 'Email atau password salah')
            ->withInput($request->except('password'));
    }
}
