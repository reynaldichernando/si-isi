<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomecallController extends Controller
{
    public function showForm(){
        $auth = Auth::check();

        return view('guest.homeCall',['auth' => $auth]);
    }
    //
}
