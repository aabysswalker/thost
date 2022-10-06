<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function show() {
        dd('register page');
    }
    
    public function register(Request $request) {
        
        $credentials = [
            'email' => $request->input('email'),
            'name' => $request->input('name'),
            'password' => Hash::make($request->input('password')),
        ];

        return User::create($credentials);
    }
}
