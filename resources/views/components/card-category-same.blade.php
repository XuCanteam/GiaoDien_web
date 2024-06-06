@for ($i = 0; $i < 4; $i++)
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
@endfor