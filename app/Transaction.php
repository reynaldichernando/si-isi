<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';

    public $timestamps = false;

    protected $fillable = [
        'name', 'region', 'address', 'date', 'time', 'phone',
        'email', 'payment', 
    ];

    public function region(){
        return $this->belongsTo(Region::class);
    }
}
