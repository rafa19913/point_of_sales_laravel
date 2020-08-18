<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
        return $this->belongTo(Categorie::class);
    }

    protected $fillable = [
       
        'name', 'price', 'quantity_inventory', 'id_category_product'

    ];
}
