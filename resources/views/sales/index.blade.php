@extends('layouts.base-sale')

@section('content')
<div class="container container-margin-open-order">
    <div class="col-sm-10 col-sm-offset-1">
        <div class="row">
            <!-- this will be pending features -->
            <div class="login-button-username">
                <span>Hakim Razalan <a href="#">(Logout)</a></span>
            </div>
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
                <form class="form-horizontal">
                    <div class="row">
                        <hr />
                        <div class="col-sm-12">
                            <h5>Shopping Cart</h5>
                            <table class="table table-open-order">
                                <thead>
                                    <tr>
                                        <th class="checkbox-column">

                                        </th>
                                        <th>
                                            Products
                                        </th>
                                        <th class="quantity-column">
                                            Quantity
                                        </th>
                                        <th>
                                            Price
                                        </th>
                                        <th class="oo-del-head">

                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="checkbox" />
                                        </td>
                                        <td>
                                            Tudung Bawal Bidang 40"
                                        </td>
                                        <td class="select-quantity">
                                            <input type="text" class="form-control input-sm">
                                        </td>
                                        <td>
                                            RM20
                                        </td>
                                        <td class="oo-del">
                                            <i class="fa fa-close"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" />
                                        </td>
                                        <td>
                                            Tudung Bawal Bidang 40"
                                        </td>
                                        <td class="select-quantity">
                                            <select name="quantity" class="input-sm form-control">
                                                <option>
                                                    1
                                                </option>
                                                <option>
                                                    2
                                                </option>
                                                <option>
                                                    3
                                                </option>
                                            </select>
                                        </td>
                                        <td>
                                            RM20
                                        </td>
                                        <td class="oo-del">
                                            <i class="fa fa-close"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" />
                                        </td>
                                        <td>
                                            Tudung Bawal Bidang 40"
                                        </td>
                                        <td class="select-quantity">
                                            <select name="quantity" class="input-sm form-control">
                                                <option>
                                                    1
                                                </option>
                                                <option>
                                                    2
                                                </option>
                                                <option>
                                                    3
                                                </option>
                                            </select>
                                        </td>
                                        <td>
                                            RM20
                                        </td>
                                        <td class="oo-del">
                                            <i class="fa fa-close"></i>
                                        </td>
                                    </tr>
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
                        <div class="col-sm-5  table-oo-g-wrap">
                            <table class="table table-condensed table-oo-g">
                                <tbody>
                                    <tr>
                                        <td>
                                            Subtotal
                                        </td>
                                        <td>
                                            RM20
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Discount (%)
                                        </td>
                                        <td>
                                            RM1 (10%)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            VAT / GST (%)
                                        </td>
                                        <td>
                                            RM1.20 (6%)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Shipping / Handling
                                        </td>
                                        <td>
                                            RM20
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Grand Total
                                        </td>
                                        <td class="oo-gt">
                                            RM20
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row address-row">
                        <hr />
                        <div class="col-sm-6">
                            <h5>Billing Address</h5>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 oo-control-label control-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" id="inputEmail3" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 oo-control-label control-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="Address">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 oo-control-label control-label"></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 oo-control-label control-label">Postcode</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="Postcode">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 oo-control-label control-label">City</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="City">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 oo-control-label control-label">State</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="State">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 oo-control-label control-label">Country</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="Country">
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
                                                <input type="checkbox" /> Same as Billing Address
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 oo-control-label control-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" id="inputEmail3" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 oo-control-label control-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="Address">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 oo-control-label control-label"></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 oo-control-label control-label">Postcode</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="Postcode">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 oo-control-label control-label">City</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="City">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 oo-control-label control-label">State</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="State">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 oo-control-label control-label">Country</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="Country">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <hr />
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-sm btn-primary pull-right">Submit Order</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
$('.product-list').on('click', '.add-to-cart', function () {
    console.log($(this).attr('button-data'));
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
            })
        }).fail(function () {
            alert('Error loading product list');
        });
    }
    </script>
@endsection
