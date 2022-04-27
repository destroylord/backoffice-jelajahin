<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRestaurantRequest extends FormRequest
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
            'name'              => 'required',
            'description'       => 'required|min:8',
            'uuid_restaurants'   => 'required',
            'image'             => 'required|mimes:jpg,png,jpeg',
            'price'             => 'required|number|min:12|max:13',
            'category'          => 'required'
        ];
    }
}
