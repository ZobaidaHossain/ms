<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelpRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [
          'foundation_name'=>'nullable|string',
            'account_number'=>'nullable|string',
            'bank_name'=>'nullable|string',
            'branch'=>'nullable|string',
            'foundation_name_en'=>'nullable|string',
            'account_number_en'=>'nullable|string',
            'bank_name_en'=>'nullable|string',
            'branch_en'=>'nullable|string',

        ];
    }

    public function messages()
    {
        return [


        ];
    }
}
