<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function show() {
        dd('login page');
    }
    
    public function login(Request $request) {
        
        $user = User::where('name', $request->input('name'))->first();
        
        if( Hash::check($request->input('password'), $user['password']) ) {
            return "authorized";
        }
        else {
            return "undefined credentials";
        }
    }
}
