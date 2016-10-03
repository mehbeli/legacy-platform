<div class="top-info">
    <div class="col-sm-3 info-details">
        <div class="row">
            <div class="col-xs-12 title-info">
                Pending Orders
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 number-info">
                {{ $business->orders()->where('status', 'pending')->count() }}
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
                Cumulative Revenue (year)
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 number-info">
                200 MYR
            </div>
        </div>
    </div>
</div>
