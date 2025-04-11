<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function loginForm() {
        return view('login');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string',  'max:255'],
        ]);

        $success = Auth::attempt($request->only('email', 'password'));

        if (!$success) {
            return redirect()->back()->withErrors([
                'email' => 'Логин и пароль не совпадают'
            ]);
        }

        return redirect()->route('home');
    }

    public function registerForm() {
        return view('register');
    }

    public function register(Request $request) {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255', 'email', 'unique:users'],
            'password' => ['required', 'string', 'max:255', 'confirmed']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);

        return redirect()->route('home');
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('home');
    }
}
