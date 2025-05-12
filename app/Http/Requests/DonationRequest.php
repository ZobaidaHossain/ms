<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DonationRequest extends FormRequest
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
            'description' => 'nullable|string',
            'description_en' => 'nullable|string',
            'account_number' => 'nullable|string',
            'account_number_en' => 'nullable|string',
            'branch' => 'nullable|string',
            'branch_en' => 'nullable|string',

        ];
    }

    public function messages()
    {
        return [


        ];
    }
}
