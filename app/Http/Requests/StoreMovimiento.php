<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovimiento extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'movimiento'     => 'required',
            'cantidadMov'    => 'required|numeric'
        ];
    }

    /**
     * metodo para personalizar mensajes de validación
     */
    function messages(): array
    {
        return[
            'movimiento.required'   => 'El Tipo Movimiento es requerida',
            'cantidadMov.required'  => 'El campo Cantidad es requerido',
            'cantidadMov.numeric '  => 'El campo Cantidad debe ser númerico'
        ];
    }
}
