<div class="container py-3" style="background-color: #faebd7;">
    <h2>Product Sale</h2>
    <div class="row">

        @for ($i = 0; $i < 4; $i++)
            <x-product-card-sale/>
        @endfor
        <!-- Tương tự cho các sản phẩm còn lại -->
    </div>
</div>