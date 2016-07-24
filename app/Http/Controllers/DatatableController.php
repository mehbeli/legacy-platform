<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Traits\BusinessTraits;
use Yajra\Datatables\Facades\Datatables;

use App\Business;

class DatatableController extends Controller
{
    use BusinessTraits;

    // Orders

    public function getOrders($businessId) {
        $isOwner = $this->checkBusinessBelongsToUser($businessId);
        if ($isOwner) {
            return Datatables::eloquent(Business::find($businessId)->orders()->where('confirmed', false))
                ->addColumn('checkboxes', function ($order) {
                    return '<input type="checkbox" class="form-control" value="{{$order->id}}">';
                })
                ->editColumn('buyer', function ($order) {
                    return '<a href="#" data-toggle="tooltip" data-placement="bottom" title="{{$order->buyer()->email}}">{{$order->buyer()->name}}</a>';
                })
                ->latest('created_at')
                ->make(true);
        } else {
            return [];
        }
    }

    // Products

    public function getProducts($businessId) {
        $isOwner = $this->checkBusinessBelongsToUser($businessId);
        if ($isOwner) {
            return Datatables::eloquent(Business::find($businessId)->products())
                ->addColumn('checkboxes', function ($product) {
                    return '<input type="checkbox" value="'.$product->id.'">';
                })
                ->addColumn('action', function ($product) use ($businessId) {
                    return '<a href="/business/'.$businessId.'/products/'.$product->id.'" class="btn btn-xs btn-default">Details</a> <button type="button" class="btn btn-xs btn-danger">Delete</button>';
                })
                ->setRowClass(function ($product) {
                    return ($product->quantity_in_stock <= 0) ? 'danger' : '';
                })
                ->latest('created_at')
                ->make(true);
        } else {
            return [];
        }
    }

    // Invoices

    public function getInvoices($businessId) {
        $isOwner = $this->checkBusinessBelongsToUser($businessId);
        if ($isOwner) {
            return Datatables::eloquent(Business::find($businessId)->invoices())
                ->addColumn('checkboxes', function ($product) {
                    return '<input type="checkbox" class="form-control" value="{{$order->id}}">';
                })
                ->editColumn('product_id', function ($product) {
                    return '#'.$product->id;
                })
                ->latest('created_at')
                ->make(true);
        } else {
            return [];
        }
    }

}
