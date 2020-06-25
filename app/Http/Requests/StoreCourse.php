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
            'courseid' => 'required',
            'coursename' => 'required',
            'coursefac' => 'required',
            'coursefac2' => 'required',
            'courselv' => 'required',
            'coursecredit' => 'required',
            'courseyear' => 'required',
            'courselowcredit' => 'required',
            'course1' => 'required',
            'course2' => 'required',
            'course21' => 'required',
            'course22' => 'required',
            'course221' => 'required',
            'course222' => 'required',
            'course223' => 'required',
            'course224' => 'required',
            'course225' => 'required',
            'course3' => 'required',
            'course4' => 'required',
            'course5' => 'required',
            // 'coursesum' => 'required',
            // 'user_id' => 'required',
        ];
    }
}
