<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherValidationRequest extends FormRequest
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
            'full_name'=>'required',
            'address'=>'required',
            'contact_number'=>'required',
            'acedamic_qualification'=>'required',
            'subject_specialist'=>'required',
            'gender'=>'required',
            'teacher_image'=>'required',
            'dob'=>'required',
        ];
    }
}
