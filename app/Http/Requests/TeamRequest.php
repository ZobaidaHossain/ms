<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [
            'serial' => 'nullable|string|max:255',
            'name' => 'nullable|string|max:255',
            'serial_en' => 'nullable|string|max:255',
            'name_en' => 'nullable|string|max:255',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif', // Adjust max file size as needed (in kilobytes)
            'designation' => 'nullable|string',
            'designation_en' => 'nullable|string',
            'pdf'    => 'nullable|file|mimes:pdf',

        ];
    }

    public function messages()
    {
        return [
            'name.max' => 'The title must not exceed :max characters.',
            'image.required' => 'Please upload an image file.',
            'image.file' => 'The uploaded file must be an image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
            'image.max' => 'The image may not be greater than :max kilobytes.',

        ];
    }
}
