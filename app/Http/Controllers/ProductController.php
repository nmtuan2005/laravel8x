<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\CreateProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.list', [
            'products' => $products
        ]);
    }

    public function show($id)
    {

    }

    public function create()
    {
        return view('product/add');
    }

    public function store(CreateProductRequest $request)
    {
        try {
            $product = new Product;
            $product->sku = $request->sku;
            $product->name = $request->name;
            $product->description = $request->description;
            $product->size = $request->size;
            $product->weight = $request->weight;
            $product->cost = $request->cost;
            $product->price = $request->price;
            $product->discount = $request->discount;
            $product->saleprice = $request->saleprice;
            $product->save();
            return redirect()->route('products.index');
        } catch (\Exception $e) {
            return redirect('products/create')
                ->withErrors($e->getMessage())
                ->withInput();
        }
    }

    public function edit($id)
    {
        try {
            $product = Product::findOrFail($id);
            return view('product/edit', [
                'product' => $product
            ]);
        } catch (\Exception $e) {
            return redirect('products')
                ->withErrors($e->getMessage())
                ->withInput();
        }
    }

    public function update(UpdateProductRequest $request, $id)
    {
        try {
            $product = Product::findOrFail($id);
            $product->sku = $request->sku;
            $product->name = $request->name;
            $product->description = $request->description;
            $product->size = $request->size;
            $product->weight = $request->weight;
            $product->cost = $request->cost;
            $product->price = $request->price;
            $product->discount = $request->discount;
            $product->saleprice = $request->saleprice;
            $product->save();
            return redirect()->route('products.index');
        } catch (\Exception $e) {
            return redirect()->route('products.edit', $id)
                ->withErrors($e->getMessage())
                ->withInput();
        }
        
    }

    public function destroy($id)
    {
        try {
            $product = Product::findOrFail($id);
            $product->delete();
            return redirect()->route('products.index');
        } catch (\Exception $e) {
            return redirect('products')
                ->withErrors($e->getMessage())
                ->withInput();
        }
    }
}
