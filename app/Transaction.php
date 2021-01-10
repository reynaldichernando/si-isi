<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';

    protected $fillable = [
        'name', 'region', 'address', 'date', 'time', 'phone',
        'email', 'payment', 'created_at', 
    ];

    public function getUpdatedAtColumn()
    {
        return null;
    }

    public function region(){
        return $this->belongsTo(Region::class);
    }
}
