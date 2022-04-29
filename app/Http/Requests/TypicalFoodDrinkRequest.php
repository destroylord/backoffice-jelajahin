<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TypicalFoodDrinkRequest extends FormRequest
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
            'origin'     => 'required',
            'province_id'   => 'required',
            'city_id'       => 'required',
            'start_time'    => 'required',
            'end_time'      => 'required',
        ];
    }
}
