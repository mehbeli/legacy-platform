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
.dt-bootstrap {
    padding-top: 15px;
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
        <div class="panel panel-default from-menu">
            <div class="panel-heading clearfix">
                <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Current Sales</h4>
                <div class="btn-group pull-right">
                    <a href="{{ action('OpenOrderController@create', [ 'business' => $business->unique_id ]) }}" class="btn btn-primary btn-sm"><i class="fa fa-plus fa-fw"></i> Open Sale</a>
                </div>
            </div>
            <!-- Table -->

            <table id="opened-order-table" class="table">
                <thead>
                    <tr>
                        <th>
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Start Date & Time
                        </th>
                        <th>
                            End Date & Time
                        </th>
                        <th>
                            No. of Products
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
    $('#opened-order-table').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ajax: "{{ url('/data/open-orders/'.$business->unique_id) }}",
        columns: [
            { data: 'checkboxes', name: 'checkboxes', sortable: false, searchable: false },
            { data: 'title', name: 'title' },
            { data: 'start_at', name: 'start_at' },
            { data: 'end_at', name: 'end_at' },
            { data: 'created_at', name: 'created_at' },
            { data: 'action', name: 'action', sortable: false, searchable: false }
        ]
    });
});
</script>
@endsection
