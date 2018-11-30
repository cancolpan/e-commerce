<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersCreateRequest extends FormRequest
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
            'name' => 'required',
            'email'=>'required|unique:users',
            'role_id'=>'required',
            'status'=>'required',
            'password'=>'required'
            ];
    }

    public function attributes()
    {
        return [
            'name' => 'Name',
            'email' => 'E-mail',
            'role_id' => 'Role',
            'status' => 'Status',
            'password' => 'Password',
        ];
    }

}
