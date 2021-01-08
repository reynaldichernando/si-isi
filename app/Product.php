<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public $timestamps = false;

    protected $fillable = [
        'name', 'description', 'price', 'image', 'category_id', 'stock',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
