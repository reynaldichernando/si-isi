<?php

namespace App\Http\Controllers;

use App\Product;
use App\Region;
use App\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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

    public function getPrice($id) {
        $auth = Auth::check();

        $region = Region::find($id);

        return response()->json($region);
    }

    public function addTransaction(Request $request)
    {
        $rules = [
            'name'              => 'required|string',
            'region'            => 'required',
            'address'           => 'required',
            'date'              => 'required',
            'time'              => 'required',
            'phone'             => 'required',
            'email'             => 'required|email',
            'payment'           => 'required',
        ];

        $messages = [
            'name.required'              => 'Nama harus diisi.',
            'name.string'                => 'Nama harus string.',
            'region.required'            => 'Kecamatan harus diisi.',
            'address.required'           => 'Alamat harus diisi.',
            'date.required'              => 'Tanggal panggilan harus diisi.',
            'time.required'              => 'Waktu harus diisi.',
            'phone.required'             => 'Nomor handphone harus diisi.',
            'email.required'             => 'Email harus diisi.',
            'email.email'                => 'Email tidak valid.',
            'payment.required'           => 'Cara pembayaran harus diisi.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        // throw message alert if the required inputs are not according to the rules
        if($validator->fails())
            return redirect()->back()->withErrors($validator)->withInput($request->all);

        // add new transaction
        $call = new Transaction;
        $call->name = $request->name;
        $call->region_id = $request->region;
        $call->address = $request->address;
        $call->date = $request->date;
        $call->time = $request->time;
        $call->phone = $request->phone;
        $call->email = $request->email;
        $call->payment = $request->payment;
        $call->created_at = Carbon::now();
        $save = $call->save();

        if($save) return redirect('/');
        else return redirect()->back();
    }
}
