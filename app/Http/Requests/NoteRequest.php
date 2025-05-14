<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoteRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [


            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif',


        ];
    }

    public function messages()
    {
        return [

            'image.required' => 'The image field is required.',
           
        ];
    }
}
