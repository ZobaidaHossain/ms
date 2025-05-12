<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ZoneRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [
            'description' => 'nullable',
            'description_en' => 'nullable',
            'link'=>'nullable|url',
            'image_title'=>'nullable',
            'image_title_en'=>'nullable',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif',

        ];
    }

    public function messages()
    {
        return [


        ];
    }
}
