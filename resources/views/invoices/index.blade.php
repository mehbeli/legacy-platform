@extends('layouts.base')

@section('inline-css')
<style>
span.check-mark {
    margin-top: 12px !important;
}

.sp-st1 .btn {
    border-top-right-radius: 0px !important;
    border-bottom-right-radius: 0px !important;
}
.sp-nd2 .btn {
    border-left: none !important;
    border-radius: 0px !important;
}

.status-filter {
    padding-right: 10px;
}

.status-filter .btn {
    border-radius: 4px !important;
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
        <div class="panel panel-default from-menu">
            <div class="panel-heading clearfix">
                <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Invoices</h4>
                <div class="btn-group pull-right">
                    <a href="#" class="btn btn-primary btn-sm">Add Invoice</a>
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-4">
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
                    <div class="col-sm-8">
                        <div class="input-group">
                            <select class="selectpicker status-filter" data-tickIcon="fa fa-check" title="By Status" multiple data-max-options="1" data-width="100%">
                                <option>
                                    Unpaid
                                </option>
                                <option>
                                    Paid
                                </option>
                            </select>
                            <select class="selectpicker sp-st1" data-tickIcon="fa fa-check" title="By Month" multiple data-max-options="1" data-width="100%">
                                <option>
                                    January
                                </option>
                                <option>
                                    February
                                </option>
                                <option>
                                    March
                                </option>
                                <option>
                                    April
                                </option>
                                <option>
                                    May
                                </option>
                                <option>
                                    June
                                </option>
                                <option>
                                    July
                                </option>
                                <option>
                                    August
                                </option>
                                <option>
                                    September
                                </option>
                                <option>
                                    October
                                </option>
                                <option>
                                    November
                                </option>
                                <option>
                                    December
                                </option>
                            </select>
                            <select class="selectpicker sp-nd2" data-tickIcon="fa fa-check" title="By Year" multiple data-max-options="1" data-width="100%">
                                <option>
                                    2015
                                </option>
                                <option>
                                    2016
                                </option>
                            </select>

                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Apply Filter</button>
                            </span>
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->

            </div>
            <hr>

            <!-- Table -->

            <table id="pending-table" class="table">
                <thead>
                    <tr>
                        <th>
                        </th>
                        <th>
                            Invoice ID
                        </th>
                        <th>
                            Attn
                        </th>
                        <th>
                            Date
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
@endsection

@section('script')
<script>
$(function() {
    $('#pending-table').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ajax: "{{ url('/data/invoices/'.$business->id) }}",
        columns: [
            { data: 'checkboxes', name: 'checkboxes', sortable: false, searchable: false },
            { data: 'order_id', name: 'order_id' },
            { data: 'buyer', name: 'buyer' },
            { data: 'created_at', name: 'created_at' },
            { data: 'created_at', name: 'created_at' },
            { data: 'action', name: 'action', sortable: false, searchable: false }
        ]
    });
});
</script>
@endsection
