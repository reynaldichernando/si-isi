<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomecallController extends Controller
{
    public function showForm(){
        $auth = Auth::check();

        $products = Product::where('stock', '>', "0")->orderBy('name')->get();

        return view('guest.homeCall', [
            'auth' => $auth,
            'products' => $products,
        ]);
    }

    public function addTransaction(Request $request)
    {
        # code...
    }
}
