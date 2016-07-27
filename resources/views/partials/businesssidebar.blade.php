<a href="{{ url('/business/'.$business->unique_id.'/open-orders') }}" class="btn btn-success btn-block btn-open-order">Open Order</a>
<div class="list-group in-menu">
    <a href="{{ url('/business/'.$business->unique_id) }}" class="list-group-item {{ Ekko::isActiveRoute('business.*') }}">
        <i class="fa fa-fw fa-eye"></i> Overview
    </a>
    <a href="{{ url('/business/'.$business->unique_id.'/products') }}" class="list-group-item {{ Ekko::isActiveRoute('business.products.*') }}"><i class="fa fa-fw fa-reorder"></i> Products & Stocks</a>
    <a href="{{ url('/business/'.$business->unique_id.'/orders') }}" class="list-group-item {{ Ekko::isActiveRoute('business.orders.*') }}"><i class="fa fa-fw fa-shopping-cart"></i> Orders</a>
    <a href="{{ url('/business/'.$business->unique_id.'/invoices') }}" class="list-group-item {{ Ekko::isActiveRoute('business.invoices.*') }}"><i class="fa fa-fw fa-briefcase"></i> Invoices</a>
    {{-- <a href="#" class="list-group-item"><i class="fa fa-fw fa-truck"></i> Deliveries</a>
    <a href="#" class="list-group-item"><i class="fa fa-fw fa-line-chart"></i> Reports</a>
    <a href="#" class="list-group-item"><i class="fa fa-fw fa-cog"></i> Settings</a> --}}
</div>
