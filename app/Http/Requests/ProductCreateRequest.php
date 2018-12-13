<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
            'sku' => 'required|unique:products',
//            'name' => 'required',
//            'slug' => 'required|unique:products',
//            'price' => 'required',
//            'status' => 'required',
//            'body' => 'required',
//            'body_short' => 'required',
//            'meta_title' => 'required',
//            'meta_description' => 'required',
//            'meta_keyword' => 'required',
//            'sort' =>'integer',
//            'image_1'=> 'image|mimes:jpg,png,jpeg,gif|max:2048'
        ];
    }

    public function attributes()
    {
        return [
            'sku' => 'SKU',
            'name'=>'Name',
            'slug' => 'Slug',
            'price' =>'Price',
            'body' => 'Body',
            'body_short'=>'Summary',
            'meta_title'=>'Meta Title',
            'meta_description'=>'Meta Description',
            'meta_keyword'=>'Meta Keywords'
        ];
    }
}
