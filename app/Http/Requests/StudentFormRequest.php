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
            
            'rol_id' => ['required', 'integer'],
            'stu_name' => ['required', 'string', 'max:50'],
            'stu_lastName' => ['required', 'string', 'max:50'],
            'stu_idCard' => ['required', 'max:10'],
            'stu_birthDate' => ['required'],
            'stu_address' => ['required', 'string', 'max:50'],
            'stu_city' => ['required', 'string', 'max:50'],
            'stu_gender' => ['required', 'string', 'max:9'],
            'stu_phone' => ['required', 'string', 'max:20'],
            'stu_lastLevelPass' => ['required', 'string', 'max:30'],
            'stu_email' => ['required', 'string', 'email', 'max:100'],
            'stu_password' => ['required', 'string', 'min:8', 'max:15'],
            'password_confirmation' => ['required', 'same:stu_password'],
            'stu_photo' => ['image', 'mimes:jpg,jpeg,bmp,png', 'max:5000'],
        ];
    }
}
