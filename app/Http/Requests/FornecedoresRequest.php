<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FornecedoresRequest extends FormRequest
{
        
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'fornecedor' => 'required', 
        ];
    }

    public function messages(){
        return [
            'fornecedor.required' => 'O nome do fornecedor é obrigatorio',
        ];
    }

}
