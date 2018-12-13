<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BoxGroupProduct extends Model
{

    protected $table = 'box_group_product';

    public $timestamps = false;
    //
    protected $fillable = [
        'box_group_id',
        'product_id',
        'weight'
    ];
}
