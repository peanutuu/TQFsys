<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Store2Tqf5 extends FormRequest
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
            'name' => 'required',
            'year' => 'required',
            'term' => 'required',
            'subject_id' => 'required',
            'tqf5121' => 'required',
            'tqf5131' => 'required',
            'tqf5132' => 'required',
            'tqf5141' => 'required',
            'tqf5142' => 'required',
            'tqf5143' => 'required',
            'tqf5151' => 'required',
            'tqf5241' => 'required'
        ];
    }
}
