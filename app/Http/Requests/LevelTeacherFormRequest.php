<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LevelTeacherFormRequest extends FormRequest
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
            'lev_id' =>'required',
            'tea_id' =>'required',
            'per_id' =>'required',
        ];
    }
}
