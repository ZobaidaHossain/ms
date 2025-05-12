<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoalRequest extends FormRequest
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
            'serial' => 'nullable|string',
            'title_en' => 'nullable|string',
            'subtitle_en' => 'nullable|string',
            'serial_en' => 'nullable|string',

        ];
    }

    public function messages()
    {
        return [


        ];
    }
}
