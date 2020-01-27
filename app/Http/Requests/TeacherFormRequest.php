<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherFormRequest extends FormRequest
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
            //nombre de objeto del formulario HTML
           
            'rol_id' => ['required', 'integer'],
            'tea_name' => ['required', 'string', 'max:50'],
            'tea_lastName' => ['required', 'string', 'max:50'],
            'tea_idCard' => ['required', 'max:10'],
            'tea_birthDate' => ['required'],
            'tea_address' => ['required', 'string', 'max:50'],
            'tea_city' => ['required', 'string', 'max:50'],
            'tea_gender' => ['required', 'string', 'max:9'],
            'tea_phone' => ['required', 'string', 'max:20'],
            'tea_email' => ['required', 'string', 'email', 'max:100'],
            'password' => ['required', 'string', 'min:8', 'max:15', 'confirmed'],
            //'password_confirmation' => ['required', 'same:tea_password'],
            'tea_photo' => ['image', 'mimes:jpg,jpeg,bmp,png', 'max:5000'],
        ];
    }
}
