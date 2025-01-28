<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register (Request $request) {
        // Validate
        $credentials = $request->validate([
            'student_number' => ['required', 'max:255'],
            'first_name' => ['required', 'max:255'],
            'middle_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'unique:users', 'ends_with:@cvsu.edu.ph'],
            'password' => ['required', 'min:8', 'confirmed']
        ]);

        // Concatenate the name fields
        $fullName = $credentials['first_name'] . ' ' . $credentials['middle_name'] . ' ' . $credentials['last_name'];

        // Register
        User::create([
            'student_number' => $credentials['student_number'],
            'name' => $fullName,
            'email' => $credentials['email'],
            'password' => bcrypt($credentials['password']),
        ]);

        // Redirect
        return to_route('login');
    }
    public function login (Request $request) {
        // Validate
        $fields = $request->validate([
            'email' => ['required', 'email', 'ends_with:@cvsu.edu.ph', 'exists:App\Models\StudentRecord,email'],
            'password' => ['required']
        ]);

        // Try to login user
        if (Auth::attempt($fields)) {
            return to_route('dashboard');
        } else {
            return back()->withErrors([
                'failed' => 'The provided credentials do not match our records.'
            ]);
        }
    }
    public function logout()
    {
        Auth::logout();
        return to_route('login');
    }
}
