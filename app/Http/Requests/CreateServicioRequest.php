<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateServicioRequest extends FormRequest
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
            'cperApellido'=> 'required',
            'cPerNombre'=> 'required',
            'cPerDireccion'=> 'required',
            'nPerEdad'=> 'required',
            'cPerSexo'=> 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'cperApellido.required'=> 'campo Apellido obligatorio',
            'cPerNombre.required'=> 'campo Nombre obligatorio',
            'cPerDireccion.required'=> 'campo Direccion obligatorio',
            'nPerEdad.required'=> 'campo celular obligatorio',
            'cPerSexo.required' => 'campo correo obligatorio'
        ];
    }
}
