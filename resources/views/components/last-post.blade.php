<div class="container py-3">
    <h2 class="text-center mb-4">Post New</h2>
    <div class="row">
        @for ($i = 0; $i < 3; $i++)
            <x-product-card-post/>
        @endfor
    </div>
</div>