@extends('layout.site')
@section('content')
    <!-- Phẩn conten -->
    <!-- đây là phần list product card -->
    <div class="container">
        <h2 class="my-4">Tất Cả Sản Phẩm</h2>
        <div class="row">
            <div class="col-md-2 py-3">
                <x-list-product-card/>
            </div>
            <div class="col-md-10 py-3">
                <div class="row">
                    @for ($i = 0; $i < 20; $i++)
                        <x-product-card/>
                    @endfor
                </div>

            </div>
        </div>
        {{-- Trang Sản Phẩm ở đây --}}
    </div>
    <!--  -->
@endsection
{{-- đặt tên cho trang web --}}
@section('title', 'Sản Phẩm')
{{-- Dùng để code css cho trang này --}}
@section('header')
    <link rel="stylesheet" href="{{ asset('product.css') }}">
@endsection
