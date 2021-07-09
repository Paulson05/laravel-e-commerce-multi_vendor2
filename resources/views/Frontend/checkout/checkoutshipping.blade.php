@extends('Frontend.template.default')
@section('title', '| checkoutshipping')

@section('content')
    @include('Frontend.checkout.checkoutnavbar')
    <div class="checkout_area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="checkout_details_area clearfix">
                        <h5 class="mb-4">Shipping Method</h5>

                        <div class="shipping_method">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">Method</th>
                                        <th scope="col">Delivery Time</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Choose</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($shipping as $item)
                                    <tr>
                                        <th scope="row"> {{$item->shipping_address}}</th>
                                        <td>{{$item->delivery_time}}</td>
                                        <td>${{$item->delivery_charge}}</td>
                                        <td>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio1"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="checkout_pagination mt-3 d-flex justify-content-end clearfix">
                        <a href="{{route('checkoutbilling')}}" class="btn btn-primary mt-2 ml-2">Go Back</a>
                        <a href="checkout-4.html" class="btn btn-primary mt-2 ml-2">Continue</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
