@extends('layouts.base')

@section('vendor-css')
<link rel="stylesheet" href="/components/datatables-checkbox/css/dataTables.checkboxes.css">
<link rel="stylesheet" href="/components/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">
@endsection

@section('inline-css')
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
                <h4 class="panel-title pull-left" style="padding-top: 7.5px; padding-bottom: 7.5px">Open Sale</h4>
            </div>
            <form class="form" id="openOrder" action="{{ action('OpenOrderController@store', [ 'business' => $business->unique_id ]) }}" method="POST">
            {{ csrf_field() }}
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                        <label for="basic-url">Your vanity URL</label>
                        <div class="input-group">
                            <span class="input-group-addon" id="sale-url-static">https://jejual.my/sale/</span>
                            <input type="text" name="sale_url" class="form-control" id="sale-url" aria-describedby="sale-url" value="{{ UniqueID::generate() }}" required>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Sale title" value="{{ old('title') }}" required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="descriptions" class="form-control" placeholder="Sale Description" rows="15" required>{{ old('descriptions') }}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Delivery Methods</label>
                            <div class="validation-delivery-method"></div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="shipping[]" value="courier" data-parsley-errors-container=".validation-delivery-method" data-parsley-required {{ (null !== old('shipping')) ? 'checked' : '' }}> Courier
                                </label>
                                <div class="input-group">
                                    <span class="input-group-addon">RM</span>
                                    <input min="0" step="0.01" type="number" name="courier_price" data-parsley-errors-container=".validation-delivery-method" value="0" placeholder="" class="form-control input-sm">
                                </div>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="shipping[]" data-parsley-errors-container=".validation-delivery-method" value="selfpickup" {{ (null !== old('shipping')) ? 'checked' : '' }}> Self Pickup
                                </label>
                                <div class="input-group">
                                    <span class="input-group-addon">RM</span>
                                    <input min="0" step="0.01" type="number" name="selfpickup_price" data-parsley-errors-container=".validation-delivery-method" value="0" placeholder="" class="form-control input-sm">
                                </div>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="shipping[]" value="freeshipping" data-parsley-errors-container=".validation-delivery-method" {{ (null !== old('cod')) ? 'checked' : '' }}> Free Shipping
                                </label>
                                <div class="row">
                                    <div class="col-xs-12" style="margin-top: 5px;">
                                        <input type="text" name="freeshipping_remarks" data-parsley-errors-container=".validation-delivery-method" value="" placeholder="Remarks" class="form-control input-sm">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label>Payment Methods</label>
                            <div class="validation-delivery-method-payment"></div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="payment[]" value="fpx" data-parsley-errors-container=".validation-delivery-method-payment" data-parsley-required> FPX (through BillPlz)
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="payment[]" value="manual"> Manual Bank In / Internet Banking
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="payment[]" value="cash"> Cash
                                </label>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
            <hr />
            <div class="table-top">
                <div class="col-xs-8">
                    <span class="title">Products</span>
                    <span class="info">* Select products to be included in your sale</span>
                </div>
                <div class="col-xs-4">
                </div>
                <div class="validation-product"></div>
            </div>
            <table id="products-table" class="table">
                <thead>
                    <tr>
                        <th>

                        </th>
                        <th>
                            Product Name
                        </th>
                        <th>
                            Quantity
                        </th>
                        <th>
                            Price
                        </th>
                        <th style="width: 70px;">

                        </th>
                    </tr>
                </thead>
            </table>
            <hr />
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Start Date & Time</label>
                                    <input type="text" name="start_at" id="start_date" class="form-control" value="{{ old('start_at') }}" placeholder="Sale start date & time" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>End Date & Time</label>
                                    <input type="text" name="end_at" id="end_date" class="form-control" value="{{ old('end_at') }}" placeholder="Sale end date & time">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer clearfix">
                <button type="submit" class="btn btn-primary pull-right button-submit">Open Sale Now!</button>
            </div>
            </form>
        </div>

    </div>
</div> <!-- /container -->

<!-- modal -->
<div class="modal fade add-product-modal-lg" tabindex="-1" role="dialog" aria-labelledby="addProduct">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Product Details</h4>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  </div>
</div>
@endsection

@section('script')
<script src="/components/datatables-checkbox/js/dataTables.checkboxes.min.js"></script>
<script src="/components/momentjs/moment.js"></script>
<script src="/components/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script>
$(function() {
    var $found = false;
    $('#openOrder').parsley();

    var table = $('#products-table').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ajax: "{{ url('/data/products/'.$business->unique_id) }}?showAll=1",
        columns: [
            { data: 'checkboxes', name: 'checkboxes', sortable: false, searchable: false },
            { data: 'product_name', name: 'product_name' },
            { data: 'quantity_in_stock', name: 'quantity_in_stock', sortable: true },
            { data: 'selling_price', name: 'selling_price' },
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
    var timer, val;
    $('#sale-url').on('keyup', function () {
        clearTimeout(timer);
        var str = $(this).val();
        if (str.length > 2 && val != str) {
            timer = setTimeout(function () {
            $found = false;
            val = str;
            $.get(
                '{{ action('OpenOrderController@checkSaleUrl') }}',
                { url: $('#sale-url').val() }
            ).done(function (data) {
                if (data.found) {
                    $('#sale-url').attr('data-placement', 'top').attr('data-trigger', 'focus').attr('title', 'Error').attr('data-content', "Opps! Someone has already pick this url. Please choose other name");
                    $('#sale-url').popover('show').focus();
                    $found = data.found;
                    $('#sale-url').on('hidden.bs.popover', function () {
                        $(this).popover('destroy');
                    });
                    $found = true;
                } else {
                    $found = false;
                }
            //return data.found;
        });
    }, 500);
    }
    });

    $('#openOrder').on('submit', function(e){
        e.preventDefault();
        if ($found) {
            $('#sale-url').focus();
            return false;
        }

          var form = this;
          var rows_selected = table.column(0).checkboxes.selected();
          // Iterate over all selected checkboxes

          if (rows_selected.length === 0) {
              $('.validation-product').append('Please choose one product to be include in your sale.');
              return false;
          }

          $.each(rows_selected, function(index, rowId){
             // Create a hidden element
             $(form).append(
                 $('<input>')
                    .attr('type', 'hidden')
                    .attr('name', 'products_list[]')
                    .val(rowId)
                );
            });
            $('.button-submit').prop('disabled', true).html('<i class="fa fa-spinner fa-spin"></i> Open Sale Now!');
            setTimeout(function () {
                form.submit();
            }, 1000);

        });
    });
</script>
<script type="text/javascript">
$(function () {
    firstOpen=true;
    $('#start_date').datetimepicker({
        format: 'DD/MM/Y h:mm:ss A',
        useCurrent: true,
    }).on("dp.show", function(){

        if (firstOpen==true){
            $(this).data('DateTimePicker').date(new Date());
            firstOpen=false;
        }
    });

    $('#end_date').datetimepicker({
        format: 'DD/MM/Y h:mm:ss A',
    });

    $('#start_date').on('dp.change', function (e) {
        if ($('#end_date').val() != '') {
            $('#end_date').data('DateTimePicker').minDate(e.date);
        }
    });

    $('#end_date').on('dp.change', function (e) {
            $('#end_date').data('DateTimePicker').minDate($('#start_date').data('DateTimePicker').date());
    });


});
</script>
@endsection
