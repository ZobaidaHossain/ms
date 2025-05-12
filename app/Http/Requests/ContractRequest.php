<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContractRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [
            'number_en' => 'nullable|string',
            'number_bn' => 'nullable|string',
            'address' => 'nullable|string',
            'address_en' => 'nullable|string',
            'email' => 'nullable|email',
            'link' => 'nullable|url',

        ];
    }

    public function messages()
    {
        return [


        ];
    }
}
