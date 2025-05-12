<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif', // Adjust max file size as needed (in kilobytes)
            'sub_title' => 'nullable|string',
            'sub_title_en' => 'nullable|string',
            'link' => 'nullable|url',
        ];
    }

    public function messages()
    {
        return [
            'title.max' => 'The title must not exceed :max characters.',
            'title_en.max' => 'The title must not exceed :max characters.',
            'image.required' => 'Please upload an image file.',
            'image.file' => 'The uploaded file must be an image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
            'image.max' => 'The image may not be greater than :max kilobytes.',
            'link.url' => 'The link must be a valid URL.',
        ];
    }
}
