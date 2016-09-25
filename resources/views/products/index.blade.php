@extends('layouts.base')

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
                <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Products / Stocks</h4>
                <div class="btn-group pull-right">
                    <a href="{{ action('ProductController@create', [ 'business' => $business->unique_id ]) }}" class="btn btn-primary btn-sm">Add Product</a>
                </div>
            </div>
            <div class="panel-body">
                <!-- Nav tabs --><div class="row">
                <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                <?php
                    $inactive = null;
                    $active = null;
                ?>
                @if (Session::has('tab') && Session::get('tab') == 'activated')

                    <?php $inactive = 'active'; ?>
                @else
                    <?php $active = 'active'; ?>
                @endif
                  <li role="presentation" class="{{$active}}"><a href="#active" aria-controls="home" role="tab" data-toggle="tab">Active Product</a></li>
                  <li role="presentation" class="{{$inactive}}"><a href="#inactive" aria-controls="profile" role="tab" data-toggle="tab">Inactive Product</a></li>
                </ul>
                </div>

            </div>
            <!-- Table -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane {{$active}}" id="active">
                        <table id="products-table-active" class="table" style="width: 100%;">
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
                                    <th class="width-fix">
                                    </th>
                                </tr>
                            </thead>
                        </table>
                </div>
                <div role="tabpanel" class="tab-pane {{$inactive}}" id="inactive">
                    <table id="products-table-inactive" class="table" style="width: 100%;">
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
                                <th class="width-fix">
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
              </div>
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
<script>
$(function() {
    $('#products-table-active').DataTable({
        processing: true,
        serverSide: true,
        //responsive: true,
        ajax: "{{ url('/data/products/'.$business->unique_id) }}?active=1",
        columns: [
            { data: 'checkboxes', name: 'checkboxes', sortable: false, searchable: false },
            { data: 'product_name', name: 'product_name' },
            { data: 'quantity_in_stock', name: 'quantity_in_stock', sortable: true },
            { data: 'selling_price', name: 'selling_price' },
            { data: 'actions', name: 'actions', sortable: false, searchable: false }
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
        order: [[1, 'desc']],
    });
});

$(function() {
    $('#products-table-inactive').DataTable({
        processing: true,
        serverSide: true,
        //responsive: true,
        ajax: "{{ url('/data/products/'.$business->unique_id) }}?active=0",
        columns: [
            { data: 'checkboxes', name: 'checkboxes', sortable: false, searchable: false },
            { data: 'product_name', name: 'product_name' },
            { data: 'quantity_in_stock', name: 'quantity_in_stock', sortable: true },
            { data: 'selling_price', name: 'selling_price' },
            { data: 'actions', name: 'actions', sortable: false, searchable: false }
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
        order: [[1, 'desc']],
    });
});
</script>
<script>
$('#products-table-active').on('click', '.btn-delete', function () {
    var current = $(this);
    swal({
        title: "Are you sure?",
        text: "Your product will be deleted from all your sales & store",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false }, function(){
            swal({
                title: "Deleted!",
                text: "Your Product has been deleted.",
                type: "success",
                timer: 2000,
                showConfirmButton: false
            });
            setTimeout(function () {
                current.parent('form').submit();
            }, 1000);
    });
});

$('.table').on('click', '.toggle-product', function () {
    var current = $(this);
    var $stats = current.parent('form').find('input[name=status]').val();
    var $extra = '';
    console.log($stats);
    if ($stats == '1') {
        console.log('masuk sini');
        $stats = 'deactivate';
        $extra = 'and will be excluded from your sale.'
    } else if ($stats == '0') {
        console.log('masuk sina');
        $stats = 'activate';
    }

    swal({
        title: "Are you sure?",
        text: "This product will be "+ $stats +"d "+$extra,
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, "+ $stats +"!",
        closeOnConfirm: false
    }, function() {
            swal({
                title: '<span style="text-transform:capitalize;">'+$stats+'d</span>!',
                text: "Your Product has been "+$stats+"d.",
                html: true,
                type: "success",
                timer: 2000,
                showConfirmButton: false
            });
            setTimeout(function () {
                current.parent('form').submit();
            }, 1000);
    });
});
</script>
@endsection
