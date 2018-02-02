<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'cliente' => 'required', 
            'endereco' => 'required',
            'nome_responsavel_cliente' => 'required',
            'telefone_cliente' => 'required',
            'email_respon_cliente' => 'required'
        ];
    }

    public function messages(){
        return [
            'cliente.required' => 'O nome do cliente é obrigatorio', 
            'endereco.required' => 'O Endereço do cliente é obrigatorio',
            'nome_responsavel_cliente.required' => 'O nome do cliente é obrigatorio',
            'telefone_cliente.required' => 'O Telefone do Responsavel é obrigatorio',
            'email_respon_cliente.required' => 'O Email do Responsavel é obrigatorio'
        ];
    }
}
