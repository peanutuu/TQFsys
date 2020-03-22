<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourse extends FormRequest
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
            'coursename' => 'bail|required',
            'coursefac' => 'bail|required',
            'course1_1' => 'bail|required',
            'course1_2' => 'bail|required',
            'course1_3' => 'bail|required',
            'course1_4' => 'bail|required',
            'course1_5' => 'bail|required',
            'course2_1' => 'bail|required',
            'course2_2' => 'bail|required',
            'course2_3' => 'bail|required',
            'course2_4' => 'bail|required',
            'course2_5' => 'bail|required',
        ];
    }
}
