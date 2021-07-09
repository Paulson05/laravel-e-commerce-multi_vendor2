@extends('Frontend.template.default')
@section('title', '| checkoutpayment')

@section('content')
    @include('Frontend.checkout.checkoutnavbar')
    <div class="checkout_area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="checkout_details_area clearfix">
                        <div class="payment_method">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <!-- Single Payment Method -->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="one">
                                        <h6 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_one" aria-expanded="false" aria-controls="collapse_one"><i class="icofont-mastercard-alt"></i> Pay with Credit Card</a>
                                        </h6>
                                    </div>
                                    <div aria-expanded="false" id="collapse_one" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="one">
                                        <div class="panel-body">
                                            <div class="pay_with_creadit_card">
                                                <form action="#" method="post">
                                                    <div class="row">
                                                        <div class="col-12 mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                <label class="custom-control-label" for="customCheck1">Credit or Debit Card</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6 mb-3">
                                                            <label for="cardNumber">Card Number</label>
                                                            <input type="text" class="form-control" id="cardNumber" placeholder="" value="" required>
                                                            <small id="card_info_store" class="form-text text-muted"><i class="fa fa-lock" aria-hidden="true"></i> Your payment info is stored securely. <a href="#">Learn More</a></small>
                                                        </div>
                                                        <div class="col-12 col-md-3 mb-3">
                                                            <label for="expiration">Expiration</label>
                                                            <input type="text" class="form-control" id="expiration" placeholder="MM / YY" value="" required>
                                                        </div>
                                                        <div class="col-12 col-md-3 mb-3">
                                                            <label for="security_code">Security Code <a href="#" class="security_code_popover" data-container="body" data-toggle="popover" data-placement="top" data-content="" data-img="img/bg-img/cvc.jpg"> <i class="fa fa-question-circle" aria-hidden="true"></i></a></label>
                                                            <input type="text" class="form-control" id="security_code" placeholder="" value="" required>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Payment Method -->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="two">
                                        <h6 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_two" aria-expanded="false" aria-controls="collapse_two"><i class="icofont-paypal-alt"></i> Pay with PayPal</a>
                                        </h6>
                                    </div>
                                    <div aria-expanded="false" id="collapse_two" class="panel-collapse collapse" role="tabpanel" aria-labelledby="two">
                                        <div class="panel-body">
                                            <div class="pay_with_paypal">
                                                <form action="#" method="post">
                                                    <div class="row">
                                                        <div class="col-12 col-md-6 mb-3">
                                                            <label for="paypalemailaddress">Email Address</label>
                                                            <input type="email" class="form-control" id="paypalemailaddress" placeholder="" value="" required>
                                                            <small id="paypal_info" class="form-text text-muted"><i class="fa fa-lock" aria-hidden="true"></i> Secure online payments at the speed of want. <a href="#">Learn More</a></small>
                                                        </div>
                                                        <div class="col-12 col-md-6 mb-3">
                                                            <label for="paypalpassword">Password</label>
                                                            <input type="password" class="form-control" id="paypalpassword" value="" required>
                                                            <small id="paypal_password" class="form-text text-muted"><a href="#">Forget Password?</a></small>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Payment Method -->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="three">
                                        <h6 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_three" aria-expanded="false" aria-controls="collapse_three"><i class="icofont-bank-transfer-alt"></i> Direct Bank Transfer</a>
                                        </h6>
                                    </div>
                                    <div aria-expanded="false" id="collapse_three" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="three">
                                        <div class="panel-body">
                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Payment Method -->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="four">
                                        <h6 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_four" aria-expanded="false" aria-controls="collapse_four"><i class="icofont-file-document"></i> Cheque Payment
                                            </a>
                                        </h6>
                                    </div>
                                    <div aria-expanded="false" id="collapse_four" class="panel-collapse collapse" role="tabpanel" aria-labelledby="four">
                                        <div class="panel-body">
                                            <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Payment Method -->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="five">
                                        <h6 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_five" aria-expanded="false" aria-controls="collapse_five"><i class="icofont-cash-on-delivery-alt"></i> Cash on Delivery
                                            </a>
                                        </h6>
                                    </div>
                                    <div aria-expanded="false" id="collapse_five" class="panel-collapse collapse" role="tabpanel" aria-labelledby="five">
                                        <div class="panel-body">
                                            <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="checkout_pagination d-flex justify-content-end mt-30">
                        <a href="checkout-3.html" class="btn btn-primary mt-2 ml-2">Go Back</a>
                        <a href="checkout-5.html" class="btn btn-primary mt-2 ml-2">Final Step</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
