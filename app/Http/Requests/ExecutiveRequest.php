<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExecutiveRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [

            'name' => 'nullable|string',
            'designation' => 'nullable|string',
            'name_en' => 'nullable|string',
            'designation_en' => 'nullable|string',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif',

        ];
    }

    public function messages()
    {
        return [


        ];
    }
}
