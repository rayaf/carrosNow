<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarrosRequest extends FormRequest
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
            'marca_id' => 'required',
            'modelo' => 'required|string|min:3',
            'ano' => 'required|numeric|min:1950|max:2018',
            'cambio' => 'required',
            'combustivel' => 'required|string|min:4',
            'quilometragem' => 'required|numeric',
            'portas' => 'required|numeric|min:2|max:4',
            'valor' => 'required|numeric',
        ];
    }

    public function messages(){
        return [
            'required' => 'O campo :attribute não pode estar vazio.'
        ];
    }
}
