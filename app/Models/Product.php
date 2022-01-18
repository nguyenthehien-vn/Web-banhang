<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ="products";
    public function product_type(){
        return $this ->belongTo('App\ProductType','id_type','id');
    }
}
