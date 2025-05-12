<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [
            'title' => 'nullable|string',
            'title_en' => 'nullable|string',
            'icon_class' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [


        ];
    }
}
