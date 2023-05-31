<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table="products";

    public function type_products(){
        return $this->belongsTo("App\Type_product");
    }
    public function bill_details(){
        return $this->hasMany("App\Bill_detail");
    }
    public function comments(){
        return $this->hasMany("App\Comment");
    }
}
