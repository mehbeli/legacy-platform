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
                            <span class="input-group-addon" id="sale-url">https://jejual.my/sale/</span>
                            <input type="text" name="sale_url" class="form-control" id="basic-url" aria-describedby="sale-url" value="{{ UniqueID::generate() }}" required>
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
                            <textarea name="descriptions" class="form-control" placeholder="Sale Description" rows="5" required>{{ old('description') }}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Delivery Methods</label>
                            <div class="validation-delivery-method"></div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="shipping[]" value="shipping" data-parsley-errors-container=".itik" data-parsley-required {{ (null !== old('shipping')) ? 'checked' : '' }}> Shipping
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="shipping[]" {{ (null !== old('self-pickup')) ? 'checked' : '' }}> Self Pickup
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
                <span class="title">Products</span>
                <span class="info">* Select products to be included in your sale</span>
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
                                    <input type="text" name="start_at" id="start_date" class="form-control" value="{{ old('start_at') }}" placeholder="Sale start date & time">
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
                <button type="submit" class="btn btn-primary pull-right">Open Sale Now!</button>
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

    $('#openOrder').parsley();

    var table = $('#products-table').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ajax: "{{ url('/data/products/'.$business->unique_id) }}",
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

    $('#openOrder').on('submit', function(e){
        e.preventDefault();

          var form = this;
          var rows_selected = table.column(0).checkboxes.selected();
          // Iterate over all selected checkboxes

          if (rows_selected.length === 0) {
              $('.validation-product').append('Pilih satu woi');
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

            setTimeout(function () {
                form.submit();
            }, 1000);

        });
    });
</script>
<script type="text/javascript">
$(function () {
    $('#start_date').datetimepicker({
        format: 'DD/MM/Y HH:mm:ss A',
        useCurrent: true
    });
    $('#end_date').datetimepicker({
        format: 'DD/MM/Y HH:mm:ss A'
    });
});
</script>
@endsection
