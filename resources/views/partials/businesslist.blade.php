<li class="dropdown border-left-solid">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Business List <i class="menu-drop fa fa-angle-down"></i></a>
    <ul class="dropdown-menu dropdown-width-change dropdown-menu-sell-list">
        @forelse (Auth::user()->business()->get() as $business)
        <li>
            <a href="{{ url('/business/'.$business->unique_id) }}">
                <div class="row">
                    <div class="col-xs-7">
                        <span class="business-name">{{ $business->business_name }}</span>
                    </div>
                    <div class="col-xs-5" style="text-align: right;">
                        <span class="label label-success">Agent</span>
                    </div>
                </div>
                <div class="row quick-info">
                    <div class="col-xs-12">
                        Pending Order(s): {{ $business->orders()->where('confirmed', false)->count() }}
                    </div>
                </div>
            </a>
        </li>
        @empty
        <li>
            <a href="/business/create" class="nobusiness">
                <h5>Whoops!</h5> No business yet?<br>
                Click here to register and start selling!
            </a>
        </li>
        @endforelse
        @if (Auth::user()->business())
        {{-- later implement limit according to plans --}}
        <li>
            <a href="/business/create" class="nobusiness">
                <i class="fa fa-plus fa-fw"></i> Add more business!
            </a>
        </li>
        @endif
    </ul>
</li>
