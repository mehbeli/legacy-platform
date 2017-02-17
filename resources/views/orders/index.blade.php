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

@section('vendor-css')
<link rel="stylesheet" href="/components/datatables-checkbox/css/dataTables.checkboxes.css">
<link rel="stylesheet" href="/components/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">
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
        <div class="panel panel-default from-menu">
            <div class="panel-heading clearfix">
                <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Orders</h4>
                <div class="btn-group pull-right">
                    <a href="{{ action('OrderController@create', $business->unique_id) }}" class="btn btn-primary btn-sm">
                    <i class="fa fa-plus fa-fw"></i> Add Order</a>
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                <div class="col-xs-7 col-sm-5 col-md-3">
                    <div class="form-group">
                        <select name="sale" class="form-control selectpicker" multiple data-max-options="1" title="Filter">
                            <option value="pending" selected>Pending</option>
                            <option value="confirmed">Confirmed</option>
                            <option value="completed">Completed</option>
                            <option value="all">All</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-5 col-sm-5 col-md-5">
                    <div class="input-group">
                        <input type="text" class="form-control" id="filter-date" placeholder="Filter Date">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default"><i class="fa fa-remove"></i></button>
                            <button type="button" class="btn btn-default">Filter</button>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- Table -->

            <table id="pending-table" class="table">
                <thead>
                    <tr>
                        <th>
                        </th>
                        <th>
                            Order ID
                        </th>
                        <th>
                            Order Date
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Paid
                        </th>
                        <th>
                            Status
                        </th>
                        <th>

                        </th>
                    </tr>
                </thead>
            </table>
        </div>

    </div>
</div> <!-- /container -->

<!-- modal -->
<div class="modal fade add-order-modal-lg" tabindex="-1" role="dialog" aria-labelledby="addOrder">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Add Order</h4>
      </div>
      <div class="modal-body">
          ...
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
      </div>
  </div>
</div>
</div>
@endsection

@section('script')
<script>
    $(function() {
        $('#pending-table').DataTable({
            processing: true, 
            serverSide: true,
            responsive: true,
            ajax: "{{ url('/data/orders/'.$business->unique_id) }}?status=pending",
            columns: [
            { data: 'checkboxes', name: 'checkboxes', sortable: false, searchable: false },
            { data: 'order_id', name: 'order_id' },
            { data: 'created_at', name: 'created_at' },
            { data: 'buyer', name: 'buyer' },
            { data: 'paid', name: 'paid' },
            { data: 'status', name: 'status' },
            { data: 'action', name: 'action', sortable: false, searchable: false }
            ],
            columnDefs: [
            {
                targets: 5,
                searchable: false,
                orderable: false,
                className: 'dt-body-center',
                render: function (data, type, full, meta){
                    $style = null;
                    if (data == 'confirmed') $style = 'label-warning';
                    else if (data == 'pending') $style = 'label-danger';
                    else if (data == 'completed') $style = 'label-success';

                    return '<span class="label '+$style+'">'+data+'</span>';
                }
            }
            ],
            language: {
                "lengthMenu": "Display _MENU_ records per page",
                "zeroRecords": "No order found",
                "info": "Showing page _PAGE_ of _PAGES_",
                "infoEmpty": "No order available",
                "infoFiltered": "(filtered from _MAX_ total records)"
            }
        });

        $('#filter-date').datetimepicker({
            format: 'DD/MM/Y',
        });
    });
</script>
@endsection
