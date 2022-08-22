<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //show login form
    public function login() {
        return view('users.login');
    }

    //authenticate user
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/')-with('message','you are now logged in!');
        }

        return back()->withErrors(['email'=>'invalid Credentials'])->onlyInput('email');
    }
}
