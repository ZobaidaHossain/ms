<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SocialRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [

            'title' => 'nullable|string',
            'subtitle' => 'nullable|string',
            'title_en' => 'nullable|string',
            'subtitle_en' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [

        ];
    }
}
