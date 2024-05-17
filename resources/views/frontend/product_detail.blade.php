@extends('layout.site')
@section('content')
    {{-- Phần content ở dây --}}
    <div class="row">
        <div class="carousel-item active">
            <img src="../image/Screenshot 2024-05-06 234855.png" class="d-block w-100" alt="">
        </div>
    </div>
{{-- Phần mô tả sản phẩm và lựa chọn ở đây --}}
    <div class="container">
        <div class="row">
            <div class="col-md">
            </div>
            <div class="col-md-5 py-3">
                <a href="">
                    <img src="../image/sp1.png" alt="" width="100%">
                </a>
            </div>
            <div class="col-md-6">
                <h1>Sản Phẩm 1 </h1>
                <div class="row">
                    <div class="col-md py-3">
                        <p>Thương Hiệu: <span style="text-align:center; color:blue;">DennyShop</span></p>
                    </div>
                    <div class="col-md py-3">
                        <p>Tình Trạng: <span style="text-align:center; color:blue;">Còn Hàng</span></p>
                    </div>
                </div>
                <h3>Giá Tiền: <span style="text-align:center; color:blue;">200.000đ</span></h3>
                <h5>Mô Tả: </h5>
                <div>
                    áo gì gì đó
                </div>
                <h5>Thêm Voucher</h5>
                <form>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nhập mã voucher"
                            aria-label="Nhập mã voucher" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button" id="button-addon2">Thêm</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="voucher">Chọn voucher:</label>
                        <select class="form-control" id="voucher">
                            <option value="">Chọn voucher</option>
                            <option value="voucher1">Voucher 1 - Giảm 10%</option>
                            <option value="voucher2">Voucher 2 - Miễn phí vận chuyển</option>
                            <!-- Thêm các voucher khác nếu cần -->
                        </select>
                    </div>
                </form>
                <div class="row">
                    <div class="col-md-2 py-4">
                        Số lượng:
                    </div>
                    <div class="col-md-2 py-3">
                        <input type="number" class="form-control" id="quantity" value="1" min="1">
                    </div>
                    <div class="col-md-8 py-3">
                        <button type="button" class="btn btn-success btn-buy-now" style="width:100%;"><i
                                class="fas fa-cart-plus"></i>Thêm vào giỏ</button>
                    </div>
                </div>
                <div class="row">
                    <button type="button" class="btn btn-success btn-buy-now">Mua hàng</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Sản phẩm cùng danh mục -->
    <div class="row">
        <h2>Sản phẩm khác tương tự</h2>
        <div class="col-md-3 py-3">
            <a href="#">
                <div class="card d-flex flex-column justify-content-center align-items-center">
                    <img src="../image/sp1.png" class="card-img-top img-fluid" alt="...">
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
                    <a href="#" class="btn btn-light">Xem sản phẩm</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 py-3">
            <a href="#">
                <div class="card d-flex flex-column justify-content-center align-items-center">
                    <img src="../image/sp1.png" class="card-img-top img-fluid" alt="...">
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
            </div>
        </div>
        <div class="col-md-3 py-3">
            <a href="#">
                <div class="card d-flex flex-column justify-content-center align-items-center">
                    <img src="../image/sp1.png" class="card-img-top img-fluid" alt="...">
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
                    <a href="#" class="btn btn-light">Xem sản phẩm</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 py-3">
            <a href="#">
                <div class="card d-flex flex-column justify-content-center align-items-center">
                    <img src="../image/sp1.png" class="card-img-top img-fluid" alt="...">
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
                    <a href="#" class="btn btn-light">Xem sản phẩm</a>
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
    <link rel="stylesheet" href="{{ asset('product_detail.css') }}">
@endsection
