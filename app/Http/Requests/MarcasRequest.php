<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MarcasRequest extends FormRequest
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
            'nome' => 'required|min:3|max:255|string'
        ];
    }

    public function messages(){
        return [
            'required' => 'O campo :attribute não pode estar vazio.'
        ];
    }
}
