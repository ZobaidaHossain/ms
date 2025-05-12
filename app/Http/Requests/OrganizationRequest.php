<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrganizationRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'title_en' => 'nullable|string',
            'description_en' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [



        ];
    }
}
