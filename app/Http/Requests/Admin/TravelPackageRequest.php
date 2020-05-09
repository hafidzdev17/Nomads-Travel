<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TravelPackageRequest extends FormRequest
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
            'title' => 'required',
            'location' => 'required',
            'about' => 'required',
            'featured_event'  => 'required',
            'languange'  => 'required',
            'foods'  => 'required',
            'departure_date'  => 'required|date',
            'duration'  => 'required',
            'type'  => 'required',
            'price'  => 'required|integer'
        ];
    }
}
