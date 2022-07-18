@extends('layouts.app')

@section('content')
<div class="container pt-4 px-4">
    <div class="bg-light rounded h-50 p-4">
        <div class="row g-4">
            <h3>Danh Sách Sản Phẩm</h3>
        </div>
    </div>
</div>
<div class="container pt-4 px-4">
    <div class="bg-light rounded p-4">
        <a href="{{ route('products.create') }}" class="btn btn-primary" role="button">Thêm mới</a>
        <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">
            <table class="table table-hover table-striped mb-0">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">SKU</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Giá bán</th>
                        <th scope="col">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $key => $product)
                    <tr id = "{{ $product->id }}">
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $product->sku }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->cost }}</td>
                        <td>{{ $product->price }}</td>
                        <td class="manage-product">
                            <a class="btn btn-primary btn-sm" href="{{ route('products.edit', [$product->id]) }}">
                                <i class="bi bi-pencil-square">Sửa</i>
                            </a>
                            <form action="{{ route('products.destroy', [$product->id]) }}" method="post">
                                <input class="btn btn-danger btn-sm" type="submit" value="Xóa" />
                                @method('delete')
                                @csrf
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection