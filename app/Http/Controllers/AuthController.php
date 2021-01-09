<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        $auth = Auth::check();
        if ($auth) { 
            // login succed
            return redirect('/');
        }
        return view('login'); // login failed
    }
 
    public function login(Request $request)
    {

        $rules = [
            'username'              => 'required',
            'password'              => 'required|string',
        ];
 
        $messages = [
            'username.required'     => 'Username harus diisi.',
            'password.required'     => 'Password harus diisi.',
            'password.string'       => 'Password harus string.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
 
        // throw message alert if the required inputs are not according to the rules
        if($validator->fails())
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        
        // get the inputs
        $data = [
            'name'      => $request->input('username'),
            'password'  => $request->input('password'),
        ];
 
        // check whether there is the user inside database
        $result = Auth::attempt($data);

        if ($result) return redirect('/'); // login succed
        else return redirect()->back(); // login failed
    }

    public function logout()
    {   
        Auth::logout(); // delete active session
        return redirect('/');
    }
}
