<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Store2Tqf3 extends FormRequest
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
            'tqf3121' => 'required',
            'tqf3131' => 'required',
            'tqf3132' => 'required',
            'tqf3133' => 'required',
            'tqf3141' => 'required',
            'tqf3151' => 'required',
            'tqf3152' => 'required',
            'tqf3161' => 'required',
            'tqf3171' => 'required',
            'tqf3181' => 'required',
            'tqf3182' => 'required',
            'tqf3183' => 'required',
            'tqf3191' => 'required',
            'tqf3211' => 'required',
            'tqf3221' => 'required',
            'tqf3311' => 'required',
            'tqf3321' => 'required',
            'tqf3322' => 'required',
            'tqf3323' => 'required',
            'tqf3324' => 'required',
            'tqf3331' => 'required',
            'tqf3341' => 'required',
            'tqf3412' => 'required',
            'tqf3413' => 'required',
            'tqf3422' => 'required',
            'tqf3423' => 'required',
            'tqf3432' => 'required',
            'tqf3433' => 'required',
            'tqf3442' => 'required',
            'tqf3443' => 'required',
            'tqf3452' => 'required',
            'tqf3453' => 'required',
            'tqf3521' => 'required',
            'tqf3522' => 'required',
            'tqf3610' => 'required',
            'tqf3620' => 'required',
            'tqf3630' => 'required',
            'tqf3710' => 'required',
            'tqf3720' => 'required',
            'tqf3730' => 'required',
            'tqf3740' => 'required',
            'tqf3750' => 'required'
        ];
    }
}
