<?php

namespace App\Http\Controllers;

use App\Product;
use App\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomecallController extends Controller
{
    public function showForm(){
        $auth = Auth::check();

        $regions = Region::all();
        $products = Product::where('stock', '>', "0")->orderBy('name')->get();

        return view('guest.homeCall', [
            'auth' => $auth,
            'regions' => $regions,
            'products' => $products,
        ]);
    }

    public function addTransaction(Request $request)
    {
        # code...
    }
}
