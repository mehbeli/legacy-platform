@extends('layouts.base-sale')

@section('vendor-css')
<link rel="stylesheet" href="/components/bankMY-payment-webfont/bankmy.css">
<!-- link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet" -->
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
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
                <i class="fa fa-shopping-cart"></i> <span class="price-cart">RM0 (0 items)</span>
            </a>
        </span>
    </div>
</div>
    </div>
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

@include('sales.modal')

</div>

@endsection

@section('script')
<script id="selected-product-template" type="text/template">
    <tr id="">
        <td><a href="#" class="remove-from-cart" data-id=""><i class="fa fa-remove"></a></td>
        <td class="product_name"></td>
        <td class="product_price"></td>
        <td>
            <input type="number" step="1" min="1" class="form-control input-sm product_quantity" data-id="">
        </td>
        <td class="product_nett"></td>
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
<script id="checkout-template" type="text/template">
@include('sales.cart')
</script>
<script src="/components/jquery-calx/jquery-calx-2.2.7.min.js"></script>
<script type="text/javascript">

    $.ajaxSetup(
    {
        headers:
        {
            'X-CSRF-Token': '{{ csrf_token() }}'
        }
    });

    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
  })

    $checkOut = {
        'billing': false,
        'delivery': false,
        'payment_delivery': false
    }

    $checkOutForm = {
        'billing_name': '',
        'billing_email_address': '',
        'billing_phone': '',
        'billing_address_one': '',
        'billing_address_two': '',
        'billing_post_code': '',
        'billing_city': '',
        'billing_state': '',
        'billing_country': 'Malaysia',
        'same_as_billing': false,
        'delivery_name': '',
        'delivery_phone': '',
        'delivery_address_one': '',
        'delivery_address_two': '',
        'delivery_post_code': '',
        'delivery_city': '',
        'delivery_state': '',
        'delivery_country': 'Malaysia',
        'payment': null,
        'delivery': null
    }

    $(document).ready(function() {
        $(document).on('click', '.pagination a', function (e) {
            getPosts($(this).attr('href').split('page=')[1]);
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

    // Add product to cart
    var cart = {};
    var cartDelivery = 0;
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
        grossTotal = 0;
        for (var prodct in cart) {
            nettTotal = cart[prodct].price * cart[prodct].quantity;
            grossTotal = grossTotal + nettTotal;
        }
        $('.price-cart').html('RM'+grossTotal+' ('+Object.keys(cart).length+' items)')
    });

    $('#details-modal').on('click', '.add-to-cart-details', function () {

        $data_id = $(this).attr('data-id');
        $catalogList = $('#'+$data_id).find('.btn-add-to-cart');
        $catalogList.prop('disabled', true);
        $catalogList.html('<i class="fa fa-check"></i> Added');

        cart[$data_id] = {
            name: $('#'+$data_id).find('[data-product-name]').attr('data-product-name'),
            price: parseFloat($('#'+$data_id).find('[data-price]').attr('data-price')),
            quantity: 1
        }
        grossTotal = 0;
        for (var prodct in cart) {
            nettTotal = cart[prodct].price * cart[prodct].quantity;
            grossTotal = grossTotal + nettTotal;
        }
        $('.price-cart').html('RM'+grossTotal+' ('+Object.keys(cart).length+' items)');
        $('#details-modal').find('.add-to-cart-details').prop('disabled', true).attr('data-id', $product_id).html('<i class="fa fa-check"></i> Added');

    });

    // Show modal for cart
    $('#cart-modal').on('show.bs.modal', function () {
        pic = $(this).find('.product-in-cart');
        $checkOut = $(this).find('.btn-checkout');
        if (Object.keys(cart).length <= 0) {
            $checkOut.prop('disabled', true);
            $checkOut.off();
        } else {
            $checkOut.off();
            $checkOut.prop('disabled', false);
            $checkOut.on('click', function () {
                $('#cart-modal').modal('hide');
                setTimeout(function () {
                    $content = checkOutForm();
                    $('#checkout-modal').find('.modal-body').html($content);
                    $('#checkout-modal').modal({backdrop: 'static', keyboard: false, show:true });
                }, 500);
            });
        }
        checkCart(pic);
    });

    $('#checkout-modal').on('show.bs.modal', function () {
        checker();
        reviewCart();
    });

    $('#checkout-modal').on('keyup change', ':input', function (event) {
        $chModal = $(this);
        if (event.type == 'change') {

            $checkOutForm[$chModal.attr('name')] = $chModal.val();

            if ($chModal.attr('name') == 'delivery') {

                if ($chModal.val() == "courier") {
                    $('input[value=cash]').prop('disabled', true).prop('checked', false);
                    if ($checkOutForm['payment'] === 'cash')
                        $checkOutForm['payment'] = null;
                } else {
                    $('input[value=cash]').prop('disabled', false);
                }

                cartDelivery = parseFloat($chModal.attr('data-price'));
                $('#checkout-modal').find('#checkout-delivery').html('RM'+cartDelivery);
                subtotal = $('#checkout-modal').find('#checkout-subtotal').html();
                subtotal = parseFloat(subtotal.replace('RM', ''));
                grandTotal = subtotal + cartDelivery;
                $('#checkout-modal').find('#checkout-grandtotal').html('RM'+grandTotal);
            }

            if ($chModal.attr('name') == 'same_as_billing') {
                checkorNot = false;
                if ($chModal.prop('checked')) { checkorNot = true }
                $checkOutForm[$chModal.attr('name')] = checkorNot;
            }

            if ($('#checkout-modal').find('input[name=same_as_billing]').prop('checked')) {
                if ($chModal.attr('name') != 'delivery') {
                    if ($chModal.attr('name') != 'payment') {
                        sameAsBilling($chModal.attr('name'));
                    }
                }
            }

            checker();

        } else if (event.type == 'keyup') {
            delay(function () {
            $checkOutForm[$chModal.attr('name')] = $chModal.val();
            if ($chModal.find('input[name=same_as_billing]').prop('checked')) {
                if ($chModal.attr('name') != 'delivery') {
                    if ($chModal.attr('name') != 'payment') {
                        sameAsBilling($chModal.attr('name'));
                    }
                }
            }
        }, 1000);
        }
    });

    $('#checkout-modal').on('click', 'input[name=same_as_billing]', function () {
        if ($(this).prop('checked')) {
            $('#checkout-modal').find(":input[name^=delivery_]").prop('readonly', true);
                for (i in $checkOutForm) {
                    if (i.indexOf('billing') >= 0) {
                        sameAsBilling(i);
                    }
                }
        } else {
            $('#checkout-modal').find(":input[name^=delivery_]").prop('readonly', false);
        }
    })

    // Change in quantity - recalculation
    $('#cart-modal').on('keyup change', '.product_quantity', function () {
        if (parseFloat($(this).val()) === parseInt($(this).val(), 10)) {
            cart[$(this).attr('data-id')].quantity = parseInt($(this).val());
        } else {
            cart[$(this).attr('data-id')].quantity = 1;
        }
        updateCart();
    });

    // Remove product from cart
    $('.product-in-cart').on('click', '.remove-from-cart', function (e) {
        e.preventDefault();
        // Delete from cart
        $id = $(this).attr('data-id');
        delete cart[$id];

        // Change status on product list
        $productList = $('.product-list').find('#'+$id).find('.btn-add-to-cart');
        $productList.prop('disabled', false);
        $productList.html('Add to Cart');
        pic = $('#cart-modal').find('.product-in-cart');
        checkCart(pic);
    });

    $('.product-list').on('click', '.btn-vd', function () {
        $('#details-modal').find('.modal-body').empty().html('<i class="fa fa-spin fa-fw fa-spinner"></i> Loading Data...');
        $product_id = $(this).attr('data-id');
        $.get({
            url: '/api/{{ $business }}/get/product',
            data: {
                 product: $product_id
             }
        }).done(function (detail) {
            setTimeout(function () {
                $('#details-modal').find('.modal-body').empty().html(detail);
            }, 800);
        });
        if ($product_id in cart) {
            $('#details-modal').find('.add-to-cart-details').prop('disabled', true).attr('data-id', $product_id).html('<i class="fa fa-check"></i> Added');
        } else {
            $('#details-modal').find('.add-to-cart-details').prop('disabled', false).attr('data-id', $product_id).html('Add to Cart');
        }
    });

    // Send Checkout
    $('.btn-proceed').on('click', function () {
        $('#checkout-modal').find('input').prop('disabled', true);
        $('#checkout-modal').find('button').not('.btn-proceed').prop('disabled', true);
        $(this).prop('disabled', true).html('<i class="fa fa-spin fa-spinner"></i> Processing...')
        $.post('/sale/{{ $business }}/checkout', { cart: cart, customer: $checkOutForm })
            .done(function (data) {
                $('#checkout-modal').hide();
                swal({
                    title: "Submitted",
                    text: "Your order have been submitted.",
                    type: "success",
                    showCancelButton: false,
                    closeOnConfirm: true,
                },
                function(){
                    window.location.href = window.location.href;
                });
            });
    });

    function reviewCart() {

        $subtotal = 0;
        for (i in cart) {
            price = cart[i].quantity * cart[i].price;
            $subtotal += price;
            $('#checkout-modal').find('.product-list-selected').find('tbody').append('<tr><td>'+cart[i].name+' ('+cart[i].quantity+' unit(s))</td><td class="text-right">RM'+price+'</td></tr>')
        }

        $('#checkout-subtotal').html('RM'+$subtotal);
        $('#checkout-delivery').html('RM'+cartDelivery);
        grandtotal = $subtotal + cartDelivery;
        $('#checkout-grandtotal').html('RM'+grandtotal);

    }

    function checker() {

        $billingObj = $('#checkout-modal').find(':input[name^=billing_]').length;
        $billingNo = 0;
        $deliveryObj = $('#checkout-modal').find(':input[name^=delivery_]').length;
        $deliveryNo = 0;

        for (i in $checkOutForm) {
            // check billing
            if (i.indexOf('billing_') >= 0) {
                if ($checkOutForm[i].length > 0) {
                    $billingNo++;
                }
                if ($billingNo >= $billingObj) {
                    $('#checkout-modal').find('.billing-status').find('i').removeClass('fa-exclamation-circle').removeClass('text-danger').addClass('fa-check').addClass('text-success');
                    $checkOut['billing'] = true;
                } else {
                    $('#checkout-modal').find('.billing-status').find('i').addClass('fa-exclamation-circle').addClass('text-danger').removeClass('fa-check').removeClass('text-success');
                    $checkOut['billing'] = false;
                }
            }

            // check delivery
            else if (i.indexOf('delivery_') >= 0) {
                if ($checkOutForm[i].length > 0) {
                    $deliveryNo++;
                }
                if ($deliveryNo >= $deliveryObj) {
                    $('#checkout-modal').find('.delivery-status').find('i').removeClass('fa-exclamation-circle').removeClass('text-danger').addClass('fa-check').addClass('text-success');
                    $checkOut['delivery'] = true;
                } else {
                    $('#checkout-modal').find('.delivery-status').find('i').addClass('fa-exclamation-circle').addClass('text-danger').removeClass('fa-check').removeClass('text-success');
                    $checkOut['delivery'] = false;
                }
            }

        }

        if ($checkOutForm['delivery'] != null
            && $checkOutForm['payment'] != null) {
            $('#checkout-modal').find('.payment-delivery-status').find('i').removeClass('fa-exclamation-circle').removeClass('text-danger').addClass('fa-check').addClass('text-success');
            $checkOut['payment_delivery'] = true;
        } else {
            $('#checkout-modal').find('.payment-delivery-status').find('i').addClass('fa-exclamation-circle').addClass('text-danger').removeClass('fa-check').removeClass('text-success');
            $checkOut['payment_delivery'] = false;
        }

        $no_true = 0;
        for (i in $checkOut) {
            if ($checkOut[i] === true)
                $no_true++;
        }
        if ($no_true >= 3) {
            $('.btn-proceed').prop('disabled', false);
        } else {
            $('.btn-proceed').prop('disabled', true);
        }

    }

    function sameAsBilling(el_name) {
        //console.log(el_name)
        bilval = $('#checkout-modal').find(':input[name='+el_name+']').val();
        console.log(bilval);
        $repname = el_name.replace('billing', 'delivery');
        delval = $('#checkout-modal').find(':input[name='+$repname+']').val(bilval);
        if (el_name != 'billing_email_address') {
            $checkOutForm[$repname] = $checkOutForm[el_name];
        }

    }

    function checkOutForm() {
        $myCheckOut = $($('#checkout-template').html());
        for (i in $checkOutForm) {
            if (i == 'same_as_billing') {

                if ($checkOutForm[i] === true) {
                    $myCheckOut.find('input[name='+i+']').click()
                    $myCheckOut.find(":input[name^=delivery_]").prop('readonly', true);
                }

            } else if (i == 'payment' || i == 'delivery') {
                console.log($checkOutForm[i]);
                if ($checkOutForm[i] !== '' || $checkOutForm[i] !== null) {
                    $myCheckOut.find('input[name='+i+'][value='+$checkOutForm[i]+']').prop('checked', true);
                }
            } else {
                $myCheckOut.find('input[name='+i+']').val($checkOutForm[i]);
            }
        }
        return $myCheckOut;
    }

    // Update Cart
    function updateCart(pic) {
        grossTotal = 0;
        $cartModal = $('#cart-modal');
        for (var selected in cart) {
            $template = $cartModal.find('#cart'+selected);
            nettTotal = cart[selected].price * cart[selected].quantity;
            grossTotal = grossTotal + nettTotal;
            $template.find('.product_nett').html('RM'+nettTotal);
        }
        $cartModal.find('.total-amount').html('RM'+grossTotal);
        $('.price-cart').html('RM'+grossTotal+' ('+Object.keys(cart).length+' items)')
    }

    // Check cart if got changes
    function checkCart(pic) {
        pic.empty();
        grossTotal = 0;
        for (var prodct in cart) {
            incartproduct = 'modal-'+prodct;
            $template = $($('#selected-product-template').html());
            $template.attr('id', 'cart-'+prodct);
            $template.find('.remove-from-cart').attr('data-id', prodct);
            $template.find('.product_name').html(cart[prodct].name);
            $template.find('.product_price').html(cart[prodct].price);
            $template.find('.product_quantity').val(cart[prodct].quantity);
            $template.find('.product_quantity').attr('data-id', prodct);
            nettTotal = cart[prodct].price * cart[prodct].quantity;
            grossTotal = grossTotal + nettTotal;
            $template.find('.product_nett').html('RM'+nettTotal);
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
        $('.price-cart').html('RM'+grossTotal+' ('+Object.keys(cart).length+' items)')
    }

    var delay = (function(){
        var timer = 0;
        return function(callback, ms){
            clearTimeout (timer);
            timer = setTimeout(callback, ms);
        };
    })();
</script>
@endsection
