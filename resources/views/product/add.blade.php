@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1 class="col-md-12">Thêm sản phẩm</h1>
        <form action="/product" method="post" class="col-md-8">
            <div class="form-group row">
                <label for="sku" class="col-form-label col-md-2">SKU</label>
                <div class="col-md-6">
                    <input type="text" id="sku" name="sku" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-form-label col-md-2">Tên sản phẩm</label>
                <div class="col-md-6">
                    <input type="text" id="name" name="name" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-form-label col-md-2">Mô tả</label>
                <div class="col-md-6">
                    <textarea rows="3" id="description" name="description" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="size" class="col-form-label col-md-2">Size</label>
                <div class="col-md-6">
                    <input type="text" id="size" name="size" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="weight" class="col-form-label col-md-2">Trọng lượng</label>
                <div class="col-md-6">
                    <input type="text" id="weight" name="weight" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="cost" class="col-form-label col-md-2">Giá nhập vào</label>
                <div class="col-md-6">
                    <input type="text" id="cost" name="cost" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="price" class="col-form-label col-md-2">Giá bán ra</label>
                <div class="col-md-6">
                    <input type="text" id="price" name="price" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="discount" class="col-form-label col-md-2">Giảm giá</label>
                <div class="col-md-6">
                    <input type="text" id="discount" name="discount" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="saleprice" class="col-form-label col-md-2">Giá bán</label>
                <div class="col-md-6">
                    <input type="text" id="saleprice" name="saleprice" class="form-control">
                </div>
            </div>
            <div class="row justify-content-md-center">
                <button type="submit" class="btn btn-primary col-md-2">Lưu</button>
                <div class="col-md-2"></div>
                <button type="button" class="btn btn-warning col-md-2">Quay lại</button>
            </div>
        </form>
    </div>
</div>
@endsection