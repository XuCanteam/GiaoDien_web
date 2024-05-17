@extends('layout.site')
@section('content')
    <!-- Nội dung ghi ở đây -->
    <div class="row">
        <div class="carousel-item active">
            <img src="image/Screenshot 2024-05-06 234855.png" class="d-block w-100" alt="">
        </div>
    </div>
    <!-- code danh mục -->
    <div class="container py-5">
        <h3 style="text-align: center;">Các Danh Mục</h3>
        <div class="row py-3">
            <div class="col-md-3">
                <a href="link-den-trang-ao" class="text-decoration-none text-dark">
                    {{-- <div class="category-item ">
            <img src="image/dm1.jpg" alt="Category 1">
          </div> --}}
                    <h4 style="text-align:center;">Các Mẫu Áo</h4>
                </a>
            </div>
            <div class="col-md-3">
                <a href="link-den-trang-quan" class="text-decoration-none text-dark">
                    {{-- <div class="category-item">
            <img src="mage/dm2.png" alt="Category 2">
          </div> --}}
                    <h4 style="text-align:center;">Các Mẫu Quần</h4>
                </a>
            </div>
            <div class="col-md-3">
                <a href="link-den-trang-skincare" class="text-decoration-none text-dark">
                    {{-- <div class="category-item">
            <img src="image/dm33.webp" alt="Category 3">
          </div> --}}
                    <h4 style="text-align:center;">Skincare</h4>
                </a>
            </div>
            <div class="col-md-3">
                <a href="link-den-trang-phu-kien" class="text-decoration-none text-dark">
                    {{-- <div class="category-item">
            <img src="image/dm4.jpg" alt="Category 4">
          </div> --}}
                    <h4 style="text-align:center;">Phụ Kiện Trang Sức</h4>
                </a>
            </div>
        </div>
    </div>
    <!-- code phần product new  -->
    <div class="container py-3" style="background-color: #faebd7;">
        <h2>Product New</h2>
        <div class="row">
            <div class="col-md-3 py-3">
                <a href="#">
                    <div class="card d-flex flex-column justify-content-center align-items-center">
                        <img src="image/sp1.png" class="card-img-top img-fluid" alt="...">
                    </div>
                </a>
                <a href="#" class="text-decoration-none text-dark">
                    <h5 style="text-align:center; ">Product 1</h5>
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
                        <a href="#" class="btn btn-light mr-2"><i class="fas fa-cart-plus"></i> Thêm vào giỏ hàng</a>
                    </div>
                    <div class="col-md">
                        <a href="#" class="btn btn-light"><i class="fas fa-eye"></i> Xem sản phẩm</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3">
                <a href="#">
                    <div class="card d-flex flex-column justify-content-center align-items-center">
                        <img src="image/sp2.jpg" class="card-img-top img-fluid" alt="...">
                    </div>
                </a>
                <a href="#" class="text-decoration-none text-dark">
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
                        <a href="#" class="btn btn-light mr-2"><i class="fas fa-cart-plus"></i> Thêm vào giỏ hàng</a>
                    </div>
                    <div class="col-md">
                        <a href="#" class="btn btn-light"><i class="fas fa-eye"></i> Xem sản phẩm</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3">
                <a href="#">
                    <div class="card d-flex flex-column justify-content-center align-items-center">
                        <img src="image/sp3.jpg" class="card-img-top img-fluid" alt="...">
                    </div>
                </a>
                <a href="#" class="text-decoration-none text-dark">
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
                        <a href="#" class="btn btn-light mr-2"><i class="fas fa-cart-plus"></i> Thêm vào giỏ hàng</a>
                    </div>
                    <div class="col-md">
                        <a href="#" class="btn btn-light"><i class="fas fa-eye"></i> Xem sản phẩm</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3">
                <a href="#">
                    <div class="card d-flex flex-column justify-content-center align-items-center">
                        <img src="image/sp5.jpg" class="card-img-top img-fluid" alt="...">
                    </div>
                </a>
                <a href="#" class="text-decoration-none text-dark">
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
                        <a href="#" class="btn btn-light mr-2"><i class="fas fa-cart-plus"></i> Thêm vào giỏ
                            hàng</a>
                    </div>
                    <div class="col-md">
                        <a href="#" class="btn btn-light"><i class="fas fa-eye"></i> Xem sản phẩm</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <!-- code -	product sale -->
    <div class="container py-3" style="background-color: #faebd7;">
        <h2>Product Sale</h2>
        <div class="row">
            <div class="col-md-3 py-3">
                <a href="#">
                    <div class="card d-flex flex-column justify-content-center align-items-center bg-danger text-white">
                        <img src="image/sp1.png" class="card-img-top img-fluid" alt="...">
                    </div>
                </a>
                <a href="#" class="text-decoration-none text-dark">
                    <h5 style="text-align:center;">Product 1</h5>
                </a>
                <div class="row">
                    <div class="col-md">
                        <p class="price"><span class="text-danger">Giá: $18.99</span></p>
                    </div>
                    <div class="col-md">
                        <i class="fa-solid fa-tag px-3" style="color: red;"><i
                                style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">-23</i><i
                                class="fa-solid fa-percent"></i></i>
                    </div>
                    <div class="col-md">
                        Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <a href="#" class="btn btn-light mr-2"><i class="fas fa-cart-plus"></i> Thêm vào giỏ
                            hàng</a>
                    </div>
                    <div class="col-md">
                        <a href="#" class="btn btn-light"><i class="fas fa-eye"></i> Xem sản phẩm</a>
                    </div>
                </div>
            </div>
            <!-- Tương tự cho các sản phẩm còn lại -->
            <div class="col-md-3 py-3">
                <a href="#">
                    <div class="card d-flex flex-column justify-content-center align-items-center bg-danger text-white">
                        <img src="image/sp2.jpg" class="card-img-top img-fluid" alt="...">
                    </div>
                </a>
                <a href="#" class="text-decoration-none text-dark">
                    <h5 style="text-align:center;">Product 1</h5>
                </a>
                <div class="row">
                    <div class="col-md">
                        <p class="price"><span class="text-danger">Giá: $18.99</span></p>
                    </div>
                    <div class="col-md">
                        <i class="fa-solid fa-tag px-3" style="color: red;"><i
                                style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">-23</i><i
                                class="fa-solid fa-percent"></i></i>
                    </div>
                    <div class="col-md">
                        Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <a href="#" class="btn btn-light mr-2"><i class="fas fa-cart-plus"></i> Thêm vào giỏ
                            hàng</a>
                    </div>
                    <div class="col-md">
                        <a href="#" class="btn btn-light"><i class="fas fa-eye"></i> Xem sản phẩm</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3">
                <a href="#">
                    <div class="card d-flex flex-column justify-content-center align-items-center bg-danger text-white">
                        <img src="image/sp3.jpg" class="card-img-top img-fluid" alt="...">
                    </div>
                </a>
                <a href="#" class="text-decoration-none text-dark">
                    <h5 style="text-align:center;">Product 1</h5>
                </a>
                <div class="row">
                    <div class="col-md">
                        <p class="price"><span class="text-danger">Giá: $18.99</span></p>
                    </div>
                    <div class="col-md">
                        <i class="fa-solid fa-tag px-3" style="color: red;"><i
                                style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">-23</i><i
                                class="fa-solid fa-percent"></i></i>
                    </div>
                    <div class="col-md">
                        Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <a href="#" class="btn btn-light mr-2"><i class="fas fa-cart-plus"></i> Thêm vào giỏ
                            hàng</a>
                    </div>
                    <div class="col-md">
                        <a href="#" class="btn btn-light"><i class="fas fa-eye"></i> Xem sản phẩm</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3">
                <a href="#">
                    <div class="card d-flex flex-column justify-content-center align-items-center bg-danger text-white">
                        <img src="image/sp5.jpg" class="card-img-top img-fluid" alt="...">
                    </div>
                </a>
                <a href="#" class="text-decoration-none text-dark">
                    <h5 style="text-align:center;">Product 1</h5>
                </a>
                <div class="row">
                    <div class="col-md">
                        <p class="price"><span class="text-danger">Giá: $18.99</span></p>
                    </div>
                    <div class="col-md">
                        <i class="fa-solid fa-tag px-3" style="color: red;"><i
                                style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">-23</i><i
                                class="fa-solid fa-percent"></i></i>
                    </div>
                    <div class="col-md">
                        Giá Cũ: <span class="original-price text-decoration-line-through">$22.99</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <a href="#" class="btn btn-light mr-2"><i class="fas fa-cart-plus"></i> Thêm vào giỏ
                            hàng</a>
                    </div>
                    <div class="col-md">
                        <a href="#" class="btn btn-light"><i class="fas fa-eye"></i> Xem sản phẩm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- code -	post new -->
    <div class="container py-3">
        <h2 class="text-center mb-4">Post New</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="image/titla1.png" class="card-img-top" alt="Post 1">
                    <div class="card-body">
                        <h5 class="card-title">Post Title 1</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat
                            a ante.
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="image/tatila2.jpg" class="card-img-top" alt="Post 2">
                    <div class="card-body">
                        <h5 class="card-title">Post Title 2</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat
                            a ante.
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="image/titala3.png" class="card-img-top" alt="Post 3">
                    <div class="card-body">
                        <h5 class="card-title">Post Title 3</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat
                            a ante.
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- đặt tên cho trang web --}}
@section('title', 'Trang Chủ')
{{-- Dùng để code css cho trang này --}}
@section('header')
    <link rel="stylesheet" href="{{ asset('home.css') }}">
@endsection
