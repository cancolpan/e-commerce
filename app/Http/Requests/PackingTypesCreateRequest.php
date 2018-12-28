<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PackingTypesCreateRequest extends FormRequest
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
            //
            'name'=>'required',
            'big_order_level'=>'required|integer'
        ];
    }


    public function attributes()
    {
        return [
            'name' => 'Name',
            'big_order_level'=>'Big Order Level'
        ];
    }
}
