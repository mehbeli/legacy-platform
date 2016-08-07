@extends('layouts.base-sale')

@section('vendor-css')
<link rel="stylesheet" href="/components/bankMY-payment-webfont/bankmy.css">
@endsection

@section('content')
<div class="container container-margin-open-order">
    <div class="col-sm-10 col-sm-offset-1">
        <div class="row">
            <!-- this will be pending features -->
            <!-- div class="login-button-username">
                <span>Hakim Razalan <a href="#">(Logout)</a></span>
            </div -->
        </div>

        <h4>Tudung Fareeda Itik</h4>
        <div class="row">
            <div class="text-center open-order-title">
                Order Form
            </div>
        </div>
    </div>

    <div class="col-sm-10 col-sm-offset-1">
        <div class="panel panel-default">
            <div class="panel-body">
                Select Product
                <div class="row">
                    <div class="col-sm-12 product-list">

                        @include('sales.products')

                    </div>
                </div>
                <form id="cart-form" class="form-horizontal">
                    <div class="row" id="shop-list">
                        <hr />

                        <div class="col-sm-12">
                            <h5>Shopping Cart</h5>
                            <table class="table table-open-order">
                                <thead>
                                    <tr>
                                        <th class="checkbox-column" style="width: 30px;">

                                        </th>
                                        <th>
                                            Products
                                        </th>
                                        <th class="quantity-column">
                                            Quantity
                                        </th>
                                        <th style="width: 120px;">
                                            Unit Price
                                        </th>
                                        <th style="width: 120px;">
                                            Subtotal (net)
                                        </th>
                                        <th class="oo-del-head">

                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="cart">
                                    <td colspan="5" id="nothing-here">
                                        Nothing in your cart
                                    </td>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-7">
                            <h5>Got Coupon?</h5>
                            <div class="row">
                                <div class="col-xs-12 col-sm-10 col-md-7">
                                    <div class="input-group">
                                        <input type="text" name="coupon" class="form-control input-sm" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-default btn-sm" type="button">Apply Coupon</button>
                                        </span>
                                    </div><!-- /input-group -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5 table-oo-g-wrap">
                            <table class="table table-condensed table-oo-g">
                                <tbody>
                                    <tr>
                                        <td>
                                            Subtotal
                                        </td>
                                        <td>
                                            RM<span id="sub-total" data-cell="X1" data-format="0.00">0.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Shipping / Handling
                                        </td>
                                        <td>
                                            RM<span id="shipping-handling" data-cell="X2" data-format="0.00">0.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Grand Total
                                        </td>
                                        <td class="oo-gt">
                                            RM<span class="grand-total" data-cell="X3" data-format="0.00">0.00</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row address-row">
                        <hr />
                        <!-- div class="col-sm-12">
                            <label for="returning-customer">Returning Customer?</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter Email Address">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">Go!</button>
                                </span>
                            </div>
                            <hr />
                        </div -->
                        <div class="col-sm-6 oo-ba">
                            <h5>Billing Address</h5>
                            <div class="form-group">
                                <label for="bil-name" class="col-sm-3 oo-control-label control-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" id="bil-name" name="bil-name" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="bil-addr1" class="col-sm-3 oo-control-label control-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" id="bil-addr1" name="bil-addr1" placeholder="Address">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="bill-addr2" class="col-sm-3 oo-control-label control-label"></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm"  id="bil-addr2" name="bill-addr2" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="bil-postcode" class="col-sm-3 oo-control-label control-label">Postcode</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" name="bil-postcode" id="bil-postcode" placeholder="Postcode">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="bil-city" class="col-sm-3 oo-control-label control-label">City</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" name="bil-city" id="bil-city" placeholder="City">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="bil-state" class="col-sm-3 oo-control-label control-label">State</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" id="bil-state" name="bil-state" placeholder="State">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="bil-country" class="col-sm-3 oo-control-label control-label">Country</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" id="bil-country" name="bil-country" placeholder="Country">
                                </div>
                            </div>

                        </div>
                        <hr class="hide-hr" />
                        <div class="col-sm-6 oo-da">
                            <div class="row">
                                <div class="col-xs-4">
                                    <h5>Delivery Address</h5>
                                </div>
                                <div class="col-xs-8 oo-saba">
                                    <div class="form-group">
                                        <div class="col-sm-9 col-sm-offset-3">
                                            <label>
                                                <input id="same-as-bil" type="checkbox" /> Same as Billing Address
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dil-name" class="col-sm-3 oo-control-label control-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" id="dil-name" name="dil-name" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dil-addr1" class="col-sm-3 oo-control-label control-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" id="dil-addr1" name="dil-addr1" placeholder="Address">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dil-addr2" class="col-sm-3 oo-control-label control-label"></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" name="dil-addr2" id="dil-addr2" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dil-postcode" class="col-sm-3 oo-control-label control-label">Postcode</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" name="dil-postcode" id="dil-postcode" placeholder="Postcode">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dil-city" class="col-sm-3 oo-control-label control-label">City</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" name="dil-city" id="dil-city" placeholder="City">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dil-state" class="col-sm-3 oo-control-label control-label">State</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" id="dil-state" name="dil-state" placeholder="State">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dil-country" class="col-sm-3 oo-control-label control-label">Country</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" name="dil-country" id="dil-country" placeholder="Country">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row oo-dil-pay" style="display: none;">
                        <hr>
                        <div class="col-sm-6">
                            <label>Payment Methods</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="payment-method">Billplz (0% charge)
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="payment-method">Manual Deposit (Internet / CDM)
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6" id="oo-del-met">
                            <label>Delivery Methods</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="delivery-method" value="courier" data-amount="6.00">Courier Service
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="delivery-method" value="selfpickup" data-amount="0.00">Self-pickup
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="delivery-method" value="cod" data-amount="6.00">Cash on Delivery
                                    <div class="delivery-remark">
                                        Limited to Puchong, Shah Alam, Serdang
                                    </div>
                                </label>
                            </div>
                            <br>
                            <div class="grand-total-last well text-success">
                                <b>Grand Total:</b>
                                RM<span class="grand-total">0.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <hr />
                        <div class="col-sm-12 btn-field">
                            <button type="button" id="back" class="btn btn-sm btn-primary back-shop" disabled><i class="fa-chevron-left fa"></i> Back</button>
                            <button type="button" id="next" class="btn btn-sm btn-primary pull-right next-dil">Next <i class="fa-chevron-right fa"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="/components/jquery-calx/jquery-calx-2.2.7.min.js"></script>
<script id="selectedProduct" type="text/x-custom-template">
<tr>
    <td>
        <input type="checkbox" />
    </td>
    <td class="individual-product-name">
    </td>
    <td class="select-quantity">
        <input type="number" class="form-control product-quantity input-sm" name="quantity" min="1" step="1" value="1">
    </td>
    <td class="individual-product-price">
        RM<span class="sell-price"></span>
    </td>
    <td class="individual-product-subtotal">
        RM<span class="subtotal-price"></span>
    </td>
    <td class="oo-del">
        <a class="delete-from-cart"><i class="fa fa-close"></i></a>
    </td>
</tr>
</script>
<script>
var productInc = 0;
var cart = {};
var formCart = $('#cart-form').calx();
function checkCart(btnclick = false) {
    if (Object.keys(cart).length > 0) {
        $('#nothing-here').hide();
    } else {
        $('#nothing-here').show();
        if (btnclick) {
            swal("Ooops!", "Your cart is empty. Add item to proceed", "warning");
            return false;
        }
    }
}
function checkCatalog() {
    product_list = $('.fader').find('.add-to-cart')
                            .removeClass('added')
                            .removeClass('btn-success')
                            .addClass('btn-primary')
                            .addClass('btn-add')
                            .html('<i class="fa fa-plus"></i>');

    $.each(cart, function (index, value) {
        $('#'+index).find('.add-to-cart').removeClass('btn-primary').removeClass('btn-add').addClass('btn-success').addClass('added').html('<i class="fa fa-check"></i>');
    });
}

function calculateTotalSubTotal() {
    var subtotal = 0;
    for (item in cart) {
        subtotal += cart[item][3];
    }
    $('#sub-total').text(subtotal.toFixed(2));

    grandTotal = parseFloat($('#sub-total').text()) + parseFloat($('#shipping-handling').text());
    $('.grand-total').text(grandTotal.toFixed(2));

}

$('.table-open-order').on('change', '.product-quantity', function () {

    product_id = $(this).parent().parent('tr').find('.oo-del a').attr('button-data');
    cell = formCart.calx('getCell', $(this).attr('data-cell'));
    cell.setValue($(this).val());

    cart[product_id][2] = $(this).val();

    formCart.calx('update');
    formCart.calx('calculate');
    cart[product_id][3] = formCart.calx('getCell', 'S'+($(this).attr('data-cell')).substring(1)).getValue();
    calculateTotalSubTotal();

});

// add to cart
$('.product-list').on('click', '.btn-add', function () {

    if ($('#shop-list').is(':visible') === false) {
        backToList();
    }

    product_id = $(this).attr('button-data');
    product_name = $('#' + $(this).attr('button-data')).find('.product-name').text().replace(/^\s+|\s+$/g, "");
    product_price = $('#' + $(this).attr('button-data')).find('.product-price').text().replace(/^\s+|\s+$/g, "").substring(2);
    product_price = parseFloat(product_price);
    clone = $('#selectedProduct').clone().html();
    clone = $(clone);

    clone.find('td.individual-product-name').html(product_name);
    clone.find('.product-quantity').attr('data-cell', 'N'+productInc);
    clone.find('.sell-price').attr('data-cell', 'P'+productInc).html(product_price);
    clone.find('.subtotal-price').attr('data-cell', 'S'+productInc).attr('data-formula', '(N'+productInc+'*P'+productInc+')').html(product_price);
    clone.find('.delete-from-cart').attr('button-data', product_id);

    cart[product_id] = [product_name, product_price, 1, product_price];
    /*
    if (typeof(Storage) !== "undefined") {
        localStorage.setItem('unique_id', JSON.stringify(cart));
    } else {
        // Sorry! No Web Storage support..
    }*/

    $('#cart').append('<tr>'+clone.html()+'</tr>');
    checkCatalog();
    checkCart();
    formCart.calx('update');
    formCart.calx('calculate');
    productInc++;
    calculateTotalSubTotal();
});
// delete from cart
$('#cart').on('click', '.delete-from-cart', function () {
    product_id = $(this).attr('button-data');
    delete cart[product_id];
    $(this).parent().parent('tr').remove();
    checkCatalog();
    checkCart();
    calculateTotalSubTotal();
});

$('.btn-field').on('click', '.next-dil', function () {
    if (checkCart(true) === false) {
        return false;
    }

    $('.back-shop').prop('disabled', false);
    $('#shop-list').fadeOut(0);
    $('.address-row').fadeIn(400);
    $(this).removeClass('next-dil').addClass('next-order-submit');
});

$('.btn-field').on('click', '.back-shop', function () {
    $(this).prop('disabled', true);
    $('.address-row').fadeOut(0);
    $('#shop-list').fadeIn(400);
    $('.next-order-submit').removeClass('next-order-submit').addClass('next-dil');
});

function backToList() {
    $(this).prop('disabled', true);
    $('.address-row').hide();
    $('.oo-dil-pay').hide();
    $('#shop-list').fadeIn(400);
    nextbtn = 'Next <i class="fa fa-chevron-right"></i>';
    $('#next')
        .removeClass('next-order-submit')
        .removeClass('btn-success')
        .addClass('next-dil')
        .addClass('btn-primary')
        .html(nextbtn);
    $('#back')
        .removeClass('back-dil')
        .addClass('back-shop')
        .prop('disabled', true);
}

$('.btn-field').on('click', '.back-dil', function () {
    $('.address-row').fadeIn(400);
    $('.oo-dil-pay').fadeOut(0);
    nextbtn = 'Next <i class="fa fa-chevron-right"></i>';
    $('#next').removeClass('btn-success').addClass('btn-primary').html(nextbtn);
    $(this).removeClass('back-dil').addClass('back-shop');
});

$('.btn-field').on('click', '.next-order-submit', function () {
    $('.address-row').fadeOut(0);
    $('.oo-dil-pay').fadeIn(400);
    $('.back-shop').addClass('back-dil').removeClass('back-shop');
    submitbtn = 'Submit Order <i class="fa fa-check"></i>';
    $(this).html(submitbtn);
    $(this).removeClass('btn-primary').addClass('btn-success');
});

$('#oo-del-met').on('change', 'input[name=delivery-method]', function () {
    shipping = $(this).attr('data-amount');
    formCart.calx('getCell', 'X2').setValue(parseFloat(shipping));
    $('#shipping-handling').text(shipping);
    formCart.calx('update');
    formCart.calx('calculate');
    calculateTotalSubTotal();
});

$('.product-list').on('click', '.btn-vd', function () {
    $.get(
        '/fetch/details/product',
        { product_id: $(this).prev().attr('id') }
    ).done(function (data) {
        console.log(data);
    });
})

</script>
<script>
function copyAddress() {
    $('#dil-name').val($('#bil-name').val());
    $('#dil-addr1').val($('#bil-addr1').val());
    $('#dil-addr2').val($('#bil-addr2').val());
    $('#dil-postcode').val($('#bil-postcode').val());
    $('#dil-city').val($('#bil-city').val());
    $('#dil-state').val($('#bil-state').val());
    $('#dil-country').val($('#bil-country').val());

}
$('#same-as-bil').on('change', function () {
    if ($(this).is(':checked')) {
        $('.oo-da').find('input').not('#same-as-bil').prop('readonly', true);
        copyAddress();
        $('.oo-ba').on('change', 'input', function () {
            copyAddress();
        });
    } else {
        $('.oo-da').find('input').prop('readonly', false);
        $('.oo-ba').off();
    }
});
</script>
<script>
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
            $('.fader').fadeOut(400, function () {
                $('.product-list').html(data);
                $('.fader').fadeIn(400);
                checkCatalog();
            })
        }).fail(function () {
            alert('Error loading product list');
        });
    }
    </script>
@endsection
