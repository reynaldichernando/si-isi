<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function showTransaction(){
        $auth = Auth::check();
        
        if(Auth::check()) $role = 'admin';
        $transaction = Transaction::orderBy('created_at')->get();
        
        return view('admin.viewTransaction', [
            'auth' => $auth,
            'transactions' => $transaction,
        ]);
    }
}
