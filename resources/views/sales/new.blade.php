@extends('layouts.base-sale')

@section('vendor-css')
<link rel="stylesheet" href="/components/bankMY-payment-webfont/bankmy.css">
<link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
@endsection

@section('content')
<div class="heading-background">
    <span class="sale-description">
        <div class="line-one">Year End Sale !</div>
        <div class="line-two">
            testing
        </div>
    </span>
    <div class="business-info">
        <span class="business-name">
            Hakim Razalan Sdn Bhd
        </span>
        <span class="cart">
            <a href="#">
                <i class="fa fa-shopping-cart"></i> 20
            </a>
        </span>
    </div>
</div>
<div class="container-fluid">
    <div class="col-sm-10 col-sm-offset-1">
        <div class="row">

            <div class="col-xs-6 col-sm-4 col-md-3 product-test">
                <div class="products" id="aa">
                    <div class="product-image-wrap">
                        <img src="/images/users/coldwax.jpg" class="product-image" />
                    </div>
                </div>
                <div class="row">
                    <div class="product-info">

                    <div class="col-sm-12">
                        NorahWax Cold Wax
                    </div>
                    <div class="col-sm-12 price">
                        RM35
                    </div>
                </div>
                    <div class="col-sm-12">
                        <button type="button" class="btn-vd btn btn-block btn-sm btn-default" data-toggle="modal" data-target="#details-modal">View Details</button>
                    </div>
                    <div class="col-sm-12">
                        <button type="button" class="btn-vd btn-add-to-cart btn btn-block btn-sm btn-default" data-toggle="modal" data-target="#add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-3 product-test">
                <div class="products" id="aa">
                    <div class="product-image-wrap">
                        <img src="/images/no-picture.png" class="product-image" />
                    </div>
                </div>
                <div class="row">
                    <div class="product-info">

                    <div class="col-sm-12">
                        NorahWax Hot Wax
                    </div>
                    <div class="col-sm-12 price">
                        RM35
                    </div>
                </div>
                    <div class="col-sm-12">
                        <button type="button" class="btn-vd btn btn-block btn-sm btn-default" data-toggle="modal" data-target="#details-modal">View Details</button>
                    </div>
                    <div class="col-sm-12">
                        <button type="button" class="btn-vd btn-add-to-cart btn btn-block btn-sm btn-default" data-toggle="modal" data-target="#add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-3 product-test">
                <div class="products" id="aa">
                    <div class="product-image-wrap">
                        <img src="/images/no-picture.png" class="product-image" />
                    </div>
                </div>
                <div class="row">
                    <div class="product-info">

                    <div class="col-sm-12">
                        Kucing Hitam Gagak
                    </div>
                    <div class="col-sm-12 price">
                        <strike>RM123</strike> RM120
                    </div>
                </div>
                    <div class="col-sm-12">
                        <button type="button" class="btn-vd btn btn-block btn-sm btn-default" data-toggle="modal" data-target="#details-modal">View Details</button>
                    </div>
                    <div class="col-sm-12">
                        <button type="button" class="btn-vd btn-add-to-cart btn btn-block btn-sm btn-default" data-toggle="modal" data-target="#add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-3 product-test">
                <div class="products" id="aa">
                    <div class="product-image-wrap">
                        <img src="/images/no-picture.png" class="product-image" />
                    </div>
                </div>
                <div class="row">
                    <div class="product-info">

                    <div class="col-sm-12">
                        Kucing Hitam Gagak
                    </div>
                    <div class="col-sm-12 price">
                        <strike>RM123</strike> RM120
                    </div>
                </div>
                    <div class="col-sm-12">
                        <button type="button" class="btn-vd btn btn-block btn-sm btn-default" data-toggle="modal" data-target="#details-modal">View Details</button>
                    </div>
                    <div class="col-sm-12">
                        <button type="button" class="btn-vd btn-add-to-cart btn btn-block btn-sm btn-default" data-toggle="modal" data-target="#add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-3 product-test">
                <div class="products" id="aa">
                    <div class="product-image-wrap">
                        <img src="/images/no-picture.png" class="product-image" />
                    </div>
                </div>
                <div class="row">
                    <div class="product-info">

                    <div class="col-sm-12">
                        Kucing Hitam Gagak
                    </div>
                    <div class="col-sm-12 price">
                        <strike>RM123</strike> RM120
                    </div>
                </div>
                    <div class="col-sm-12">
                        <button type="button" class="btn-vd btn btn-block btn-sm btn-default" data-toggle="modal" data-target="#details-modal">View Details</button>
                    </div>
                    <div class="col-sm-12">
                        <button type="button" class="btn-vd btn-add-to-cart btn btn-block btn-sm btn-default" data-toggle="modal" data-target="#add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-3 product-test">
                <div class="products" id="aa">
                    <div class="product-image-wrap">
                        <img src="/images/no-picture.png" class="product-image" />
                    </div>
                </div>
                <div class="row">
                    <div class="product-info">

                    <div class="col-sm-12">
                        Kucing Hitam Gagak
                    </div>
                    <div class="col-sm-12 price">
                        <strike>RM123</strike> RM120
                    </div>
                </div>
                    <div class="col-sm-12">
                        <button type="button" class="btn-vd btn btn-block btn-sm btn-default" data-toggle="modal" data-target="#details-modal">View Details</button>
                    </div>
                    <div class="col-sm-12">
                        <button type="button" class="btn-vd btn-add-to-cart btn btn-block btn-sm btn-default" data-toggle="modal" data-target="#add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row text-center">
        <ul class="pagination">
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
        </ul>
    </div>
</div>

@endsection

@section('script')
<script src="/components/jquery-calx/jquery-calx-2.2.7.min.js"></script>
<script type="text/javascript">

</script>
@endsection
