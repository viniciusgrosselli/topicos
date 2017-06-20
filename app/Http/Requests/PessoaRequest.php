<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PessoaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'nome' => 'required|min:2',
            'sobrenome' => 'required|min:2',
            'telefone' => 'required|numeric',
            'endereco' => 'required|min:2',
            'cpf' => 'required|max:11',
            'rg' => 'required|max:10'
        ];
    }
}
