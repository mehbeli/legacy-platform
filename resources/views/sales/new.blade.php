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
            <a href="#" data-toggle="modal" data-target="#cart-modal">
                <i class="fa fa-shopping-cart"></i> <span class="price-cart">0</span>
            </a>
        </span>
    </div>
</div>
<div class="container-fluid">
    <div class="col-sm-10 col-sm-offset-1">
        <div class="row verifier">
            <span class="verify-pending" data-toggle="tooltip" data-placement="bottom" title="Verified (Identification Card & SSM)">
                <i class="fa fa-exclamation-circle"></i> Pending Verification
            </span>
            <span class="pull-right shopping-total">
                <a class="links" href="#"><i class="fa fa-facebook"></i></a>
                <a class="links" href="#"><i class="fa fa-instagram"></i></a>
            </span>
            <hr>
        </div>



        <div class="row product-list">

            @include('sales.product_list')

            {{-- <div class="col-xs-12 col-sm-6 col-md-3 product-test">
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

        <div class="col-xs-12 col-sm-6 col-md-3 product-test">
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

        <div class="col-xs-12 col-sm-6 col-md-3 product-test">
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

        <div class="col-xs-12 col-sm-6 col-md-3 product-test">
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

        <div class="col-xs-12 col-sm-6 col-md-3 product-test">
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

        <div class="row text-center">
            <ul class="pagination">
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
          </ul>
      </div> --}}

  </div>
</div>

</div>

@endsection

@section('script')
<script id="selected-product-template" type="text/template">
    <tr id="">
        <td><a href="#" class="rm-btn"><i class="fa fa-remove remove-from-cart" data-id=""></i></a></td>
        <td class="product_name"></td>
        <td>RM<span class="product_price"></span></td>
        <td>
            <input type="text" class="form-control input-sm product_quantity">
        </td>
        <td>RM<span class="product_nett"></span></td>
    </tr>
</script>
<script id="selected-product-total-template" type="text/template">
    <tr class="last-column">
        <td></td>
        <td></td>
        <td></td>
        <td class="total-text">Total</td>
        <td class="total-amount"></td>
    </tr>
</script>
<script src="/components/jquery-calx/jquery-calx-2.2.7.min.js"></script>
<script type="text/javascript">
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
  })
</script>
<script>
    $(document).ready(function() {
        $(document).on('click', '.pagination a', function (e) {
            getPosts($(this).attr('href').split('page=')[1]);
            console.log('test');
            e.preventDefault();
        });
    });
    function getPosts(page) {
        $.ajax({
            url : '?page=' + page,
            dataType: 'json',
        }).done(function (data) {
            $('.p-list').fadeOut(400, function () {
                $('.product-list').html(data);
                $('.p-list').fadeIn(400);
                catalogCheck();
            })
        }).fail(function () {
            alert('Error loading product list');
        });
    }
    function catalogCheck() {
        for (var key in cart) {
            product = $('.product-list').find('#'+key);
            product.find('.btn-add-to-cart').prop('disabled', true).html('<i class="fa fa-check"></i> Added');
        }        
    }
</script>
<script>
    var cart = {};
    $('.product-list').on('click', '.btn-add-to-cart', function () {
        // Disable button
        $(this).prop('disabled', true);
        $(this).html('<i class="fa fa-check"></i> Added');
        // Add to Cart
        cart[$(this).attr('data-id')] = {
            name: $('#'+$(this).attr('data-id')).find('[data-product-name]').attr('data-product-name'),
            price: parseFloat($('#'+$(this).attr('data-id')).find('[data-price]').attr('data-price')),
            quantity: 1
        }
    });

    $('#cart-modal').on('click', '.rm-btn', function (e) {
        e.preventDefault();
        $data = $(this).find('i').attr('data-id');
        $('#modal-'+$data).remove();
        delete cart[$data];
        checkCart();
        catalogCheck();
    })

    $('#cart-modal').on('show.bs.modal', function () {
        checkCart();
    });

    function checkCart() {
        pic = $('#cart-modal').find('.product-in-cart');
        pic.empty();
        grossTotal = 0;
        for (var prodct in cart) {
            incartproduct = 'modal-'+prodct;
            $template = $($('#selected-product-template').html());
            console.log($template.find('tr'));
            $template.find('.product_name').html(cart[prodct].name);
            $template.find('.product_price').html(cart[prodct].price);
            $template.find('.product_quantity').val(cart[prodct].quantity);
            $template.find('.remove-from-cart').attr('data-id', prodct);
            $template.attr('id', incartproduct);
            nettTotal = cart[prodct].price * cart[prodct].quantity;
            grossTotal = grossTotal + nettTotal;
            $template.find('.product_nett').html(nettTotal);
            pic.append($template);
        }
        if (!$.isEmptyObject(prodct)) {
            $totalTemplate = $($('#selected-product-total-template').html());
            $totalTemplate.find('.total-amount').html('RM'+grossTotal);
            pic.append($totalTemplate);            
        } else {
            $colspan = '<td colspan="5" class="your-cart-empty">Your cart is empty</td>';
            pic.append($colspan);
        }
    }
</script>
@endsection
