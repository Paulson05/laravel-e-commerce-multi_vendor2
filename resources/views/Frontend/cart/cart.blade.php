<div class="cart-area">
    <div class="cart--btn"><i class="icofont-cart"></i> <span class="cart_quantity">2</span></div>

    <!-- Cart Dropdown Content -->
    <div class="cart-dropdown-content">
        <ul class="cart-list">
            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->content() as $item)
            <li>
                <div class="cart-item-desc">
                    <a href="#" class="image">
                        <img src="{{$item->photo}}" class="cart-thumb" alt="johu">

                    </a>
                    <div>
                        <a href="#"></a>
                        <p> <span class="price">${{$item->price}}</span></p>
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
            <button class="btn btn-success"><a href="{{route('cart.dashboard')}}">Cart</a></button>
            <button class="btn btn-primary"><a href="{{route('checkoutbilling')}}">Checkout</a></button>


        </div>
    </div>
</div>

<div class="account-area">
    <div class="user-thumbnail">
        <img src="img/bg-img/user.jpg" alt="">
    </div>
    <ul class="user-meta-dropdown">
        <li><a href="{{route('user.auth')}}"><i class="icofont-ui-user"></i>Register/Login</a></li>
        <li><a href="{{route('user.dashboard')}}"><i class="icofont-ui-social-link"></i>My Account</a></li>
        <li><a href="{{route('user.order')}}"><i class="icofont-ui-cart"></i>Order List</a></li>
        <li><a href=""><i class="icofont-ui-contact-list"></i> Whishlist List</a></li>
    </ul>
</div>
