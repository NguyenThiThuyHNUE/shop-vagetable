<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            'billCity' => 'required',
            'billDistric' => 'required',
            'billAddress' => 'required|min:2|alpha'
        ];
    }

    public function messages()
    {
        return [
            'billCity.required' => 'City is required',
            'billDistric.required' => 'Distric is required',
            'billAddress.required' => 'Address is required',
            'billAddress.string' => 'Address is string',
        ];
    }
}
