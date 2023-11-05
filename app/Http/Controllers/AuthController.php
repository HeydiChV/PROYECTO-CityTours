<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validar las credenciales del usuario
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Autenticación exitosa, redirigir al usuario a la página deseada
            return redirect()->intended('/dashboard');
        } else {
            // Autenticación fallida, mostrar un mensaje de error
            return back()->with('error', 'Credenciales incorrectas');
        }
    }

    public function register(Request $request)
    {
        // Validar los datos del formulario de registro
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Crear un nuevo usuario
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Autenticar al usuario después del registro
        Auth::attempt(['email' => $validatedData['email'], 'password' => $validatedData['password']]);

        // Redirigir al usuario a la página deseada después del registro
        return redirect('/dashboard');
    }

    public function logout()
    {
        // Cerrar la sesión del usuario
        Auth::logout();

        // Redirigir al usuario a la página de inicio
        return redirect('/');
    }
}
