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
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Create a new penulis instance
        $penulis = new Penulis();
        $penulis->email = $request->email;
        $penulis->password = Hash::make($request->password);
        $penulis->username = $request->username;

        // Save the penulis to the database
        $penulis->save();

        // return response()->json(['message' => 'Penulis created successfully'], 201);
        return redirect()->route('admin');
    }

    public function login(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authenticated successfully!
            return redirect()->route('admin');
        } else {
            // Authentication failed...
            return response()->json(['message' => 'Email atau password salah'], 401);
        }
    }
}
