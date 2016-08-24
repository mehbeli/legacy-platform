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

.dataTables_info .select-info {
    display: none;
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
                <div class="pull-right">
                    @if ($openorder->active)
                        <span class="label label-success"><b>ACTIVE</b></span>
                    @else
                        <span class="label label-warning"><b>INACTIVE</b></span>
                    @endif
                </div>
            </div>
            <form class="form" id="openOrder" action="{{ action('OpenOrderController@update', [ 'business' => $business->unique_id, 'sale_url' => $openorder->sale_url ]) }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                        <label for="basic-url">Your vanity URL</label>
                        <div class="input-group">
                            <span class="input-group-addon" id="sale-url">https://jejual.my/sale/</span>
                            <input type="text" name="sale_url" class="form-control" id="basic-url" aria-describedby="sale-url" value="{{ $openorder->sale_url }}" required>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Sale title" value="{{ $openorder->title }}" required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="descriptions" class="form-control" placeholder="Sale Description" rows="5" required>{{ $openorder->title }}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Delivery Methods</label>
                            <div class="validation-delivery-method"></div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="shipping[]" value="shipping" data-parsley-errors-container=".itik" data-parsley-required {{-- ($openorder->settings->shipping) ? 'checked' : '' --}}> Shipping
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="shipping[]" {{-- ($openoder->settings->selfpickup) ? 'checked' : '' --}}> Self Pickup
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Payment Methods</label>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="manual" checked disabled> Manual Bank In / Internet Banking
                                </label>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
            <hr />
            <div class="table-top">
                <div class="row">
                <div class="col-xs-8">
                    <span class="title">Products</span>
                    <span class="info">* Select products to be included in your sale</span>
                </div>
                <div class="col-xs-4" style="text-align: right; padding-right: 25px">
                    <span class="no-product label label-primary"></span>
                </div>
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
                                <div class="form-group" id="start_date_at" data-date-default="{{ $openorder->start_at }}">
                                    <label>Start Date & Time</label>
                                    <input type="text" name="start_at" id="start_date" class="form-control" placeholder="Sale start date & time">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group" id="end_date_at" data-date-default="{{ $openorder->end_at }}">
                                    <label>End Date & Time</label>
                                    <input type="text" name="end_at" id="end_date" class="form-control" placeholder="Sale end date & time">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer clearfix">
                <button type="submit" class="btn btn-primary pull-right">Save Update</button>
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
<script src="/components/datatables-checkbox/js/dataTables.checkboxes.js"></script>
<script src="/components/momentjs/moment.js"></script>
<script src="/components/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script>
$(function() {

    $('#openOrder').parsley();
})
</script>

<script>
$(document).ready(function () {
    var default_selected = {!! json_encode(json_decode($openorder->products_list)) !!};
    $('.no-product').html(default_selected.length + " Product selected");

    var table = $('#products-table').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        deferRender: true,
        select: true,
        ajax: "{{ url('/data/products/'.$business->unique_id) }}?openorder={{ $openorder->sale_url }}",
        drawCallback: function() {
          	var api = this.api();
            api.rows().every(function() {
                var data = this.data();
                if(default_selected.indexOf(data['unique_id']) > -1){
                    api.cells(this.index(), 0).checkboxes.select();
                }
            });
        },
        initComplete: function () {
            $('.select-item').text()
        },
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
                checkboxes: {
                    selectRow: true
                }
            }
        ],
        select: {
            style: 'multi',
        },
        order: [[1, 'asc']],
        lengthMenu: [ 5, 10, 25, 50, 75, 100 ],
        pageLength: 5,
    });

    table.on('select', function (e, dt, type, indexes) {
        var thisVal = dt.data();
        selectOn(thisVal, indexes)
    });

    table.on('change', '.dt-body-center input[type=checkbox]', function () {
        dt = table.rows($(this).closest('tr')).data();
        if ($(this).is(':checked')) selectOn(dt[0], false);
        else selectOff(dt[0], false);
    });

    table.on('deselect', function (e, dt, type, indexes) {
        var thisVal = dt.data();
        selectOff(thisVal, indexes);
    });

    function selectOn(thisVal, indexes) {
        if (indexes && thisVal !== undefined) {
            for (i in indexes) {
                if (default_selected.indexOf(thisVal[i].unique_id) < 0 && thisVal[i].unique_id !== undefined) {
                    default_selected.push(thisVal[i].unique_id);
                }
                $('.no-product').html(default_selected.length + " Product selected");
            }
        } else if (thisVal !== undefined) {
            if (default_selected.indexOf(thisVal.unique_id) < 0 && thisVal.unique_id !== undefined) {
                default_selected.push(thisVal.unique_id);
            }
            $('.no-product').html(default_selected.length + " Product selected");
        }
    }

    function selectOff(thisVal, indexes) {
        if (indexes)  {
            for (i in indexes) {
                if (default_selected.indexOf(thisVal[i].unique_id) > -1) {
                    default_selected.splice(default_selected.indexOf(thisVal[i].unique_id), 1);
                }
                $('.no-product').html(default_selected.length + " Product selected");
            }
        } else if (thisVal !== undefined) {
            if (default_selected.indexOf(thisVal.unique_id) > -1) {
                default_selected.splice(default_selected.indexOf(thisVal.unique_id), 1);
            }
            $('.no-product').html(default_selected.length + " Product selected");
        }
    }

    $('#openOrder').on('submit', function(e){
        e.preventDefault();

          var form = this;
          // var rows_selected = table.column(0).checkboxes.selected();
          // Iterate over all selected checkboxes

          if (default_selected.length === 0) {
              $('.validation-product').append('Please select atleast 1 product to be included in this sale');
              return false;
          }

          $.each(default_selected, function(index, rowId){
             // Create a hidden element
             $(form).append(
                 $('<input>')
                    .attr('type', 'hidden')
                    .attr('name', 'products_list[]')
                    .val(rowId)
                );
            });

            setTimeout(function () {
                form.submit();
            }, 1000);

        });
    });
</script>

<script type="text/javascript">
$(document).ready(function () {
    $('#start_date').datetimepicker({
        defaultDate: $('#start_date_at').attr('data-date-default'),
        format: 'DD/MM/Y HH:mm:ss A',
    });
    $('#end_date').datetimepicker({
        defaultDate: $('#end_date_at').attr('data-date-default'),
        format: 'DD/MM/Y HH:mm:ss A'
    });
});
</script>
@endsection
