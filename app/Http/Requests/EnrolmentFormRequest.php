<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnrolmentFormRequest extends FormRequest
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
            'stu_id' =>'required',
            'per_id' =>'required',
            'lev_id' =>'required',
            'enr_date' =>'required'
        ];
    }
}
