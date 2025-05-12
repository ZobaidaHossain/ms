<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutUsRequest extends FormRequest
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
            'sub_title' => 'nullable|string',
            'description' => 'nullable|string',
            'title_en' => 'nullable|string',
            'sub_title_en' => 'nullable|string',
            'description_en' => 'nullable|string',
            // 'status' => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'unique_key.required' => 'The unique key field is required.',
            'unique_key.integer' => 'The unique key must be an integer.',
            'unique_key.unique' => 'The unique key has already been taken.',
            'title.max' => 'The title may not be greater than :max characters.',
            'sub_title.max' => 'The subtitle may not be greater than :max characters.',
            'status.required' => 'The status field is required.',
            'status.boolean' => 'The status field must be true or false.',
        ];
    }
}
