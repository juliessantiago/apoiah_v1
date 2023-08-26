<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required | string', 
            'email' => 'required | email', 
            'password' => 'required | min:6'
        ];
    }

    public function messages():array
    {
        return [
            'name.required' => 'Campo nome é obrigório', 
            'email.required' => 'Campo email é obrigatório', 
            'email.email' => 'Informar e-mail válido', 
            'email.unique' =>'Endereço de e-mail já está cadastrado', 
            'password.required' => 'Campo senha é obrigatório', 
            'password.min' => 'Campo senha deve ter no mínimo 6 caracteres'
        ];
    }
}
