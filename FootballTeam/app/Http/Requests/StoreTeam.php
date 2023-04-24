<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeam extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:10'
            ,'bio' => 'required'
            // 'categoria' => 'required'
        ];
    }
    //para cambiar los atributos de los campos de validacion
    public function attributes()
    {
        return[
            'name' => 'nombre del equipo'
        ];
    }
    //aqui se personalizan los mensajes de error en especifico
    public function messages()
    {
        return [
            'bio.required' => 'mensaje de error personalizado'
        ];
    }
}
