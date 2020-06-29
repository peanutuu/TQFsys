<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubject extends FormRequest
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
            'subjectid' => 'bail|required|min:5|max:30',
            'subjectnameen' => 'bail|required',
            'subjectnameth' => 'bail|required',
            'subjectfac' => 'bail|required',
            'credit' => 'bail|required',
            'avalible' => 'bail|required',
            'subjectbefore' => 'bail|required',
            'descriptionth' => 'bail|required',
            'descriptionen' => 'bail|required',
            'pointofsubject' => 'bail|required',
            'subjectwith' => 'bail|required'
            // 'course_id' => 'required'
        ];
    }
}
