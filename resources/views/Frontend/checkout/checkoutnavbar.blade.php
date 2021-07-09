<div class="checkout_steps_area">
    <a class="{{ Route::currentRouteNamed('checkoutbilling') ? 'active' : '' }}" href="{{route('checkoutbilling')}}"><i class="icofont-check-circled"></i> Billing</a>
    <a class="{{ Route::currentRouteNamed('checkoutshipping') ? 'active' : '' }}" href="{{route('checkoutshipping')}}"><i class="icofont-check-circled"></i> Shipping</a>
    <a class="{{ Route::currentRouteNamed('checkoutpayment') ? 'active' : '' }}" href="{{route('checkoutpayment')}}"><i class="icofont-check-circled"></i> Payment</a>
    <a class="{{ Route::currentRouteNamed('checkoutreview') ? 'active' : '' }}" href="{{route('checkoutreview')}}"><i ></i> Review</a>
</div>
