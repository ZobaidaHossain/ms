<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideoRequest extends FormRequest
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
            'category_en' => 'nullable',
            'video' => 'nullable|file|mimes:mp4,mov,avi',
            'title_en' => 'nullable|string',
            'sub_title_en' => 'nullable|string',
            'description_en'=>'nullable',
            'link'     => 'nullable|url',
        ];
    }

    public function messages()
    {
        return [


        ];
    }
}
