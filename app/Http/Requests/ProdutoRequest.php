<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome_do_produto' => 'required', 
        ];
    }

    public function messages(){
        return [
            'nome_do_produto.required' => 'O Nome do Produto é obrigatorio',
        ];
    }
}
