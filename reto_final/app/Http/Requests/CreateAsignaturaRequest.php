<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAsignaturaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize() //:bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()//: array
    {
        return [
            //
            'nombre_asignatura' => 'required|string|max:100',
            'semestre' => 'required|integer',
            'creditos' => 'required|integer',
            'docente' => 'required|string|max:100',
            'prerrequisito'=> 'required|string|max:250',
            'horas_autonomo' => 'required|integer',
            'horas_dirigido' => 'required|integer'
        ];
    }
}
