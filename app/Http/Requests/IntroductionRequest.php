<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IntroductionRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [
          'aboutus'=>'nullable|string',
            'memory'=>'nullable|string',

            'backdrop'=>'nullable|string',
            'aboutus_en'=>'nullable|string',
            'memory_en'=>'nullable|string',

            'backdrop_en'=>'nullable|string',

        ];
    }

    public function messages()
    {
        return [


        ];
    }
}
