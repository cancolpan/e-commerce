<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PackingRule extends Model
{
    //

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'packing_type_id',
        'min_quantity',
        'max_quantity',
        'box_id',
        'box_id_big_order'
    ];


    public function packing_type()
    {
        return $this->belongsTo('App\Models\PackingType');
    }

    public function box_id()
    {
        return $this->belongsTo(Box::class);
    }

    public function box($id)
    {
        $box = Box::findOrFail($id);
        return $box;
    }


}
