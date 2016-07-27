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
            return Datatables::eloquent(Business::findByUniqueId($businessId)->orders()->where('confirmed', false))
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
            return Datatables::eloquent(Business::findByUniqueId($businessId)->products())
                ->addColumn('checkboxes', function ($product) {
                    return '<input type="checkbox" value="'.$product->unique_id.'">';
                })
                ->addColumn('action', function ($product) use ($businessId) {
                    $csrf = csrf_field();
                    return '<form action="/business/'.$businessId.'/products/'.$product->unique_id.'" class="pull-right" method="POST">'.$csrf.'<input type="hidden" name="_method" value="DELETE" /><button type="button" class="btn btn-delete btn-xs btn-danger" style="margin-left: 5px;">Delete</button></form> <a href="/business/'.$businessId.'/products/'.$product->unique_id.'" class="btn btn-xs btn-default pull-right">Details</a>';
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
            return Datatables::eloquent(Business::findByUniqueId($businessId)->invoices())
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
