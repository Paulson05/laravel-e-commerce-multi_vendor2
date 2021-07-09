@extends('Frontend.template.default')
@section('title', '| checkoutreview')

@section('content')
    @include('Frontend.checkout.checkoutnavbar')
    <div class="checkout_area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="checkout_details_area clearfix">
                        <h5 class="mb-30">Review Your Order</h5>

                        <div class="cart-table">
                            <div class="table-responsive">
                                <table class="table table-bordered mb-30">
                                    <thead>
                                    <tr>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Unit Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">
                                            <a href="#" class="btn btn-primary"><i class="icofont-ui-edit"></i></a>
                                        </th>
                                        <td>
                                            <img src="img/product-img/onsale-1.png" alt="Product">
                                        </td>
                                        <td>
                                            <a href="#">Bluetooth Speaker</a>
                                        </td>
                                        <td>$9</td>
                                        <td>
                                            <div class="quantity">
                                                <input type="number" class="qty-text" id="qty2" step="1" min="1" max="99" name="quantity" value="1">
                                            </div>
                                        </td>
                                        <td>$9</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <a href="#" class="btn btn-primary"><i class="icofont-ui-edit"></i></a>
                                        </th>
                                        <td>
                                            <img src="img/product-img/onsale-2.png" alt="Product">
                                        </td>
                                        <td>
                                            <a href="#">Roof Lamp</a>
                                        </td>
                                        <td>$11</td>
                                        <td>
                                            <div class="quantity">
                                                <input type="number" class="qty-text" id="qty3" step="1" min="1" max="99" name="quantity" value="1">
                                            </div>
                                        </td>
                                        <td>$11</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <a href="#" class="btn btn-primary"><i class="icofont-ui-edit"></i></a>
                                        </th>
                                        <td>
                                            <img src="img/product-img/onsale-6.png" alt="Product">
                                        </td>
                                        <td>
                                            <a href="#">Cotton T-shirt</a>
                                        </td>
                                        <td>$6</td>
                                        <td>
                                            <div class="quantity">
                                                <input type="number" class="qty-text" id="qty4" step="1" min="1" max="99" name="quantity" value="1">
                                            </div>
                                        </td>
                                        <td>$6</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <a href="#" class="btn btn-primary"><i class="icofont-ui-edit"></i></a>
                                        </th>
                                        <td>
                                            <img src="img/product-img/onsale-4.png" alt="Product">
                                        </td>
                                        <td>
                                            <a href="#">Water Bottle</a>
                                        </td>
                                        <td>$17</td>
                                        <td>
                                            <div class="quantity">
                                                <input type="number" class="qty-text" id="qty5" step="1" min="1" max="99" name="quantity" value="1">
                                            </div>
                                        </td>
                                        <td>$17</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <a href="#" class="btn btn-primary"><i class="icofont-ui-edit"></i></a>
                                        </th>
                                        <td>
                                            <img src="img/product-img/onsale-5.png" alt="Product">
                                        </td>
                                        <td>
                                            <a href="#">Alka Sliper</a>
                                        </td>
                                        <td>$13</td>
                                        <td>
                                            <div class="quantity">
                                                <input type="number" class="qty-text" id="qty6" step="1" min="1" max="99" name="quantity" value="1">
                                            </div>
                                        </td>
                                        <td>$13</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-7 ml-auto">
                    <div class="cart-total-area">
                        <h5 class="mb-3">Cart Totals</h5>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <tbody>
                                <tr>
                                    <td>Sub Total</td>
                                    <td>$56.00</td>
                                </tr>
                                <tr>
                                    <td>Shipping</td>
                                    <td>$10.00</td>
                                </tr>
                                <tr>
                                    <td>VAT (10%)</td>
                                    <td>$5.60</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>$71.60</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="checkout_pagination d-flex justify-content-end mt-3">
                            <a href="checkout-4.html" class="btn btn-primary mt-2 ml-2 d-none d-sm-inline-block">Go Back</a>
                            <a href="checkout-complate.html" class="btn btn-primary mt-2 ml-2">Confirm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
