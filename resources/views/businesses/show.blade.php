@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-md-12">

    <div class="top-info">

        <div class="col-sm-3 info-details">
            <div class="row">
                <div class="col-xs-12 title-info">
                    Pending Orders
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 number-info">
                    {{ $business->orders()->where('confirmed', false)->count() }}
                </div>
            </div>
        </div>

        <div class="col-sm-3 info-details">
            <div class="row">
                <div class="col-xs-12 title-info">
                    Today's Sales
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 number-info">
                    <i class="fa fa-arrow-up text-green"></i> 201 MYR
                </div>
            </div>
        </div>

        <div class="col-sm-3 info-details">
            <div class="row">
                <div class="col-xs-12 title-info">
                    Yesterday's Sales
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 number-info">
                    <i class="fa fa-arrow-down text-down"></i> 200 MYR
                </div>
            </div>
        </div>

        <div class="col-sm-3 info-details">
            <div class="row">
                <div class="col-xs-12 title-info">
                    Cumulative Revenue
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 number-info">
                    200 MYR
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<div class="container-margin" role="main">
        <div class="col-md-3">
            <div class="list-group in-menu">
                <a href="#" class="list-group-item">
                    <i class="fa fa-fw fa-eye"></i> Overview
                </a>
                <a href="#" class="list-group-item active"><i class="fa fa-fw fa-shopping-cart"></i> Orders</a>
                <a href="#" class="list-group-item"><i class="fa fa-fw fa-reorder"></i> Products & Stocks</a>
                <a href="#" class="list-group-item"><i class="fa fa-fw fa-briefcase"></i> Invoices</a>
                <a href="#" class="list-group-item"><i class="fa fa-fw fa-truck"></i> Deliveries</a>
                <a href="#" class="list-group-item"><i class="fa fa-fw fa-line-chart"></i> Reports</a>
                <a href="#" class="list-group-item"><i class="fa fa-fw fa-cog"></i> Settings</a>
            </div>
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
