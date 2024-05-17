@extends('layout.site')
@section('content')
    {{-- Phần content ở dây --}}
    <div class="row">
        <div class="carousel-item active">
            <img src="image/Screenshot 2024-05-06 234855.png" class="d-block w-100" alt="">
        </div>
    </div>
    <div class="container">
        <h4>Cửa hàng Sudes Fashion</h4>
        <div class="row">
            <div class="col-md py-3">
                <div class="row">
                    <div class="col-md-6 py-3">
                        <i class="fa-solid fa-location-dot"></i>
                        <span style="font-weight: bold;">Địa Chỉ: </span>
                        <a href="" class=" text-decoration-none text-dark">
                            <p>123, Phường 15, Quận 11, TP. HCM</p>
                        </a>
                    </div>
                    <div class="col-md-6 py-3">
                        <i class="fa-regular fa-clock"></i>
                        <span style="font-weight: bold;">Thời Gian: </span>
                        <p>8h - 22h</p>
                        <p> Từ thứ 2 đến chủ nhật</p>
                    </div>
                    <div class="col-md-6 py-3">
                        <i class="fa-solid fa-phone-volume"></i>
                        <span style="font-weight: bold;">Hotline: </span>
                        <a href=""class=" text-decoration-none text-dark">
                            <p>090922134</p>
                        </a>

                    </div>
                    <div class="col-md-6 py-3">
                        <i class="fa-regular fa-envelope"></i>
                        <span style="font-weight: bold;">Email: </span>
                        <a href=""class=" text-decoration-none text-dark">
                            <p>support@susu.vn</p>
                        </a>
                    </div>
                </div>
                <div class="container">
                    <h4>Liên hệ với chúng tôi</h4>
                    <p>Nếu bạn có thắc mắc gì, có thể gửi yêu cầu cho chúng tôi, và chúng tôi sẽ liên lạc lại với bạn
                        sớm nhất có thể .</p>
                    <form action="mailto:example@example.com" method="post" enctype="text/plain">
                        <div class="form-group">
                            <label for="name">Tên:</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="message">Tin nhắn:</label>
                            <textarea class="form-control" id="message" name="message"></textarea>
                        </div>
                        <div class="py-3">
                            <button type="submit" class="btn btn-primary">Gửi thông tin</button>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-md py3">
                Google Map
            </div>
        </div>

    </div>

@endsection
{{-- đặt tên cho trang web --}}
@section('title', 'Trang Chủ')
{{-- Dùng để code css cho trang này --}}
@section('header')
    <link rel="stylesheet" href="{{ asset('contact.css') }}">
@endsection
