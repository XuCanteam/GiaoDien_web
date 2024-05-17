<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <script src="{{ asset('bootstrap/jquery/jquery-3.7.1.min.js') }}"></script>
    <title> @yield('Title')</title>
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
</style>

<body>
  {{-- Đây là phần header --}}
  <header class="section_header bg-while">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <a href="index.html">
                        <img src="image/logo.webp" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-md-8 py-3">
                    <ul class="nav bg-body-tertiary">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="#">Về chúng tôi</a>
                        </li>
                        <div class="dropdown">
                            <a class="btn dropdown-toggle" href="san-pham" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Sản phẩm
                            </a>
                            <ul class="dropdown-menu font-monospace">
                                <li><a class="dropdown-item" href="san-pham">Áo</a></li>
                                <li><a class="dropdown-item" href="san-pham">Quần</a></li>
                                <li><a class="dropdown-item" href="san-pham">Giày & Phụ kiện</a></li>
                                <li><a class="dropdown-item" href="san-pham">Collection</a></li>
                                <li><a class="dropdown-item" href="san-pham">Best Saler</a></li>
                            </ul>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link text-yellow" href="#">Sale</a>
                        </li>
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Tin tức
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">hot</a></li>
                                <li><a class="dropdown-item" href="#">mới</a></li>
                                <li><a class="dropdown-item" href="#">quan tâm</a></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Khách hàng
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Đăng nhập<a></li>
                                <li><a class="dropdown-item" href="#">Đăng xuất</a></li>
                                <li><a class="dropdown-item" href="#">Đăng kí tài khoản</a></li>
                            </ul>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="lien-he">Liên hệ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="#">Cửa hàng</a>
                        </li>
                    </ul>
                </div>



                <div class="col-md-2 py-3">
                    <ul class="nav justify-content-end">
                        <li class="nav-item px-2">
                            <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                        </li>
                        <li class="nav-item px-2">
                            <a href="#"><i class="fa-regular fa-user"></i></a>
                        </li>
                        <li class="nav-item px-2 position-relative">
                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                            <span
                                class="position-absolute top-0 start-90 translate-middle badge rounded-pill bg-danger">
                                +99
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
