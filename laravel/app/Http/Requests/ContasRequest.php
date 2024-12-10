<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContasRequest extends FormRequest
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
            //Introduzir os dados a verificar
            'nome'=> 'required',
            'valor'=> 'required',
            'vencimento'=> 'required',
        ];
    }
    public function messages():array
    {
            return[
                'nome.required'=> 'O Campo nome e obrigatorio.',
                'valor.required'=> 'O Campo valor e obrigatorio.',
                'vencimento.required'=> 'O Campo vencimento e obrigatorio.',
            ];
    }
}
