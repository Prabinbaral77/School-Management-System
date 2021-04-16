<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffValidationRequest extends FormRequest
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
            'work_as'=>'required',
            'address'=> 'required',
            'contact_no'=>'required',
            'gender'=>'required',
            'staff_image'=>'required',
        ];
    }
}
