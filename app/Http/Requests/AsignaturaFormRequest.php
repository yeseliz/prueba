<?php

namespace tpi\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AsignaturaFormRequest extends FormRequest
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
            'nombre_asignatura'=>'required|max:45',
            'tipo'=>'required|max:45'
        ];
    }

    public function messages()
{
     return [
     'nombre_asignatura.required' => 'Debe ingresar el nombre de la asignatura',

     ];
   }
}
