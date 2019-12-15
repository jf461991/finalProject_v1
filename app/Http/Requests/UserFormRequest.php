<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
            'rol_id' => ['required', 'integer'],
            'name' => ['required', 'string', 'max:50'],
            'lastName' => ['required', 'string', 'max:50'],
            'idCard' => ['required', 'min:10'],
            'email' => ['required', 'string', 'email', 'max:100'],
            'password' => ['required', 'string', 'min:8', 'max:15', 'confirmed'],
            // 'photo' => ['required', 'image', 'mimes:jpg,jpeg,bmp,png', 'max:5000'],
        ];
    }
}
