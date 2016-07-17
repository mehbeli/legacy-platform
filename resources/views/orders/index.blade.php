@extends('layouts.base')

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
                        <a href="#" class="btn btn-primary btn-sm">Add Order</a>
                    </div>
                </div>
                <div class="panel-body">
                    All orders go here
                </div>
                <!-- Table -->

                <table id="pending-table" class="table">
                    <thead>
                        <tr>
                            <th>

                            </th>
                            <th>
                                Order From
                            </th>
                            <th>
                                Order Date
                            </th>
                            <th>
                                Status
                            </th>
                            <th>

                            </th>
                        </tr>
                    </thead>
                    <!-- tbody>
                        <tr>
                            <td>
                                <input type="checkbox" />
                            </td>
                            <td>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="nurhazirahbasir@gmail.com">Nurhazirah Basir</a>
                            </td>
                            <td>
                                30 July 2016 (02:20:56 PM)
                            </td>
                            <td>
                                <b class="text-danger">Pending</b>
                            </td>
                            <td>
                                <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#details-modal">Details</button>
                            </td>
                        </tr>
                    </tbody -->
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
            ajax: "{{ url('/data/orders/pending/'.$business->id) }}",
            columns: [
                { data: 'checkboxes', name: 'checkboxes', sortable: false, searchable: false },
                { data: 'order_id', name: 'order_id' },
                { data: 'buyer', name: 'buyer' },
                { data: 'created_at', name: 'created_at' },
                { data: 'action', name: 'action', sortable: false, searchable: false }
            ]
        });
    });
</script>
@endsection
