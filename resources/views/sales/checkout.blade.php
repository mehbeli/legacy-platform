<div class="row">
    <div class="col-md-5" style="border-right: 1px solid #E0E0E0;">
        <h5><b>Cart Review</b></h5>
        <table class="table table-condensed product-list-selected" style="width: 100%;">
            <tbody>
                <tr>
                    <td>
                        Itik Ayam (2 units)
                    </td>
                    <td style="text-align: right">
                        RM123
                    </td>
                </tr>
                <tr>
                    <td>
                        Itik Ayam (2 units)
                    </td>
                    <td style="text-align: right">
                        RM123
                    </td>
                </tr>
                <tr>
                    <td>
                        Itik Ayam (2 units)
                    </td>
                    <td style="text-align: right">
                        RM123
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-summary">
            <tbody>
                <tr>
                    <td style="font-weight: bold; text-align: right">
                        Subtotal
                    </td>
                    <td style="text-align: right">
                        RM123
                    </td>
                </tr>
                <tr>
                    <td style="font-weight: bold; text-align: right">
                        Delivery Charge
                    </td>
                    <td style="text-align: right">
                        RM123
                    </td>
                </tr>
                <tr>
                    <td style="font-weight: bold; text-align: right">
                        Grand Total
                    </td>
                    <td style="text-align: right">
                        RM123
                    </td>
                </tr>
            </tbody>

        </table>
        <hr>
    </div>
    <div class="col-md-7">

        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#billing" aria-expanded="true" aria-controls="billing">
                            <b>Billing Address</b>
                        </a>
                        <i class="fa fa-check text-success pull-right"></i>
                    </h4>
                </div>
                <div id="billing" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="billing_name">Name</label>
                                    <input type="text" name="billing_name" class="form-control input-sm" id="billing_name" placeholder="Name">
                                </div>

                                <div class="form-group">
                                    <label for="billing_email_address">Email Address</label>
                                    <input type="text" name="billing_email_address" class="form-control input-sm" id="billing_email_address" placeholder="Email Address">
                                </div>

                                <div class="form-group">
                                    <label for="billing_phone">Phone Number</label>
                                    <input type="text" name="billing_phone" class="form-control input-sm" id="billing_phone" placeholder="Phone Number">
                                </div>

                                <div class="form-group">
                                    <label for="billing_address_one">Address</label>
                                    <input type="text" name="billing_address_one" class="form-control input-sm" id="billing_address_one" placeholder="">
                                    <input type="text" name="billing_address_two" class="form-control input-sm" style="margin-top: 7px;" id="billing_address_two" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Post Code</label>
                                    <input type="text" name="billing_post_code" class="form-control input-sm" placeholder="Post Code" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" name="billing_city" class="form-control input-sm" placeholder="City" required="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" name="billing_state" class="form-control input-sm" placeholder="State" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" name="billing_country" class="form-control input-sm" placeholder="Country" value="Malaysia" readonly="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#delivery" aria-expanded="false" aria-controls="delivery">
                            <b>Delivery Address</b>
                        </a>
                        <i class="fa fa-exclamation-circle text-danger pull-right"></i>
                    </h4>
                </div>
                <div id="delivery" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="same_as_billing"> Same as billing
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="delivery_name">Name</label>
                                    <input type="text" name="delivery_name" class="form-control input-sm" id="delivery_name" placeholder="Name">
                                </div>

                                <div class="form-group">
                                    <label for="delivery_phone">Phone Number</label>
                                    <input type="text" name="delivery_phone" class="form-control input-sm" id="billing_phone" placeholder="Phone Number">
                                </div>

                                <div class="form-group">
                                    <label for="delivery_address_one">Address</label>
                                    <input type="text" name="delivery_address_one" class="form-control input-sm" id="delivery_address_one" placeholder="">
                                    <input type="text" name="delivery_address_two" class="form-control input-sm" style="margin-top: 7px;" id="delivery_address_two" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Post Code</label>
                                    <input type="text" name="delivery_post_code" class="form-control input-sm" placeholder="Post Code" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" name="delivery_city" class="form-control input-sm" placeholder="City" required="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" name="delivery_state" class="form-control input-sm" placeholder="State" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" name="delivery_country" class="form-control input-sm" placeholder="Country" value="Malaysia" readonly="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#paymentDelivery" aria-expanded="false" aria-controls="paymentDelivery">
                            <b>Payment & Delivery</b>
                        </a>
                        <i class="fa fa-exclamation-circle text-danger pull-right"></i>
                    </h4>
                </div>
                <div id="paymentDelivery" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <h5><b>Payment Options</b></h5>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="payment" id="blankRadio1" value="fpx" aria-label="..."> FPX
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="payment" id="blankRadio1" value="internet" aria-label="..."> Cash Deposit / Internet Banking
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="payment" id="blankRadio1" value="cash" aria-label="..."> Cash
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h5><b>Delivery Options</b></h5>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="delivery" id="blankRadio1" value="courier" aria-label="..."> Courier (RM6)
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="delivery" id="blankRadio1" value="self-pickup" aria-label="..."> Self Pickup
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="delivery" id="blankRadio1" value="free" aria-label="..."> Free Shipping
                                        <div style="font-size: 10px;">Limited to Bandar Saujana Putra only</div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>