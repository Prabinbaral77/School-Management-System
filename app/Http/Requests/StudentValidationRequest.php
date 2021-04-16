<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentValidationRequest extends FormRequest
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
            'f_name' => 'required',
            'email'=> 'required',
            'grade' => 'required|numeric',
            'roll_no' => 'required|numeric',
            'address' => 'required',
            'guardian_name' => 'required',
            'contact' => 'required',
            'thumbnail' => 'required',
            'dob' => 'required',
        ];
    }
}
