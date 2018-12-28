<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackingTypeProduct extends Model
{
    //
    protected $table= 'packing_type_product';

    public $timestamps = false;

    protected $fillable = [
        'packing_type_id',
        'product_id',
        'weight'
    ];
}
