<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivityRequest extends FormRequest
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
            'name'          => 'required',
            'description'   => 'required',
            'image'         => 'required|mimes:jpg,jpeg,png',
            'category'     => 'required',
            'price_min'     => 'required',
            'price_max'     => 'required',
            'start_time'    => 'required',
            'end_time'      => 'required',
            'province_id'   => 'required',
            'city_id'       => 'required',
            'start_time'    => 'required',
            'end_time'      => 'required',
            'address'       => 'required|max:255|min:10'
        ];
    }
}
