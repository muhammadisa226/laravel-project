<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.registerform', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => ['required','max:255'],
            'username' => ['required','max:255'],
            'email' => 'required|email|unique:users',
            'password' =>  ['required','min:5','max:255']
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration Success Please Login!');

    }

}
