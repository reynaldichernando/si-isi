<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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

    public function deleteTransaction($id)
    {
        $validator = Validator::make(
            ['id' => $id],
            ['id' => 'required|integer'],
        );

        // throw message alert if the required inputs are not according to the rules
        if($validator->fails())
            return redirect()->back()->withErrors($validator->errors());

        // find transaction by id
        $transaction = Transaction::find($id);

        // delete product from database
        $transaction->delete();

        return redirect('/view-transaction');
    }
}
