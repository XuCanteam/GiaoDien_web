@extends('layout.site')
@section('content')
    <!-- Phẩn conten -->
    <div class="row">
        <div class="carousel-item active">
            <img src="image/Screenshot 2024-05-06 234855.png" class="d-block w-100" alt="">
        </div>
    </div>
    <!-- đây là phần list product card -->
    <div class="container">
        <h2 class="my-4">Tất Cả Sản Phẩm</h2>
        <div class="row">
            <div class="col-md-2 py-3">
                <div class="row">
                    <!-- Filter ở đây -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="filter">
                                <h5>Filter:</h5>
                            </label>
                            <select class="form-control" id="filter">
                                <option value="all">Tất cả</option>
                                <option value="category1">Các mẫu Áo</option>
                                <option value="category2">các Mẫu Quần</option>
                                <option value="category2">Skincare</option>
                                <option value="category2">Phụ Kiện Trang Sức</option>
                                <!-- Thêm các tùy chọn filter khác nếu cần -->
                            </select>
                        </div>
                    </div>
                    <!-- Sort by ở đây -->
                    <div class="col-md-12 py-5">
                        <div class="form-group">
                            <label for="sort">
                                <h5>Sort by:</h5>
                            </label>
                            <select class="form-control" id="sort">
                                <option value="price_asc">Giá: Thấp đến cao</option>
                                <option value="price_desc">Giá: Cao đến thấp</option>
                                <!-- Thêm các tùy chọn sort khác nếu cần -->
                            </select>
                        </div>
                    </div>
                    <!-- Chọn Giá Cả Ở Đây -->
                    <div class="col-md-12 py-5">
                        <h5>Chọn Mức Giá: </h5>
                        <div class="row ">
                            <a href="#" class=" text-decoration-none text-dark">
                                <input type="checkbox"> Dưới 100.000đ
                            </a>
                            <a href="#" class=" text-decoration-none text-dark">
                                <input type="checkbox"> Từ 100.000đ - 200.000đ
                            </a>
                            <a href="#" class=" text-decoration-none text-dark">
                                <input type="checkbox"> Từ 200.000đ - 300.000đ
                            </a>
                            <a href="#" class=" text-decoration-none text-dark">
                                <input type="checkbox"> Từ 300.000đ - 500.000đ
                            </a>
                            <a href="#" class=" text-decoration-none text-dark">
                                <input type="checkbox"> Từ 500.000đ - 1 triệu
                            </a>
                            <a href="#" class=" text-decoration-none text-dark">
                                <input type="checkbox"> Từ 1 triệu - 2 triệu
                            </a>
                            <a href="#" class=" text-decoration-none text-dark">
                                <input type="checkbox"> Từ 2 triệu - 5 triệu
                            </a>
                            <a href="#" class=" text-decoration-none text-dark">
                                <input type="checkbox"> Từ 5 triệu - 10 triệu
                            </a>
                            <a href="#" class=" text-decoration-none text-dark">
                                <input type="checkbox"> Trên 10 triệu
                            </a>
                        </div>
                    </div>
                    <!-- Loại ở đây -->
                    <div class="col-md-12 py-5">
                        <h5>Loại: </h5>
                        <div class="row ">
                            <a href="#" class=" text-decoration-none text-dark">
                                <input type="checkbox"></i> Tất Cả
                            </a>
                            <a href="#" class=" text-decoration-none text-dark">
                                <input type="checkbox"></i> Áo
                            </a>
                            <a href="#" class=" text-decoration-none text-dark">
                                <input type="checkbox"></i> Quần
                            </a>
                            <a href="#" class=" text-decoration-none text-dark">
                                <input type="checkbox"></i> Giày
                            </a>
                            <a href="#" class=" text-decoration-none text-dark">
                                <input type="checkbox"></i> Trang Sức
                            </a>
                            <a href="#" class=" text-decoration-none text-dark">
                                <input type="checkbox"></i> Phụ Kiện
                            </a>
                            <a href="#" class=" text-decoration-none text-dark">
                                <input type="checkbox"></i> Skincare
                            </a>
                        </div>
                    </div>
                    <!-- Size ở đây -->
                    <div class="col-md-12 py-5">
                        <h5>Size: </h5>
                        <div class="row ">
                            <a href="#" class=" text-decoration-none text-dark">
                                <input type="checkbox"></i> M
                            </a>
                            <a href="#" class=" text-decoration-none text-dark">
                                <input type="checkbox"></i> L
                            </a>
                            <a href="#" class=" text-decoration-none text-dark">
                                <input type="checkbox"></i> XL
                            </a>
                            <a href="#" class=" text-decoration-none text-dark">
                                <input type="checkbox"></i> XXL
                            </a>
                        </div>
                    </div>
                    <!-- màu sắc ở đây  -->
                    <div class="col-md-12 py-5">
                        <h5>Chọn Màu: </h5>
                        <div class="row ">
                            <a href="#" class=" text-decoration-none text-dark">
                                <input type="checkbox"></i> Đỏ
                            </a>
                            <a href="#" class=" text-decoration-none text-dark">
                                <input type="checkbox"></i> Xanh
                            </a>
                            <a href="#" class=" text-decoration-none text-dark">
                                <input type="checkbox"></i> Vàng
                            </a>
                            <a href="#" class=" text-decoration-none text-dark">
                                <input type="checkbox"></i> Tím
                            </a>
                            <a href="#" class=" text-decoration-none text-dark">
                                <input type="checkbox"></i> Đen
                            </a>
                            <a href="#" class=" text-decoration-none text-dark">
                                <input type="checkbox"></i> Xanh Biển
                            </a>
                        </div>
                    </div>
                    <!-- Bộ Sưu tập ở Đây -->
                    <div class="col-md-12 py-5">
                        <h5>Chọn Bộ Sưu Tập: </h5>
                        <div class="row ">
                            <a href="#" class=" text-decoration-none text-dark">
                                <input type="checkbox"></i> Sudes half time look book
                            </a>
                            <a href="#" class=" text-decoration-none text-dark">
                                <input type="checkbox"></i> Sudes Collection 2024
                            </a>
                            <a href="#" class=" text-decoration-none text-dark">
                                <input type="checkbox"></i> Summer Vibes
                            </a>
                            <a href="#" class=" text-decoration-none text-dark">
                                <input type="checkbox"></i> Sudes Mix & Match
                            </a>
                            <a href="#" class=" text-decoration-none text-dark">
                                <input type="checkbox"></i> Outlet - Ưu đãi 30% - 70%
                            </a>
                        </div>
                    </div>
                    <!-- Type View: List và Grid -->

                </div>
            </div>
            <div class="col-md-10 py-3">
                <div class="row">
                    <div class="col-md-3 py-3">
                        <a href="#">
                            <div class="card d-flex flex-column justify-content-center align-items-center">
                                <img src="image/sp1.png" class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <h5 style="text-align:center;">Product 1</h5>
                        </a>
                        <div class="row">
                            <div class="col-md">
                                <p class="price"><span class="">Giá: $18.99</span></p>
                            </div>
                            <div class="col-md">
                                Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <a href="#" class="btn btn-light mr-2">Thêm vào giỏ hàng</a>
                            </div>
                            <div class="col-md">
                                <a href="#" class="btn btn-light">Xem sản phẩm</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3">
                        <a href="#">
                            <div class="card d-flex flex-column justify-content-center align-items-center">
                                <img src="image/sp1.png" class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <h5 style="text-align:center;">Product 1</h5>
                        </a>
                        <div class="row">
                            <div class="col-md">
                                <p class="price"><span class="">Giá: $18.99</span></p>
                            </div>
                            <div class="col-md">
                                Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <a href="#" class="btn btn-light mr-2">Thêm vào giỏ hàng</a>
                            </div>
                            <div class="col-md">
                                <a href="#" class="btn btn-light">Xem sản phẩm</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3">
                        <a href="#">
                            <div class="card d-flex flex-column justify-content-center align-items-center">
                                <img src="image/sp1.png" class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <h5 style="text-align:center;">Product 1</h5>
                        </a>
                        <div class="row">
                            <div class="col-md">
                                <p class="price"><span class="">Giá: $18.99</span></p>
                            </div>
                            <div class="col-md">
                                Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <a href="#" class="btn btn-light mr-2">Thêm vào giỏ hàng</a>
                            </div>
                            <div class="col-md">
                                <a href="#" class="btn btn-light">Xem sản phẩm</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3">
                        <a href="#">
                            <div class="card d-flex flex-column justify-content-center align-items-center">
                                <img src="image/sp1.png" class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <h5 style="text-align:center;">Product 1</h5>
                        </a>
                        <div class="row">
                            <div class="col-md">
                                <p class="price"><span class="">Giá: $18.99</span></p>
                            </div>
                            <div class="col-md">
                                Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <a href="#" class="btn btn-light mr-2">Thêm vào giỏ hàng</a>
                            </div>
                            <div class="col-md">
                                <a href="#" class="btn btn-light">Xem sản phẩm</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3">
                        <a href="#">
                            <div class="card d-flex flex-column justify-content-center align-items-center">
                                <img src="image/sp1.png" class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <h5 style="text-align:center;">Product 1</h5>
                        </a>
                        <div class="row">
                            <div class="col-md">
                                <p class="price"><span class="">Giá: $18.99</span></p>
                            </div>
                            <div class="col-md">
                                Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <a href="#" class="btn btn-light mr-2">Thêm vào giỏ hàng</a>
                            </div>
                            <div class="col-md">
                                <a href="#" class="btn btn-light">Xem sản phẩm</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3">
                        <a href="#">
                            <div class="card d-flex flex-column justify-content-center align-items-center">
                                <img src="image/sp1.png" class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <h5 style="text-align:center;">Product 1</h5>
                        </a>
                        <div class="row">
                            <div class="col-md">
                                <p class="price"><span class="">Giá: $18.99</span></p>
                            </div>
                            <div class="col-md">
                                Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <a href="#" class="btn btn-light mr-2">Thêm vào giỏ hàng</a>
                            </div>
                            <div class="col-md">
                                <a href="#" class="btn btn-light">Xem sản phẩm</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3">
                        <a href="#">
                            <div class="card d-flex flex-column justify-content-center align-items-center">
                                <img src="image/sp1.png" class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <h5 style="text-align:center;">Product 1</h5>
                        </a>
                        <div class="row">
                            <div class="col-md">
                                <p class="price"><span class="">Giá: $18.99</span></p>
                            </div>
                            <div class="col-md">
                                Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <a href="#" class="btn btn-light mr-2">Thêm vào giỏ hàng</a>
                            </div>
                            <div class="col-md">
                                <a href="#" class="btn btn-light">Xem sản phẩm</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3">
                        <a href="#">
                            <div class="card d-flex flex-column justify-content-center align-items-center">
                                <img src="image/sp1.png" class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <h5 style="text-align:center;">Product 1</h5>
                        </a>
                        <div class="row">
                            <div class="col-md">
                                <p class="price"><span class="">Giá: $18.99</span></p>
                            </div>
                            <div class="col-md">
                                Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <a href="#" class="btn btn-light mr-2">Thêm vào giỏ hàng</a>
                            </div>
                            <div class="col-md">
                                <a href="#" class="btn btn-light">Xem sản phẩm</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3">
                        <a href="#">
                            <div class="card d-flex flex-column justify-content-center align-items-center">
                                <img src="image/sp1.png" class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <h5 style="text-align:center;">Product 1</h5>
                        </a>
                        <div class="row">
                            <div class="col-md">
                                <p class="price"><span class="">Giá: $18.99</span></p>
                            </div>
                            <div class="col-md">
                                Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <a href="#" class="btn btn-light mr-2">Thêm vào giỏ hàng</a>
                            </div>
                            <div class="col-md">
                                <a href="#" class="btn btn-light">Xem sản phẩm</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3">
                        <a href="#">
                            <div class="card d-flex flex-column justify-content-center align-items-center">
                                <img src="image/sp1.png" class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <h5 style="text-align:center;">Product 1</h5>
                        </a>
                        <div class="row">
                            <div class="col-md">
                                <p class="price"><span class="">Giá: $18.99</span></p>
                            </div>
                            <div class="col-md">
                                Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <a href="#" class="btn btn-light mr-2">Thêm vào giỏ hàng</a>
                            </div>
                            <div class="col-md">
                                <a href="#" class="btn btn-light">Xem sản phẩm</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3">
                        <a href="#">
                            <div class="card d-flex flex-column justify-content-center align-items-center">
                                <img src="image/sp1.png" class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <h5 style="text-align:center;">Product 1</h5>
                        </a>
                        <div class="row">
                            <div class="col-md">
                                <p class="price"><span class="">Giá: $18.99</span></p>
                            </div>
                            <div class="col-md">
                                Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <a href="#" class="btn btn-light mr-2">Thêm vào giỏ hàng</a>
                            </div>
                            <div class="col-md">
                                <a href="#" class="btn btn-light">Xem sản phẩm</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3">
                        <a href="#">
                            <div class="card d-flex flex-column justify-content-center align-items-center">
                                <img src="image/sp1.png" class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <h5 style="text-align:center;">Product 1</h5>
                        </a>
                        <div class="row">
                            <div class="col-md">
                                <p class="price"><span class="">Giá: $18.99</span></p>
                            </div>
                            <div class="col-md">
                                Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <a href="#" class="btn btn-light mr-2">Thêm vào giỏ hàng</a>
                            </div>
                            <div class="col-md">
                                <a href="#" class="btn btn-light">Xem sản phẩm</a>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
    <!--  -->
@endsection
{{-- đặt tên cho trang web --}}
@section('title', 'Trang Chủ')
{{-- Dùng để code css cho trang này --}}
@section('header')
    <link rel="stylesheet" href="{{ asset('product.css') }}">
@endsection
