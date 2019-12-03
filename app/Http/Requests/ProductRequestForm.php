<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequestForm extends FormRequest
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
        if (request()->has('image')) {
            return [
                'productName' => 'required|min:2|max:8',
                'productPrice' => 'required|integer',
                'image' => 'image',
            ];
        }
        return [
            'productName' => 'required',
            'productPrice' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'productName.required'=> ' Ten khong duoc de trong',
            'productName.min'=> ' Ten phai nhieu hon 2 ki tu',

        ];
    }
}
