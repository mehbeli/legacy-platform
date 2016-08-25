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
            {{-- <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Bulk Action <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- /.row -->

            </div>  --}}
            <hr>

            <!-- Table -->

            <table id="products-table" class="table" style="width: 100%;">
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
                        <th style="width: 110px;">
                        </th>
                    </tr>
                </thead>
            </table>
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
    $('#products-table').DataTable({
        processing: true,
        serverSide: true,
        //responsive: true,
        ajax: "{{ url('/data/products/'.$business->unique_id) }}",
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
$('#products-table').on('click', '.btn-delete', function () {
    var current = $(this);
    swal({
        title: "Are you sure?",
        text: "Your product will be deleted from all your sales & store",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false }, function(){
            swal("Deleted!", "Your Product has been deleted.", "success");
            current.parent('form').submit();
    });
});
</script>
@endsection
