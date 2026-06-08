<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class RevistaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
{
    return [
        'titulo' => 'required|min:3',
        'editora' => 'required|min:3',
        'categoria' => 'required',
        'edicao' => 'required|integer',
        'ano_publicacao' => 'required|integer',
        'quantidade_paginas' => 'required|integer'
    ];
}

public function messages(): array
{
    return [
        'titulo.required' => 'O título é obrigatório',
        'titulo.min' => 'O título deve ter no mínimo 3 letras',

        'editora.required' => 'A editora é obrigatória',

        'categoria.required' => 'A categoria é obrigatória',

        'edicao.required' => 'A edição é obrigatória',

        'ano_publicacao.required' => 'O ano é obrigatório',

        'quantidade_paginas.required' => 'A quantidade de páginas é obrigatória'
    ];
}
}
