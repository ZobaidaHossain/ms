<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BgMemoryRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [
            // 'unique_key' => 'required|integer|unique:about_us',
            'title'=>'nullable',
            'title_en'=>'nullable',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif',
            'description' => 'nullable|string',
            'description_more' => 'nullable|string',
            'description_en' => 'nullable|string',
            'description_more_en' => 'nullable|string',
            // 'status' => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [



        ];
    }
}
