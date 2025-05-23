<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class AdminUsersRequest extends FormRequest
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
            'name'=>'required|min:3',
            'email'=>'required',
            'gender'=>'required',
            'password'=>'required',
            'role_id'=>'required',
            'isActive'=>'required',
            'photo_id'=>'required'
        ];
    }
}
