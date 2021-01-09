<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function showTransaction(){
<<<<<<< HEAD
        $role = 'guest';
        if(Auth::check()) $role = 'admin';
        $transaction = Transaction::orderBy('created_at')->get();
=======
        $auth = Auth::check();

        $transaction = Transaction::orderBy('date')->get();
>>>>>>> 5c4b28c6c4b43943a78e2f7600478d920d0b685d
        
        return view('admin.viewTransaction', [
            'auth' => $auth,
            'transactions' => $transaction,
        ]);
    }
}
