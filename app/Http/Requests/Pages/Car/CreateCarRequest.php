<?php

namespace App\Http\Requests\Pages\Car;

use Illuminate\Foundation\Http\FormRequest;

class CreateCarRequest extends FormRequest
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
            'category_id' => 'required',
            'model' => 'required|string|min:10|max:150',
            'rent' => 'required',
            'description' => 'required|text|min:100|max:1000',
            'quantity' => 'required|integer',
            'year_production' => 'required|integer',
            'engine_capacity' => 'required',
            'fuel' => 'required|string',
            'power' => 'required',
            'course' => 'required',
            'body_type' => 'required|string|min:3',
            'color' => 'required|string|min:3',
            'transmission' => 'required|string',
            'driver' => 'required|string',
            'country' => 'required|string'
        ];
    }
}
