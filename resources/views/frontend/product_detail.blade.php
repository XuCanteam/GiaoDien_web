@extends('layout.site')
@section('content')
    {{-- Phần content ở dây --}}
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
    <div class="row py-3 px-3">
        <h2>Sản phẩm khác tương tự</h2>
        <x-card-category-same/>
    </div>
    {{-- Custommer Review--}}
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Đánh Giá Của Khách Hàng</h5>
                <div class="media mb-4">
                    <img src="https://via.placeholder.com/64" class="mr-3 rounded-circle" alt="Customer Image">
                    <div class="media-body">
                        <h6 class="mt-0">John Doe</h6>
                        <div class="star-rating">
                            <span>&#9733;</span>
                            <span>&#9733;</span>
                            <span>&#9733;</span>
                            <span>&#9733;</span>
                            <span>&#9734;</span>
                        </div>
                        <p>This product is amazing! I've been using it for a week and it has exceeded my expectations.</p>
                    </div>
                </div>
                <div class="media mb-4">
                    <img src="https://via.placeholder.com/64" class="mr-3 rounded-circle" alt="Customer Image">
                    <div class="media-body">
                        <h6 class="mt-0">Jane Smith</h6>
                        <div class="star-rating">
                            <span>&#9733;</span>
                            <span>&#9733;</span>
                            <span>&#9733;</span>
                            <span>&#9734;</span>
                            <span>&#9734;</span>
                        </div>
                        <p>Good quality but the price is a bit high for what it offers.</p>
                    </div>
                </div>
                <div class="media">
                    <img src="https://via.placeholder.com/64" class="mr-3 rounded-circle" alt="Customer Image">
                    <div class="media-body">
                        <h6 class="mt-0">Alice Johnson</h6>
                        <div class="star-rating">
                            <span>&#9733;</span>
                            <span>&#9733;</span>
                            <span>&#9734;</span>
                            <span>&#9734;</span>
                            <span>&#9734;</span>
                        </div>
                        <p>Not as good as I expected. The features are quite basic.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <!-- Review Form -->
      <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">Leave a Review</h5>
            <form>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="rating">Rating</label>
                    <select class="form-control" id="rating">
                        <option value="5">&#9733;&#9733;&#9733;&#9733;&#9733; - Tuyệt Vời</option>
                        <option value="4">&#9733;&#9733;&#9733;&#9733;&#9734; - Rất Tốt</option>
                        <option value="3">&#9733;&#9733;&#9733;&#9734;&#9734; - Tốt</option>
                        <option value="2">&#9733;&#9733;&#9734;&#9734;&#9734; - Tệ</option>
                        <option value="1">&#9733;&#9734;&#9734;&#9734;&#9734; - Rất Tệ</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="comment">Comment</label>
                    <textarea class="form-control" id="comment" rows="3" placeholder="Write your review here"></textarea>
                </div>
                <div class="form-group">
                    <label for="productImage">Thêm Ảnh Sản Phẩm</label>
                    <input type="file" class="form-control-file" id="productImage">
                </div>
                <button type="submit" class="btn btn-primary">Đăng</button>
            </form>
        </div>
    </div>
</div>
@endsection
{{-- đặt tên cho trang web --}}
@section('title', 'Chi Tiết Sản Phẩm')
{{-- Dùng để code css cho trang này --}}
@section('header')
    <link rel="stylesheet" href="{{ asset('product_detail.css') }}">
@endsection
