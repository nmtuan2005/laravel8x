@extends('layouts.app')

@section('content')
<div class="container pt-4 px-4">
    <div class="bg-light rounded h-20 p-4">
        <div class="row g-4">
            <h3>Thông tin tài khoản</h3>
        </div>
    </div>
</div>
<div class="container pt-4 px-4">
    <div class="bg-light rounded p-4">
        <a href="#" class="btn btn-primary" role="button">Cập nhật</a>
        <div class="row table-responsive table-wrapper-scroll-y my-custom-scrollbar">
            <div class="col-md-4">
                <img src="{{ asset('app/public/avatar/default.jpg') }}" alt="">
            </div>
            <div class="detail-section-content col-md-8">
                <div class="detail-row" v="detailField">
                    <div class="col-md-4">
                        <div class="detail-label">Tài khoản</div>
                    </div>
                    <div class="col-md-8">
                        <div class="detail-content">
                            <b>{{ $user->name }}</b>
                        </div>
                    </div>
                </div>
                <div class="detail-row" v="detailField">
                    <div class="col-md-4">
                        <div class="detail-label">Ngày tạo</div>
                    </div>
                    <div class="col-md-8">
                        <div class="detail-content">{{ date('d-m-Y', strtotime($user->created_at)) }}</div>
                    </div>
                </div>
                <div class="detail-row" v="detailField">
                    <div class="col-md-4">
                        <div class="detail-label">Số điện thoại</div>
                    </div>
                    <div class="col-md-8">
                        <div class="detail-content">{{ $user->phone_number }}</div>
                    </div>
                </div>
                <div class="detail-row" v="detailField">
                    <div class="col-md-4">
                        <div class="detail-label">Email</div>
                    </div>
                    <div class="col-md-8">
                        <div class="detail-content">{{ $user->email }}</div>
                    </div>
                </div>
                <div class="detail-row" v="detailField">
                    <div class="col-md-4">
                        <div class="detail-label">Địa chỉ</div>
                    </div>
                    <div class="col-md-8">
                        <div class="detail-content">{{ $user->address }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection