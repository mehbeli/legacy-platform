<!-- Details Modal -->
    <div class="modal fade" id="details-modal" tabindex="-1" role="dialog" aria-labelledby="details-modal">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Product Details</h4>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success add-to-cart-details">Add to Cart</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Cart Modal -->
    <div class="modal fade" id="checkout-modal" tabindex="-1" role="dialog" aria-labelledby="checkout-modal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Checkout</h4>
                </div>
                <div class="modal-body">
                    Hmm.. looks like got problem
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success btn-proceed"><i class="fa fa-check"></i> Confirm & Proceed</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="cart-modal" tabindex="-1" role="dialog" aria-labelledby="cart-modal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Check Out</h4>
                </div>
                <table class="table selected-product">
                    <thead>
                        <tr>
                            <th style="width: 20px;"></th>
                            <th>Product</th>
                            <th style="width: 100px;">Price</th>
                            <th style="width: 50px;">Quantity</th>
                            <th style="width: 150px;">Nett Total</th>
                        </tr>
                    </thead>
                    <tbody class="product-in-cart">

                    </tbody>
                </table>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success btn-checkout"><i class="fa fa-check"></i> Checkout</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>