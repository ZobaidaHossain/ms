<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AudienceRequest extends FormRequest
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
            'serial' => 'nullable|string',
            'description' => 'nullable|string',
            'title_en' => 'nullable|string',
            'serial_en' => 'nullable|string',
            'description_en' => 'nullable|string',
            // 'status' => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [

            'title.max' => 'The title may not be greater than :max characters.',
            'serial.max' => 'The subtitle may not be greater than :max characters.',
            'status.required' => 'The status field is required.',
            'status.boolean' => 'The status field must be true or false.',
        ];
    }
}
