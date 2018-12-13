<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Box extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];


    protected $fillable = [
        'name',
        'length',
        'width',
        'height',
        'max_quantity',
        'min_quantity',
        'status',
        'group_id'
    ];

    public function box_group()
    {
        return $this->belongsTo('App\Models\BoxGroups');
    }

}
