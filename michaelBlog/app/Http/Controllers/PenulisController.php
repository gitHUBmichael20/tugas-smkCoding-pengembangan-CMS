<?php

namespace App\Http\Controllers;

use App\Models\Penulis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PenulisController extends Controller
{
    //
    protected $id, $email, $password, $username;
    public function store(Request $request)
{
    // Validate the incoming request data
    $validator = Validator::make($request->all(), [
        'email' => 'required|email|unique:penulis',
        'password' => 'required|min:8',
        'username' => 'required|unique:penulis',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Validation failed',
            'errors' => $validator->errors()
        ], 422);
    }

    try {
        // Create a new penulis instance
        $penulis = Penulis::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        // Login menggunakan kredensial yang plain (belum di-hash)
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password // Password asli, bukan yang sudah di-hash
        ])) {
            return redirect()->route('admin');
        }

        // Jika login gagal tapi user sudah terbuat
        return redirect()->route('admin')->with('success', 'Registration successful!');

    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Registration failed',
            'error' => $e->getMessage()
        ], 500);
    }
}
}
