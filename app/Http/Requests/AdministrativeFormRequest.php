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
            
            'adm_name' => 'required|max:50',
            'adm_lastName' => 'required|max:50',
            'adm_idCard' => 'required|max:10',
            'adm_birthDate' => 'required',
            'adm_address' => 'required|max:100',
            'adm_city' => 'required|max:30',
            'adm_gender' => 'required|max:9',
            'adm_phone' => 'required|max:15',
            'adm_email' => 'required|max:60',
            'adm_photo' => ['sometimes', 'mimes:jpeg,bmp,png']
        ];
    }
}
