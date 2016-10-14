<div class="p-list">
@foreach ($products as $product)
<div class="col-xs-12 col-sm-6 col-md-3 product-test">
    <div class="products" id="aa">
        <div class="product-image-wrap">
            <img src="/images/no-picture.png" class="product-image" />
        </div>
    </div>
    <div class="row">
        <div class="product-info">

            <div class="col-sm-12">
                {{ $product->product_name }}
            </div>
            <div class="col-sm-12 price">
                RM{{ $product->selling_price }}
            </div>
        </div>
        <div class="col-sm-12">
            <button type="button" class="btn-vd btn btn-block btn-sm btn-default" data-toggle="modal" data-target="#cart-modal">View Details</button>
        </div>
        <div class="col-sm-12">
            <button type="button" class="btn-vd btn-add-to-cart btn btn-block btn-sm btn-default" data-toggle="modal" data-target="#add-to-cart">Add to Cart</button>
        </div>
    </div>
</div>
@endforeach
</div>

<div class="col-xs-12 text-center">
    {{ $products->links() }}
</div>
