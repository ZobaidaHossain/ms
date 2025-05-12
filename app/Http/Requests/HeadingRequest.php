<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeadingRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [
            // 'unique_key' => 'required|integer|unique:about_us',
            'title' => 'nullable|string',
            'subtitle' => 'nullable|string',
            'link' => 'nullable|url',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif',
            'title_en' => 'nullable|string',
            'subtitle_en' => 'nullable|string',
            // 'status' => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [


        ];
    }
}
