<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PackingRulesCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'packing_type_id'=>'required',
            'min_quantity'=>'required|integer',
            'max_quantity'=>'required|integer',
            'box_id'=>'integer',
            'box_id_big_order'=>'integer'
        ];
    }

    public function attributes()
    {
        return [
            'packing_type_id'=>'Packing Type',
            'min_quantity'=>'Min Quantity',
            'max_quantity'=>'Max Quantity',
            'box_id'=>'Packing Box',
            'box_id_big_order'=>'Big Order Packing Box'
        ];
    }
}
