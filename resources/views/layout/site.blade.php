<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <script src="{{ asset('bootstrap/jquery/jquery-3.7.1.min.js') }}"></script>
    <title> @yield('title')</title>
    @yield('header')
</head>
<style>
    .carousel-item img {
        width: 100%;
        height: auto;
    }

    .card {
        max-height: 100%;
        max-width: 100%;
    }

    .card-img-top {
        width: 400px;
        height: 400px;
        /* Đặt kích thước cố định cho chiều cao của ảnh */
        object-fit: cover;
        /* Đảm bảo ảnh không bị biến đổi tỉ lệ */
    }
    .card-img-top {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }
    /* Css cho thanh tìm kiếm */
    .search-container {
            position: relative;
            display: inline-block;
    }
    .search-container input {
        width: 0;
        height: 25px;
        transition: width 0.5s;
        border-radius: 20px;
        padding: 0 15px;
        border: 1px solid #ccc;
    }
    .search-container:hover input {
        width: 200px;
    }
    .search-icon {
        position: absolute;
        right: 0;
        top: 0;
        bottom: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 25px;
        height: 25px;
        background-color: #007bff;
        color: white;
        border-radius: 50%;
        cursor: pointer;
    }
    /*  */
</style>

<body>
  {{-- Đây là phần header --}}
  <header class="section_header bg-while">
        <div class="container">
            <div class="row">
                {{-- logo --}}
                <div class="col-md-2">
                    <a href="index.html">
                        <img src="image/logo.webp" class="img-fluid" alt="">
                    </a>
                </div>
                {{-- end logo --}}

                {{-- Menu chỗ này --}}
                <div class="col-md-8 py-3">
                    <x-main-menu />
                </div>
                {{-- end menu --}}

                <div class="col-md-2 py-3">
                    <ul class="nav justify-content-end">
                        <li class="nav-item px-2">
                                <div class="search-container">
                                    <input type="text" placeholder="Search...">
                                    <div class="search-icon">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                        </li>
                        <li class="nav-item px-2">
                            <a href="#"><i class="fa-regular fa-user"></i></a>
                        </li>
                        <li class="nav-item px-2 position-relative">
                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                            <span
                                class="position-absolute top-0 start-90 translate-middle badge rounded-pill bg-danger">

                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </li>
                        <li class="nav-item px-2">
                            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        {{-- Slider ở đây --}}
        <div class="row">
            <x-slider/>
        </div>
        {{-- end slider --}}
  </header>
  <main>
    @yield('content')
  </main>
<!-- Đây là phần footer -->
  <footer class="section_footer bg-dark text-white pt-4">
      <div class="container">
          <div class="row">
              <div class="col-md-4">
                  <h6>THÔNG TIN</h6>
                  <ul class="list-unstyled justify-content-end">
                      <li><i class="fa-brands fa-facebook"></i>
                          Luong Chi Hien(Xù)
                      </li>
                      <li><i class="fa-brands fa-instagram"></i>
                          1m80.60kg
                      </li>
                      <li><i class="fa-brands fa-youtube"></i>
                          Xù Cân Team
                      </li>
                      <li><i class="fa-brands fa-github"></i>
                          Hiền Tóc Xù
                      </li>
                  </ul>
              </div>
              <div class="col-md">
                  <h6>LIÊN HỆ</h6>
                  <p>
                  <p id="address">Địa chỉ: Số 980, Ấp Vạt Lài, Xã Khánh Bình, An Phú, An Giang.</p>
                  <p id="phone">Điện thoại: 03352383292</p>
                  <p id="email">Email: xusuport@gmail.com</p>
                  </p>
              </div>
              <div class="col-md">
                  <h6>HƯỚNG DẪN</h6>
                  Denny Member
                  Mua hàng dễ dàng
                  Hợp tác nhượng quyền
                  Hướng dẫn mua hàng online
                  Hướng dẫn kiểm tra hạng thẻ thành viên
              </div>
              <div class="col-md-3">
                  <h6>ĐĂNG KÝ NHẬN LINK</h6>
              </div>
          </div>
      </div>
      <hr class="m-0 p-0">
      <div class="row">
          <div class="col-12 text-center">
              Bản Quyền thuộc về Hiền Tóc Xù. Thank Kiu
          </div>
      </div>
  </footer>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/lyout.js') }}"></script>
</body>
</html>
