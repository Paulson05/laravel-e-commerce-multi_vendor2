<div class="cart-area">
    <div class="cart--btn"><i class="icofont-cart"></i> <span class="cart_quantity">2</span></div>

    <!-- Cart Dropdown Content -->
    <div class="cart-dropdown-content">
        <ul class="cart-list">
            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->content() as $item)
            <li>
                <div class="cart-item-desc">
                    <a href="#" class="image">
                        <img src="{{$item->photo}}" class="cart-thumb" alt="">
                    </a>
                    <div>
                        <a href="#">{{$item->title}}</a>
                        <p>1 x - <span class="price">${{$item->price}}</span></p>
                    </div>
                </div>
                <span class="dropdown-product-remove cart_delete" data-id="{{$item->rowId}}"><i class="icofont-bin"></i></span>
            </li>
            @endforeach
        </ul>
        <div class="cart-pricing my-4">
            <ul>
                <li>
                    <span>Sub Total:</span>
                    <span>${{(Cart::subtotal())}}</span>
                </li>

                <li>
                    <span>Total:</span>
                    <span>${{(Cart::subtotal())}}</span>
                </li>
            </ul>
        </div>
        <div class="cart-box">
            <a href="checkout-1.html" class="btn btn-primary d-block">Checkout</a>
        </div>
    </div>
</div>

<div class="account-area">
    <div class="user-thumbnail">
        <img src="img/bg-img/user.jpg" alt="">
    </div>
    <ul class="user-meta-dropdown">
        <li><a href="{{route('user.auth')}}"><i class="icofont-logout"></i>Register/Login</a></li>
    </ul>
</div>
