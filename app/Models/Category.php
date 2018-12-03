<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'slug',
        'parent_id',
        'status'
    ];



    public function products()
    {
        return $this->belongsToMany('App\Models\Product', 'category_product');
    }

}