<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProducto extends FormRequest
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
            'name'          => 'required',
            'unid_medida'   => 'required',
            'valor'         => 'required|numeric',
            'ivaPorcentaje' => 'required'
        ];
        
    }
    /**
     * metodo para personalizar mensajes de validación
     */
    function messages(): array
    {
        return[
            'unid_medida.required'   => 'La Unidad de Medida es requerida',
            'ivaPorcentaje.required' => 'El porcentaje IVA es requerido',
            'codigo.required'        => 'El codigo es requerido',
            'codigo.numeric '        => 'El codigo debe ser númerico',
            'codigo.min'             => 'El codigo debe tener minimo 3 digitos',
            'codigo.max     '        => 'El codigo debe tener maximo 13 digitos',
            'CodBarras.required'     => 'El codigo es requerido',
            'CodBarras.numeric '     => 'El codigo debe ser númerico',
            'CodBarras.min'          => 'El codigo debe tener minimo 13 digitos',
            'CodBarras.max     '     => 'El codigo debe tener maximo 13 digitos'
        ];
    }
}
