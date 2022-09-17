<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:5|max:255|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:100'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);


        $request->session()->flash('success', 'Good, now log in');
        return redirect('/login');

    }
}
