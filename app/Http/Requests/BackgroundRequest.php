<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BackgroundRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [
            // 'unique_key' => 'required|integer|unique:about_us',
            'title' => 'nullable|string|max:255',
            'title_en' => 'nullable|string|max:255',
            'sub_title' => 'nullable|string|max:255',
            'sub_title_en' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'description_en' => 'nullable|string',
            // 'status' => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [


          
        ];
    }
}
