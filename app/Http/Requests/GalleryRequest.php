<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [

            'title' => 'nullable|string',
            'sub_title' => 'nullable|string',
            'category' => 'nullable',
            'description'=>'nullable',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif',
            'title_en' => 'nullable|string',
            'sub_title_en' => 'nullable|string',
            'category_en' => 'nullable',
            'description_en'=>'nullable',

        ];
    }

    public function messages()
    {
        return [


        ];
    }
}
