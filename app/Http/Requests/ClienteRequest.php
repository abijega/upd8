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
            'xnumeroCPF' => "required|min:14|max:15",    
            'xnomeCliente' => 'required|max:255',       
            'xnomeRua' => 'required|max:255',    
            'xdataNascimento' => 'required|date_format:d/m/Y',   
            'xsexoCliente' => 'required', 
            'xestado_id' => 'required|not_in:0', 
            'xcidade_id' => 'required|not_in:0'
        ];
    }
    public function messages()
    {
        return [            
            'xnumeroCPF.required' => 'O CPF e obrigatorio!!!',
            'xnumeroCPF.min' => 'CPF Informado Invalido!!!',
            'xnumeroCPF.max' => 'CPF Informado Invalido!!!',
            'xnumeroCPF.unique' => 'CPF já cadastrado para outro Cliente!!!',
            'xnomeCliente.required' => 'O Nome e obrigatorio!!!',
            'xnomeCliente.max' => 'Nome Informado Invalido!!!',
            'xnomeRua.required' => 'O Endereco e obrigatorio!!!',
            'xnomeRua.max' => 'O Endereco informado e Invalido!!!',
            'xestado_id.required' => 'Obrigatorio Selecionar um Estado!!!',
            'xestado_id.not_in' => 'Obrigatorio Selecionar um Estado!!!',
            'xcidade_id.required' => 'Obrigatorio Selecionar uma Cidade!!!',
            'xcidade_id.not_in' => 'Obrigatorio Selecionar uma Cidade!!!',
            'xsexoCliente.required' => 'Obrigatorio Selecionar um Sexo para o Cliente!!!',
            'xdataNascimento.required' => 'Obrigatorio Informar uma Data de Nascimento para o Cliente!!!',
            'xdataNascimento.date_format' => 'Data de Nascimento invalida!!!',
        ];
    }
}