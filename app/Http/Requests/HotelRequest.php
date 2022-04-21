<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HotelRequest extends FormRequest
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
            'name'          => 'required|min:8',
            'description'   => 'required|min:10',
            'image'         => 'required|mime:jpg,png',
            'price_min'     => 'required',
            'price_max'     => 'required',
            'website'       => 'required',
            'phone'         => 'required|min:12|max:13',
            'email'         => 'required|unique:lodgings',
            'address'       => 'required',
        ];
    }
}
