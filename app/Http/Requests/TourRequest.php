<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourRequest extends FormRequest
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
            'name'                      => 'required|min:4',
            'description'               => 'required|min:10',
            'image'                     => 'required|mimes:jpg,png,jpeg',
            'ticket_price_weekday'      => 'required',
            'ticket_price_weekend'      => 'required',
            'category'                  => 'required',
            'address'                   => 'required',
        ];
    }
}
