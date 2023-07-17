<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }

    public function registerForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $fields = $request->validate([
            'dni' => 'required|string|unique:users,dni',
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string',
        ], [
            'dni.required' => 'El campo DNI es obligatorio.',
            'name.required' => 'El campo Nombre es obligatorio.',
            'phone.required' => 'El campo Celular es obligatorio.',
            'email.required' => 'El campo Correo es obligatorio.',
            'password.required' => 'El campo Contraseña es obligatorio.',
        ]);
        

        $user = User::create([
            'dni' => $fields['dni'],
            'name' => $fields['name'],
            'phone_number' => $fields['phone'],
            'email' => $fields['email'],
            'password' => Hash::make($fields['password']),
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token,
        ];

        return Redirect::route('login')->with('success', 'Registro exitoso. Inicia sesión para continuar.');
    }

    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ], [
            'email.required' => 'El campo Correo es obligatorio.',
            'password.required' => 'El campo Contraseña es obligatorio.',
        ]);

        if (Auth::attempt($fields)) {
            $user = Auth::user();
            $token = $user->createToken('myapptoken')->plainTextToken;
        
            $response = [
                'user' => $user,
                'token' => $token,
            ];
        
            if ($user->rol == 'admin') {
                return Redirect::route('admin.dashboard')->with('success', 'Inicio de sesión exitoso.');
            }
        
            return Redirect::route('home')->with('success', 'Inicio de sesión exitoso.');
        }
        
        return Redirect::route('login')->with('error', 'Credenciales incorrectas.');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return Redirect::route('home')->with('success', 'Cierre de sesión exitoso.');
    }
}
