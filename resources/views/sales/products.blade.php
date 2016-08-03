<div class="fader">

@foreach ($products as $product)
<div class="col-xs-6 col-sm-4 col-md-3 product-test">
    <div class="products" id="{{ $product->unique_id }}">
        <div class="product-image-wrap">
            <img src="/images/no-picture.png" class="product-image" />
        </div>
        <button type="button" class="add-to-cart btn round btn-sm btn-add btn-primary" button-data="{{ $product->unique_id }}"><i class="fa fa-plus"></i></button>
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

</div>

<div class="col-xs-12" style="text-align: center;">
    {{ $products->links() }}
</div>
