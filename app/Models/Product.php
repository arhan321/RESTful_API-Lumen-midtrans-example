<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $connection = 'mysql';
    protected $table = 'products';
    protected $fillable = ['name','price'];


    public function orderitem(){
        return $this->hasMany(Orderitem::class);
    }
}
