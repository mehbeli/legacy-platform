@extends('layouts.base')

@section('inline-css')
<link rel="stylesheet" href="/components/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" media="screen">
<link rel="stylesheet" href="/components/bootstrap-select/css/bootstrap-select.min.css" media="screen">
<style>
span.check-mark {
    margin-top: 12px !important;
}
.sp-nd2 .btn {
    border-left: none !important;
    border-radius: 0 !important;
}

hr {
    margin-top: 5px;
}

.cropit-preview {
  /* You can specify preview size in CSS */
  width: 100%;
  height: 300px;
  border-radius: 5px;
  border: 2px solid #EEE;
  cursor: move;
}
</style>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        @include('partials.topbusinessinfo')
    </div>
</div>
<div class="container-margin" role="main">
    <div class="col-md-3">
        @include('partials.businesssidebar')
    </div>
    <div class="col-md-9">
        @include('partials.flashmessage')
        <div class="panel panel-default from-menu">
            <div class="panel-heading clearfix">
                <h4 class="panel-title pull-left" style="padding-top: 7.5px; padding-bottom: 7.5px">Add Order</h4>
            </div>
            <form class="form" id="order" action="{{ action('OrderController@store', [ 'business' => $business->unique_id ]) }}" method="POST">
                {{ csrf_field() }}
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" name="cpo" id="confirm-order" class="checkbox-success">
                                <label for="confirm-order">
                                    Confirm & Process Order
                                </label>
                          </div>
                      </div>
                        <div class="col-sm-6">
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" id="paid-order" name="paid">
                                    <label for="paid-order">
                                        Paid
                                    </label>
                              </div>

                        </div>
                    </div>
                    <hr />
                    {{--<div class="row">
                        <div class="col-sm-12">
                            <label>Load Customer Data</label>
                            <div class="input-group">
                                <input type="text" name="search" placeholder="Name / Email Address" class="form-control">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">Load</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <hr>--}}
                    <div class="row">
                        <div class="col-sm-6">
                            <h4>Billing Information</h4>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="billing_name" class="form-control input-sm" placeholder="Biling Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="text" name="billing_email_address" class="form-control input-sm" placeholder="Email Address" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" name="billing_phone_number" class="form-control input-sm" placeholder="Phone Number" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="billing_first_line" class="form-control input-sm" placeholder="" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="billing_second_line" class="form-control input-sm" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Post Code</label>
                                        <input type="text" name="billing_postal_code" class="form-control input-sm" placeholder="Post Code" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" name="billing_city" class="form-control input-sm" placeholder="City" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="text" name="billing_state" class="form-control input-sm" placeholder="State" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" name="billing_country" class="form-control input-sm" placeholder="Country" value="Malaysia" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="border-left: 1px #EEE solid">
                                <div class="row">
                                    <div class="col-xs-7">
                                        <h4>
                                            Delivery information
                                        </h4>
                                    </div>
                                    <div class="col-xs-5">
                                        <div class="checkbox same-as-billing pull-right">
                                            <input type="checkbox" id="same-as-billing">
                                            <label for="same-as-billing">
                                                Same as billing
                                            </label>
                                      </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="delivery_name" class="form-control input-sm" placeholder="Delivery Name" required>
                                        </div>
                                        <div class="form-group hidden">
                                            <label>Email Address</label>
                                            <input type="text" name="delivery_email_address" class="form-control input-sm" placeholder="Email Address">
                                        </div>
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" name="delivery_phone_number" class="form-control input-sm" placeholder="Phone Number" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" name="delivery_first_line" class="form-control input-sm" placeholder="" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="delivery_second_line" class="form-control input-sm" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Post Code</label>
                                            <input type="text" name="delivery_postal_code" class="form-control input-sm" placeholder="Post Code" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" name="delivery_city" class="form-control input-sm" placeholder="City" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>State</label>
                                            <input type="text" name="delivery_state" class="form-control input-sm" placeholder="State" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input type="text" name="delivery_country" class="form-control input-sm" placeholder="Country" value="Malaysia" readonly>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <hr>
                <h4 style="padding-left: 8px;">Products</h4>
                <div class="row" style="margin-bottom: 5px;">
                    <div class="col-md-6">
                            <div class="col-md-2" style="padding-top: 7px; margin-left: -5px;">
                                View
                            </div>
                            <div class="col-md-7">
                                <select class="form-control selectpicker" name="product_view">
                                    <option value="active">
                                        Active products
                                    </option>
                                    <option value="inactive">
                                        Inactice products
                                    </option>
                                    <option value="all">
                                        All products (Active & Inactive)
                                    </option>
                                </select>
                            </div>
                    </div>
                </div>
                <table id="products-table" class="table table-condensed">
                    <thead>
                        <tr>
                            <th>

                            </th>
                            <th>
                                Product Name
                            </th>
                            <th>
                                In Stock
                            </th>
                            <th>
                                Price
                            </th>
                            <th style="width: 80px;">
                                Quantity
                            </th>
                            <th style="width: 70px;">

                            </th>
                        </tr>
                    </thead>
                </table>
                <hr>
                <div class="panel-body">
                    <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Assign to open sale</label>
                                    <div class="optional-marker pull-right">
                                        <i>Optional</i>
                                    </div>
                                    <select name="sale" class="form-control selectpicker" multiple data-max-options="1" title="Select Sale...">
                                        @foreach ($openSales as $sale)
                                            <option value="{{ $sale->sale_url }}">
                                                {{ str_limit($sale->title, 256) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Delivery options</label>
                                    <select name="delivery" class="form-control selectpicker" multiple data-max-options="1" title="Select Delivery Option..." required>
                                        @foreach ($deliveries as $delivery)
                                        <option value="{{ $delivery->id }}">
                                            {{ $delivery->delivery }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Payment options</label>
                                    <select name="payment" class="form-control selectpicker" multiple data-max-options="1" title="Select Payment Option..." required>
                                        @foreach ($payments as $payment)
                                        <option value="{{ $payment->id }}">
                                            {{ $payment->payment }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="well">
                                    <div class="form-group">
                                        <label>Upload Reference</label>
                                        <div class="optional-marker pull-right">
                                            <i>Optional</i>
                                        </div>
                                        <input type="file" name="references" value="" class="form-control">
                                    </div>
                                </div>

                        </div>
                        <div class="col-sm-6" id="calc">
                            <div class="form-group">
                                <label>Subtotal</label>
                                <div class="input-group">
                                    <div class="input-group-addon">RM</div>
                                    <input name="subtotal" step="0.01" type="number" class="form-control" id="subtotal" data-cell="A1" placeholder="Amount" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Delivery Charge</label>
                                <div class="input-group">
                                    <div class="input-group-addon">RM</div>
                                    <input name="delivery_charge" step="0.01" type="number" class="form-control" id="delivery" data-cell="A2" placeholder="Amount">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Discount (RM/%)</label>
                                <input name="discount" step="0.01" type="text" class="form-control" value="" id="discount" data-cell="A3" placeholder="RM / %">
                                <input name="discount-hid" type="hidden" data-cell="A5" data-format="0[.]00">
                                <span class="small-note">Eg. 12 (lump sum discount) / 12% (% discount)</span>
                            </div>
                            <div class="form-group">
                                <label>Grand Total</label>
                                <div class="input-group">
                                    <div class="input-group-addon">RM</div>
                                    <input name="grand_total" type="text" class="form-control" id="grand_total" data-cell="A4" placeholder="Amount" data-formula="A1+A2-A5" data-format="0[.]00" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer clearfix">
                    <button type="button" class="btn btn-info">View Invoice</button>
                    <button type="submit" class="btn button-submit btn-primary pull-right">Add Order</button>
                    <div class="form-group form-group-aoa pull-right">
                        <div class="checkbox checkbox-aoa checkbox-info">
                            <input type="checkbox" id="aoa" name="aoa">
                            <label for="aoa">
                                Add another order
                            </label>
                      </div>
                    </div>
                </div>
            </form>

        </div>

    </div>
</div> <!-- /container -->

<div id="productDetail" class="modal fade add-product-modal-lg" tabindex="-1" role="dialog" aria-labelledby="addProduct">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Product Details</h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script id="modal-loader" type="text/template">
    <div class="row">
        <div class="col-sm-12">
            <i class="fa fa-spin fa-spinner"></i> Loading Product Data...
        </div>
    </div>
</script>
<script id="modal-details-content" type="text/template">
    <div class="row">
        <div class="col-sm-9 product-details-info">
            <div class="row">
                <div class="col-sm-4 input-label">
                    Product Name
                </div>
                <div class="col-sm-8">
                    <input type="text" class="form-control input-sm" id="modal-product-name" name="modal-product-name" value="" readonly>
                </div>
            </div>
            <div class="row margin-top-fix">
                <div class="col-sm-4 input-label">
                    Description
                </div>
                <div class="col-sm-8">
                    <textarea name="modal-product-description" id="modal-product-description" class="form-control" rows="8" cols="100%" readonly></textarea>
                </div>
            </div>
            <div class="row margin-top-fix">
                <div class="col-sm-4 input-label">
                    In Stock
                </div>
                <div class="col-sm-8">
                    <input type="text" class="form-control input-sm" id="modal-in-stock" name="modal-in-stock" value="" readonly>
                </div>
            </div>
            <div class="row margin-top-fix">
                <div class="col-sm-4 input-label">
                    Price
                </div>
                <div class="col-sm-8">
                    <input type="text" class="form-control input-sm" id="modal-price" name="modal-price" value="" readonly>
                </div>
            </div>
            <div class="row margin-top-fix">
                <div class="col-sm-4 input-label">
                    Selling Price
                </div>
                <div class="col-sm-8">
                    <input type="text" class="form-control input-sm" id="modal-selling-price" name="modal-selling-price" value="" readonly>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <img src="/images/no-picture.png" class="product-image-details" id="modal-product-image" />
        </div>
    </div>
</script>
<script src="/components/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="/components/datatables-checkbox/js/dataTables.checkboxes.js"></script>
<script src="/components/numeraljs/numeral.js"></script>
<script src="/components/jquery-calx/jquery-calx-2.2.7.min.js"></script>
<script>

$('#calc').calx({
    checkCircularReference : true,
    autoCalculate: true
});

var quantity = {};
$('.table').on('keyup', '.quantity_buy', function () {
    $input = $(this);
    $data_id = $(this).attr('data-id');
    old_data = 1;
    if ($data_id in quantity) {
        old_data = quantity[$data_id];
        console.log('masuk');
    }
    quantity[$data_id] = $(this).val();

    rows = table.column(0).checkboxes.selected();
    if (rows.indexOf($data_id) >= 0) {
        quantity_ = quantity[$data_id];
        console.log($input.attr('data-price'));

        total = parseFloat($('#subtotal').val());
        total = total - (parseFloat($input.attr('data-price')) * parseInt(old_data)) + (parseFloat($input.attr('data-price')) * parseInt(quantity_));

        $('#subtotal').val(parseFloat(total).toFixed(2));
        $('#calc').calx('getCell', 'A1').setValue(parseFloat(total).toFixed(2));
        $('#calc').calx('getCell', 'A4').setFormat('0[.]00').calculate();
    }
});

var table = $('#products-table').DataTable({
    processing: true,
    serverSide: true,
    responsive: true,
    ajax: {
        url: "{{ url('/data/products/'.$business->unique_id) }}?showAll=1",
        data: function (d) {
            d.view = $('select[name=product_view]').val();
        }
    },
    columns: [
        { data: 'checkboxes', name: 'checkboxes', sortable: false, searchable: false },
        { data: 'product_name', name: 'product_name' },
        { data: 'quantity_in_stock', name: 'quantity_in_stock', sortable: true },
        { data: 'selling_price', name: 'selling_price' },
        { data: 'quantity', name: 'quantity' },
        { data: 'actionnodelete', name: 'actionnodelete', sortable: false, searchable: false }
    ],
    columnDefs: [
        {
            targets: 0,
            searchable: false,
            orderable: false,
            className: 'dt-body-center',
            render: function (data, type, full, meta){
                return '<input type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '">';
            },
            checkboxes: { selectRow: true }
        },
        {
            targets: 4,
            searchable: false,
            orderable: false,
            render: function (data, type, full, meta) {
                if (full.unique_id in quantity) {
                    return '<input type="text" class="form-control input-sm quantity_buy" data-id="'+full.unique_id+'" data-price="'+full.selling_price+'" value="'+quantity[full.unique_id]+'"/>';
                } else {
                    return data;
                }
            },
        }
    ],
    select: {
        style: 'multi',
        selector: 'td:first-child'
    },
    order: [[1, 'asc']],
    lengthMenu: [ 5, 10, 25, 50, 75, 100 ],
    pageLength: 5
});

$('select[name=product_view]').on('change', function (e) {
    table.draw();
    e.preventDefault();
})

$('#order').on('submit', function(e){
    e.preventDefault();
    var form = this;
    var rows_selected = table.column(0).checkboxes.selected();
    // Iterate over all selected checkboxes

    if (rows_selected.length === 0) {
        swal("Ooops!", "You haven't select any product to be include in this order", "warning")
        return false;
    }

    $.each(rows_selected, function(index, rowId){
        // Create a hidden element
        $quantity = $('input[data-id='+rowId+']').val();
        $(form).append(
            $('<input>')
            .attr('type', 'hidden')
            .attr('name', 'products['+rowId+']')
            .val($quantity)
        );
    });
    $('.button-submit').prop('disabled', true).html('<i class="fa fa-spinner fa-spin"></i> Add Order');
    setTimeout(function () {
        form.submit();
    }, 1500);
});

$('#same-as-billing').on('click', function () {
    if ($(this).is(':checked')) {
        var billing = $('[name^=billing_]');
        var delivery = $('[name^=delivery_]').not('[name=delivery_charge]');
        $.each( billing , function (i, val) {
            console.log(delivery[i]);
            $(delivery[i]).val($(val).val()).prop('readonly', true);
        });
        $('[name^=billing_]').on('keyup', function () {
            var billing = $('[name^=billing_]');
            var delivery = $('[name^=delivery_]').not('[name=delivery_charge]');
            $.each( billing , function (i, val) {
                $(delivery[i]).val($(val).val()).prop('readonly', true);
            });
        });
    } else {
        $('[name^=delivery_]').not('[name=delivery_charge]').not('[name=delivery_country]').prop('readonly', false)
        $('[name^=billing_]').unbind();
    }
});

/* Calculation */
var total = 0;
var selectedrow = [];
table.on('select', function (e, dt, type, indexes) {
    for (i in indexes) {
        if (selectedrow.indexOf(table.rows(indexes[i]).data().pluck('unique_id')[0]) < 0) {
            selectedrow.push(table.rows(indexes[i]).data().pluck('unique_id')[0]);
            quantity_ = 1;
            if (typeof(quantity[table.rows(indexes[i]).data().pluck('unique_id')[0]]) !== 'undefined') {
                quantity_ = quantity[table.rows(indexes[i]).data().pluck('unique_id')[0]];
            }
            total = total + (parseFloat(table.rows(indexes[i]).data().pluck('selling_price')[0]) * quantity_);
        }
    }
    $('#subtotal').val(parseFloat(total).toFixed(2));
    $('#calc').calx('getCell', 'A1').setValue(parseFloat(total).toFixed(2));
    $('#calc').calx('getCell', 'A4').setFormat('0[.]00').calculate();
});

table.on('deselect', function (e, dt, type, indexes) {
    for (i in indexes) {
            if (selectedrow.indexOf(table.rows(indexes[i]).data().pluck('unique_id')[0]) >= 0) {
                selectedrow.splice(selectedrow.indexOf(table.rows(indexes[i]).data().pluck('unique_id')[0]), 1);
                quantity_ = 1;
                if (typeof(quantity[table.rows(indexes[i]).data().pluck('unique_id')[0]]) !== 'undefined') {
                    quantity_ = quantity[table.rows(indexes[i]).data().pluck('unique_id')[0]];
                }
                total = total - (table.rows(indexes[i]).data().pluck('selling_price')[0] * quantity_);
            }
    }
    $('#subtotal').val(parseFloat(total).toFixed(2));
    $('#calc').calx('getCell', 'A1').setValue(parseFloat(total).toFixed(2));
    $('#calc').calx('getCell', 'A4').setFormat('0[.]00').calculate();
});

$('#discount').on('keyup', function () {
    val = $(this).val();
    end = (val.split('')).pop();
    val = (val.split('')).join('');
    if (end == '%') {
        if (!isNaN(parseFloat(val))) {
            $('#discount').parent('.form-group').removeClass('has-error');
            subtotal = $('#calc').calx('getCell', 'A1').getValue();
            discountVal = ((parseFloat(val) * subtotal) / 100);
            $('#calc').calx('getCell', 'A5').setValue(discountVal);
            $('input[name=discount-hid]').val(discountVal);

        } else {
            $('#calc').calx('getCell', 'A5').setValue(0);
            $('#discount').parent('.form-group').addClass('has-error');
        }
    } else {
        value = isNaN(parseFloat(val));
        if (!value) {
            $('#discount').parent('.form-group').removeClass('has-error');
            discountVal = parseFloat(val);
            $('#calc').calx('getCell', 'A5').setValue(discountVal);
            $('input[name=discount-hid]').val(discountVal);
        } else {
            $('#calc').calx('getCell', 'A5').setValue(0);
            $('#discount').parent('.form-group').addClass('has-error');
        }
    }
    $('#calc').calx('getCell', 'A4').calculate().setFormat('0[.]00');
});

$('.table').on('click', '.view-details', function () {
    $modal = $('#productDetail').find('.modal-body');
    $modal.empty();
    modalLoader = $($('#modal-loader').html()).appendTo($modal);
    $.get({
        url: '{{ action('DataController@fetchDetails', [ 'business' => $business->unique_id ]) }}',
        data: { productId: $(this).attr('data-product') }
    }).done(function (product) {
        content = $($('#modal-details-content').html());
        /* load data to form */
        content.find('#modal-product-name').val(product.product_name);
        content.find('#modal-product-description').val(product.product_description);
        content.find('#modal-in-stock').val(product.quantity_in_stock);
        content.find('#modal-price').val(product.cost);
        content.find('#modal-selling-price').val(product.selling_price);
        if (product.image === '' || product.image === null) {
            console.log(product.image);
            content.find('#modal-product-image').attr('src', '/images/no-picture.png');
        } else {
            content.find('#modal-product-image').attr('src', product.image);
        }

        setTimeout(function () {
            $modal.empty();
            $modal.append(content);
        }, 1300);
    })
})
</script>
@endsection
