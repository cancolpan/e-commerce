<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    //

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'slug',
        'price',
        'status',
        'sku',
        'body',
        'body_short',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'sort'
    ];
}
