<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class categoriaRequest extends FormRequest
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
            "descripcion"=> "required|min:5|max:20"
        ];
    }

    public function messages(): array
    {
        return [
            "descripcion.required"=> "La Descripcion es requerida",
            "descripcion.min"=> "No puede tener menos de 5 caracteres",
            "descripcion.max"=> "No puede tener mas de 20 caracteres"
        ];
    }
}
