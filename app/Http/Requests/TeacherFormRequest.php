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
           
            'tea_name' => 'required|max:50',
            'tea_lastName' => 'required|max:50',
            'tea_idCard' => 'required|max:10',
            'tea_birthDate' => 'required',
            'tea_address' => 'required|max:100',
            'tea_city' => 'required|max:30',
            'tea_gender' => 'required|max:9',
            'tea_phone' => 'required|max:15',
            'tea_email' => 'required|max:60',
            'tea_photo' => ['sometimes', 'mimes:jpeg,bmp,png']
        ];
    }
}
