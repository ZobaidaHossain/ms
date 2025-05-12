<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FounderRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [

            'title' => 'nullable|string',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif',
            'description' => 'nullable|string',
            'title_en' => 'nullable|string',
            'description_en' => 'nullable|string',


        ];
    }

    public function messages()
    {
        return [
            'unique_key.required' => 'The unique key field is required.',
            'unique_key.integer' => 'The unique key must be an integer.',
            'unique_key.unique' => 'The unique key has already been taken.',
            'title.max' => 'The title may not be greater than :max characters.',
            'image.required' => 'The image field is required.',
            'status.required' => 'The status field is required.',
            'status.boolean' => 'The status field must be true or false.',
        ];
    }
}
