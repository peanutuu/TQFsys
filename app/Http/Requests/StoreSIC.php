<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSIC extends FormRequest
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
            'course_id' => 'bail|required',
            'subject_id' => 'bail|required',
            'tag' => 'bail|required',
            'resp11' => 'required',
            'resp12' => 'required',
            'resp13' => 'required',
            'resp14' => 'required',
            'resp15' => 'required',
            'resp16' => 'required',
            'resp17' => 'required',
            'resp21' => 'required',
            'resp22' => 'required',
            'resp23' => 'required',
            'resp24' => 'required',
            'resp25' => 'required',
            'resp26' => 'required',
            'resp27' => 'required',
            'resp28' => 'required',
            'resp31' => 'required',
            'resp32' => 'required',
            'resp33' => 'required',
            'resp34' => 'required',
            'resp41' => 'required',
            'resp42' => 'required',
            'resp43' => 'required',
            'resp44' => 'required',
            'resp45' => 'required',
            'resp46' => 'required',
            'resp51' => 'required',
            'resp52' => 'required',
            'resp53' => 'required',
            'resp54' => 'required'
        ];
    }
}
