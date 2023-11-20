<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlumno extends FormRequest
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
    public function rules()
    {
            return [
            'name' => 'required|string|max:255',
            'edad' => 'required|integer|min:18',
            'promedio' => 'required|numeric|between:70,100',
            'fechaNacimiento' => 'required|date_format:d-m-Y',
            'descripcion' => 'required|max:150',
            //'estado' => 'required|in:Guerrero,Oaxaca,Chiapas,Michoacán,Jalisco',
            //'lenguaje' => 'required|array|min:1',
            'materia' => 'required'

        ];
    }

    public function messages()
    {
        return [
            'name.max' => 'El nombre no puede tener mas de 255 caracteres ',
            'edad.min' => 'La edad debe ser mayor a 18',
            'promedio.between' => 'El promedio debe estar en un rango de 70-100',
            'materia.required' => 'la materia es requerido',
            'descripcion.max' => 'La descripcion no puede tener mas de 150 caracteres',
            'descripcion.required' => 'La descripcion es requerida',
            'fecha_nacimiento.date' => 'La fecha debe tener el formato d-m-y',
            //'Estado.required' => 'El estado es requerido', 
            //'lenguaje.required' => 'Debe seleccionar al menos uno.',
            
        ];
    }
}
