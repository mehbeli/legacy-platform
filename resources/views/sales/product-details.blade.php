<div class="row">
    <div class="col-md-4" style="text-align: center;">
        <img src="{{ $product->image or '/images/no-picture.png' }}" class="product-details-sale" alt="" />
    </div>
    <div class="col-md-8">
        <h3 class="details-name">{{ $product->product_name }}</h3>
        <h5 class="details-price">RM{{ $product->selling_price }}</h5>
        <hr>
        <h4>Product Details</h4>
        <div class="details-descriptions">
            {{ $product->description }}
        </div>
    </div>
</div>
