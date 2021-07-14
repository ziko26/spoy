<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'fullName' => 'required|min:3|string',
            'email' => 'required|email|unique:users|max:2048',
            'password' => 'required|string|min:8',
            'phone' => 'required|numeric',
            'city_id' => 'required|numeric'
        ];
    }
}
