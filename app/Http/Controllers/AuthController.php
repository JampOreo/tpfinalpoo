<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'rol' => 'in:usuario,comentarista,administrador',
            'password_confirmation' => 'required|string|min:6',
        ]);

        $hashedPassword = Hash::make($data['password']);

        try {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => $hashedPassword,
                'rol' => $data['rol'] ?? 'usuario',
                'fecha_creacion' => now()
            ]);

            return response()->json(['message' => 'Usuario creado', 'user' => $user], 201);

        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al crear usuario: ' . $e->getMessage()], 500);
        }
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $data['email'])->first();

        if (!$user || !Hash::check($data['password'], $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['Las credenciales no son correctas.'],
            ]);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return redirect()->route('posts.create');
    }

    public function userInfo(Request $request)
    {
        return $request->user();
    }

    public function statistics(Request $request)
    {
        $user = $request->user();

        $postsCount = $user->posts()->count();
        $commentsCount = $user->comments()->count();
        $accessesCount = $user->accessLogs()->count();

        return response()->json([
            'posts' => $postsCount,
            'comments' => $commentsCount,
            'accesses' => $accessesCount,
        ]);
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }
}