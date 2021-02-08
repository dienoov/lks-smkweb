<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (!Auth::attempt(\request(['email', 'password'])))
            return response()->json([
                'message' => "Invalid email or password",
            ], 401);

        $user = Auth::user();
        $token = $user->createToken('appToken')->accessToken;

        return response()->json([
            'message' => "Successfully logged in",
            'token' => $token,
            'user' => $user,
        ]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed',
        ]);

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $token = $user->createToken('appToken')->accessToken;

        return response()->json([
            'message' => "Successfully created user",
            'token' => $token,
            'user' => $user,
        ]);
    }
}
