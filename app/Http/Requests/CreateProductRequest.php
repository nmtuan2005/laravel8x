<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class CreateProductRequest extends FormRequest
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
            'sku' => 'unique|required|max:10',
            'name' => 'required',
            'description' => 'required',
            'size' => 'max:20',
            'weight' => 'float',
            'cost' => 'int|required',
            'price' => 'int|required',
            'discount' => 'int',
            'saleprice' => 'int|required'
        ];
    }
    
    protected function failedValidation(Validator $validator) 
    {
        return ResponseApi(false, [], $validator->errors(), __('Tạo mới không thành công!'), Response::HTTP_BAD_REQUEST);
    }

}
