<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    //
    public function showTransaction(){
        $role = 'guest';
        if(Auth::check()) $role = 'admin';
        $transaction = Transaction::all();
        // dd($transaction);
        return view('admin.viewTransaction', [
            'role' => $role, 'transactions' => $transaction
        ]);
    }
}
