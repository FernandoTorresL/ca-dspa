<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateSolicitudRequest extends FormRequest
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
            'curp' => ['required', 'max:18']
        ];
    }

    public function messages()
    {
        return [
            'curp.required' => 'Por favor escribe tu CURP.',
            'curp.max' => 'La CURP no puede superar los 18 caracteres.'
        ];
    }
}
