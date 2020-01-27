<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdministrativeFormRequest extends FormRequest
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
            'adm_name' => ['required', 'string', 'max:50'],
            'adm_lastName' => ['required', 'string', 'max:50'],
            'adm_idCard' => ['required', 'max:10'],
            'adm_birthDate' => ['required'],
            'adm_address' => ['required', 'string', 'max:50'],
            'adm_city' => ['required', 'string', 'max:50'],
            'adm_gender' => ['required', 'string', 'max:9'],
            'adm_phone' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:100'], //'unique:users'
            'password' => ['required', 'string', 'min:8', 'max:15', 'confirmed'],
            //'password_confirmation' => ['required', 'same:adm_password'],
            'adm_photo' => ['image', 'mimes:jpg,jpeg,bmp,png', 'max:5000'],
        ];
    }
}
