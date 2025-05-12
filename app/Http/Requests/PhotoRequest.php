<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotoRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [
            // 'unique_key' => 'required|integer|unique:about_us',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif',
            'organization_id'=>'nullable',
            // 'status' => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [



        ];
    }
}
