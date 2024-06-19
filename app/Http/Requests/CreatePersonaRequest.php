<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePersonaRequest extends FormRequest
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
            'cPerApellido' =>'required',
            'cPerNombre' =>'required',
            'cPerDireccion' =>'required',
            'cPerFecNac' =>'required',
            'nPerEdad' =>'required',
            'cPerSexo' =>'required',
            'nPerSueldo' =>'required',
            'cPerRnd' =>'required',
            //
        ];
    }

    public function messages(){
        return [
            'cPerApellido.required' =>'Se necesita el dato Apellidos para una persona',
            'cPerNombre.required' =>'Se necesita el dato Nombre para una persona',
            'cPerDireccion' =>'Se necesita el dato Dirección para una persona',
            'cPerFecNac' =>'Se necesita el dato Fecha de Nacimiento para una persona',
            'nPerEdad' =>'Se necesita el dato Edad para una persona',
            'cPerSexo' =>'Se necesita el dato Sexo para una persona',
            'nPerSueldo' =>'Se necesita el dato Sueldo para una persona',
            'cPerRnd' =>'Se necesita el dato RND para una persona',
            //
        ];
    }
}
