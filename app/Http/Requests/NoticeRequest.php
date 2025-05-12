<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoticeRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [
          'serial' => 'nullable|string',
            'title'  => 'nullable|string',
            'pdf'    => 'nullable|file|mimes:pdf',
            'serial_en' => 'nullable|string',
            'title_en'  => 'nullable|string',

        ];
    }

    public function messages()
    {
        return [


        ];
    }
}
