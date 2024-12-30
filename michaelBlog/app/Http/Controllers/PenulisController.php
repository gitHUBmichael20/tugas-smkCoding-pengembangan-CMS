<?php

namespace App\Http\Controllers;

use App\Models\Penulis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PenulisController extends Controller
{

    protected $id, $email, $password, $username;
    public function store(Request $request)
    {

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

            $penulis = Penulis::create([
                'email' => $request->email,
                'username' => $request->username,
                'password' => Hash::make($request->password)
            ]);


            if (Auth::attempt([
                'email' => $request->email,
                'password' => $request->password
            ])) {
                return redirect()->route('admin');
            }


            return redirect()->route('admin')->with('success', 'Registration successful!');
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
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        // Jangan hash password di sini
        if (Auth::guard('penulis')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            return redirect()->route('admin');
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Login failed'
            ], 401);
        }
    }
}
