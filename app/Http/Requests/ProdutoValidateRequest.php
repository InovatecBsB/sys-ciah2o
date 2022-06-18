<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoValidateRequest extends FormRequest
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
            'name'          => ['required'],
            'categoria_id'          => ['required'],
            'estoque'       => ['required'],
            'custo'         => ['required'],
            'venda'         =>['required'],
            'desconto'      =>['required']
        ];
    }
    public function messages()
    {
        return [
            'name.required' => '- O campo nome do produto é obrigatorio.',
            'categoria_id.required' => '- O campo categoria do produto é obrigatorio.',
            'estoque.required' => '- O campo estoque é obrigatorio.',
            'custo.required' => '- O campo preço custo é obrigatorio.',
            'venda.required' => '- O campo preço venda é obrigatorio.',
            'desconto.required' => '- O campo desconto é obrigatorio.',

        ];
    }
}
