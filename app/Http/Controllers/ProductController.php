<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Models\Product;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    public function store(CreateProductRequest $request)
    {
        try {
            $input  = $request->all();
            $result = Product::create($input);
            return ResponseApi(true, $result, [], __('Thêm thành công'), Response::HTTP_CREATED);
        } catch (\Exception $e) {
            return ResponseApi(false, [], $e->getMessage(), __('Thêm không thành công'), Response::HTTP_BAD_REQUEST);
        }
    }
}
