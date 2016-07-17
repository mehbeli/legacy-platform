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

    public function getPendingOrder($businessId) {
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

}
