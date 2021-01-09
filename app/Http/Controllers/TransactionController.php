<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function showTransaction(){
        $auth = Auth::check();

        $transaction = Transaction::orderBy('date')->get();
        
        return view('admin.viewTransaction', [
            'auth' => $auth,
            'transactions' => $transaction,
        ]);
    }
}
