<div class="modal-full-wrapper wrapper-close">
    <div class="cart-modal eve-close-modal">
        <div class="cart-modal-title">
            <a href="{{route('cart.index')}}">Yourcart</a>
            <a href="{{route('whishlist')}}">whishlist</a>
            <div class="cart-modal-icon">
                <img src="assets/images/back-right.svg" alt="appifylab">
            </div>
        </div>

        <div class="cart-order-inner">
            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->content() as $item)
                <div class="cart-order-item">
                    <div class="cart-order-item-top">
                        <figure>
                            <img src="{{$item->photo}}" alt="appifylab">
                        </figure>
                        <a ><i class="fa fa-trash btn btn-danger text-left cart_delete" data-id="{{$item->rowId}}"></i></a >
                        <div class="cart-order-title">
                            <p>{{$item->title}}</p>
                        </div>
                    </div>
                    <div class="cart-order-item-bottom">

                        <ul>
                            <li>${{$item->price}}</li>
                            <li class="qu-op-2">
                                <button class="qu-btn inc">+</button>
                                <input type="text" class="qu-input" value="{{$item->stock}}">
                                <button class="qu-btn dec">-</button>


                            </li>
                            <li>{{$item->offer_price}}</li>
                        </ul>
                    </div>
                    <div class="card-order-save">
                        <p>You saved <span>$ {{$item->discount}}</span> on this item</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="cart-price-option">
            <div class="cart-price-sub fs">
                <h4>Subtotal</h4>
                <p>${{(Cart::subtotal())}}</p>
            </div>
            <div class="cart-price-sub fs">
                <h4>total</h4>
                <p>${{(Cart::subtotal())}}</p>
            </div>
        </div>
        <div class="cart-pop-coupon">
            <p>Coupon can be applied during checkout.</p>

            <div >
                <a href="{{route('cart.index')}}" class="btn btn-primary">Cart</a>
                <a  href="{{route('checkout')}}" class="btn btn-success" >Check Out</a>
            </div>

        </div>
    </div>
</div>
