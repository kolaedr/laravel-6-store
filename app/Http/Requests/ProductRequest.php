<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule as ValidationRule;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => 'required|string|unique:products,title',
            'describe' => 'required|string',
            'slug' => 'required|min:1|max:100',
            'price' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sku' => 'required',
            'favorite' => 'boolean'
        ];

        switch ($this->getMethod())
        {
          case 'POST':
            return $rules;
          case 'PUT':
            return [
              'id' => 'required|integer|exists:products,id', //должен существовать. Можно вот так: unique:games,id,' . $this->route('game'),
              'title' => [
                'required',
                ValidationRule::unique('products')->ignore($this->title, 'title') //должен быть уникальным, за исключением себя же
              ]
            ] + $rules; // и берем все остальные правила
          // case 'PATCH':
          case 'DELETE':
            return [
                'id' => 'required|integer|exists:products,id'
            ];
        }
    }
}
