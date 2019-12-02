<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResigerProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'profileName' => 'required|string:value|min:2|max:50',
            'profilePhone' => 'required|integer|min:9',
            'profileImage' => 'image'
        ];
    }

    public function messages()
    {
        return [
            'profileName.required' => 'profileName is required',
            'profilePhone.required' => 'profilePhone is required',
            'profileImage.image' => 'The file under validation must be an image (jpeg, png, bmp, or gif)',
        ];
    }
}
