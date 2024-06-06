@extends('layout.site')
@section('content')
    <!-- Nội dung ghi ở đây -->

    <div class="container py-5">
        <h1>Hôm nay xem gì?</h1>
        <div class="row">
            <div class="col-md-4 py-2">
                <form class="d-flex" role="search">
                    <div class="input-group">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <a href="">
                            <div class="search-container py-2 px-2">
                                <i class="fas fa-search"></i>
                            </div>
                        </a>
                    </div>
                </form>
            </div>
            <div class="container mt-5">
                <div class="col-md py-2">
                    <p>Từ khóa nổi bật ngày hôm nay</p>
                    <div class="row">
                        <div class="col-md">
                            <a href="" class="text-decoration-none text-dark bg-light rounded-pill py-1 px-3 d-inline-block">Áo thun</a>
                        </div>
                        <div class="col-md">
                            <a href="" class="text-decoration-none text-dark bg-light rounded-pill py-1 px-3 d-inline-block">Quần short</a>
                        </div>
                        <div class="col-md">
                            <a href="" class="text-decoration-none text-dark bg-light rounded-pill py-1 px-3 d-inline-block">Áo polo</a>
                        </div>
                        <div class="col-md">
                            <a href="" class="text-decoration-none text-dark bg-light rounded-pill py-1 px-3 d-inline-block">Váy ngắn</a>
                        </div>
                        <div class="col-md">
                            <a href="" class="text-decoration-none text-dark bg-light rounded-pill py-1 px-3 d-inline-block">Tất lưới</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- code danh mục -->
    <x-product-card-home />
    <!-- code phần product new  -->
    <x-product-new/>

    <!-- code -	product sale -->
    <x-flash-sale/>
    <!-- code -	post new -->
    <x-last-post/>
@endsection
{{-- đặt tên cho trang web --}}
@section('title', 'Trang Chủ')
{{-- Dùng để code css cho trang này --}}
@section('header')
    <link rel="stylesheet" href="{{ asset('home.css') }}">
@endsection
