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
                <div class="panel-heading">
                    Pending Orders
                </div>
                <div class="panel-body">
                    All orders go here
                </div>
                <!-- Table -->
                <table class="table">
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
                    <tbody>
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
                    </tbody>
                </table>
            </div>

            <div class="panel panel-default from-menu">
                <div class="panel-heading">
                    Processed Orders
                </div>
                <div class="panel-body">
                    All orders go here
                </div>
                <!-- Table -->
                <table class="table">
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
                    <tbody>
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
                                <b class="text-success">Processed</b>
                            </td>
                            <td>
                                <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#details-modal">Details</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div> <!-- /container -->
@endsection
