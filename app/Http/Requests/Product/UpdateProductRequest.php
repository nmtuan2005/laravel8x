<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'sku' => 'unique:products,id,' . $this->request->get('id') . '|required|max:10',
            'name' => 'required',
            'description' => 'required',
            'size' => 'max:20|required',
            'weight' => 'numeric',
            'cost' => 'int|required',
            'price' => 'int|required',
            'discount' => 'int',
            'saleprice' => 'int|required'
        ];
    }
}
