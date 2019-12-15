<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentFormRequest extends FormRequest
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
            
            'stu_name' => 'required|max:50',
            'stu_lastName' => 'required|max:50',
            'stu_idCard' => 'required|max:10',
            'stu_birthDate' => 'required',
            'stu_address' => 'required|max:100',
            'stu_city' => 'required|max:30',
            'stu_gender' => 'required|max:9',
            'stu_phone' => 'required|max:15',
            'stu_email' => 'required|max:60',
            'stu_photo' => ['sometimes', 'mimes:jpeg,bmp,png']
        ];
    }
}
