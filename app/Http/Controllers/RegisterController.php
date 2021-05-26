<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){

        // dd($request->only('Email', 'password'));
        
        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'Email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->Email,
            'password' => Hash::make($request->password)
        ]);

        auth()->attempt($request->only('Email', 'password'));


        return redirect()->route('dashboard');

        // dd($request);
    }
}
