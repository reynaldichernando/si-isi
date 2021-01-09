<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function showTransaction(){
        $auth = Auth::check();
        
        $role = 'guest';
        if($auth) $role = 'admin';
        $transaction = Transaction::orderBy('date')->get();
        
        return view('admin.viewTransaction', [
            'auth' => $auth,
            'role' => $role,
            'transactions' => $transaction,
        ]);
    }
}
