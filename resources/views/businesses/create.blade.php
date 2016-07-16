@extends('layouts.base')

@section('content')
@include('partials.flashmessage')

<div class="panel panel-default">
    <div class="panel-heading">
        Register Business
    </div>
    <div class="panel-body">
        <form class="form-horizontal" method="POST" action="/business">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="businessname" class="col-sm-3 control-label">Business Name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="businessname" name="business_name" value="{{ old('business_name') }}" placeholder="Your Business Name">
                </div>
            </div>
            <div class="form-group">
                <label for="businessdescription" class="col-sm-3 control-label">Business Description</label>
                <div class="col-sm-8">
                    <textarea class="form-control" name="business_description" placeholder="Your Business Description">{{ old('business_description') }}</textarea>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <label for="businessaddress" class="col-sm-3 control-label">Address</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="businessaddress" value="{{ old('first_line') }}" name="first_line" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-8 col-sm-offset-3">
                    <input type="text" class="form-control" id="businessaddress" value="{{ old('second_line') }}" name="second_line" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="businesspostalcode" class="col-sm-3 control-label">Postal Code</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="businesspostalcode" value="{{ old('postal_code') }}" name="postal_code" placeholder="">
                </div>
                <label for="businesscity" class="col-sm-2 control-label">City</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="businesscity"  value="{{ old('city') }}"name="city" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="businessstate" class="col-sm-3 control-label">State</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="businessstate"  value="{{ old('state') }}"name="state" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="businesscountry" class="col-sm-3 control-label">Country</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="businesscountry"  value="{{ old('country') }}" name="country" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6 col-sm-offset-5">
                    <button type="submit" class="btn btn-sm btn-primary pull-right">Register</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
