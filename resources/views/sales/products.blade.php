@foreach ($products as $product)
<div class="col-xs-6 col-sm-4 col-md-3 product-test">
    <div class="products">
        <div class="product-image-wrap">
            <img src="/images/no-picture.png" class="product-image" />
        </div>

        <a class="add-to-cart btn round btn-sm btn-primary"><i class="fa fa-plus"></i></a>
        <div class="product-name-on-box">
            <div class="product-name">
                {{ $product->product_name }}
            </div>
            <div class="product-price">
                RM{{ $product->selling_price }}
            </div>
        </div>
    </div>
    <button type="button" class="btn-vd btn btn-block btn-sm btn-default">View Details</button>
</div>
@endforeach

<div class="col-xs-12">
    {{ $products->links() }}
</div>
