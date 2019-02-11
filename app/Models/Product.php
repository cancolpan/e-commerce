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
        'sort',
        'image_1',
        'image_2',
        'image_3',
        'image_4',
        'image_5',
        'image_6',
        'image_7',
        'image_8',
        'image_description_1',
        'image_description_2',
        'image_description_3',
        'image_description_4',
        'image_description_5',
        'image_description_6',
        'image_description_7',
        'image_description_8',
        'height',
        'width',
        'depth',
        'weight',
    ];


    public function categories()
    {

        return $this->belongsToMany('App\Models\Category', 'category_product');

    }
}
