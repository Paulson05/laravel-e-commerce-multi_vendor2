<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkoutBilling()
    {
        return view('Frontend.checkout.checkoutbilling');
    }
    public  function checkoutShipping(){
        return view('Frontend.checkout.checkoutshipping');
    }
    public function checkoutPayment(){
        return view('Frontend.checkout.checkoutpayment');
    }
    public function checkoutReview(){
        return view('Frontend.checkout.checkoutreview');
    }

    public function checkoutComplete(){
        return view('Frontend.checkout.checkoutcomplete');
    }
}
