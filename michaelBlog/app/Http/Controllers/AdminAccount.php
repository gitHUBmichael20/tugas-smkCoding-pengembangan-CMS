<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use Illuminate\Http\Request;

class AdminAccount extends Controller
{
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
        try {
            $request->validate([
                'username' => 'required|string|max:255|unique:admin,username',
                'email' => 'required|email|max:255|unique:admin,email',
                'password' => 'required|string|min:8|confirmed',
            ]);

            $admin = new AdminModel([
                'username' => $request->username,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

            $admin->save();

            // Return a JSON response
            return response()->json([
                'message' => 'Akun berhasil dibuat!',
                'data' => $admin
            ], 201); // HTTP status code 201 for resource creation
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Gagal membuat akun: ' . $e->getMessage()
            ], 400); // HTTP status code 400 for bad request
        }
    }



    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|string',
            ]);

            $admin = AdminModel::where('email', $request->email)->first();

            if ($admin && password_verify($request->password, $admin->password)) {
                // Store admin info in the session or return token if using API
                session(['admin' => $admin]);

                return response()->json([
                    'message' => 'Login berhasil!',
                    'data' => $admin
                ], 200); // HTTP status code 200 for OK
            }

            return response()->json([
                'error' => 'Email atau password salah!'
            ], 401); // HTTP status code 401 for unauthorized
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Gagal melakukan login: ' . $e->getMessage()
            ], 400); // HTTP status code 400 for bad request
        }
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
