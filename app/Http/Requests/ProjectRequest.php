<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [
          'description'=>'nullable|string',
          'description_en'=>'nullable|string',

        ];
    }

    public function messages()
    {
        return [


        ];
    }
}
