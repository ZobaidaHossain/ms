<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupportRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [


            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif',
            'description' => 'nullable|string',
            'description_en' => 'nullable|string',

        ];
    }

    public function messages()
    {
        return [

            'image.required' => 'The image field is required.',
            'status.required' => 'The status field is required.',
            'status.boolean' => 'The status field must be true or false.',
        ];
    }
}
