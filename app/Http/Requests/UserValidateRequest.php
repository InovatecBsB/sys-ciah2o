<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserValidateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'      => ['required', 'string', 'max:255'],
            'email'     => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone'     => ['required'],
            'cpf'       =>'required|unique:users,cpf,' . auth()->user()->id,
            'rg'        =>'required|unique:users,rg,' . auth()->user()->id,
            'password'  => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }
    public function messages()
    {
        return [
            'name.required' => '- O campo nome é obrigatorio.',
            'email.required' => '- O campo email é obrigatorio.',
            'email.unique' => '- Esse email já esta sendo usado.',
            'phone.required' => '- O campo phone é obrigatorio.',
            'cpf.required' => '- O campo cpf é obrigatorio.',
            'rg.required' => '- O campo rg é obrigatorio.',
            'password.required' => '- O campo password é obrigatorio.'
        ];
    }
}
