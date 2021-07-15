<header class="header_area">
    <!-- Top Header Area -->


    <!-- Main Menu -->
    <div class="bigshop-main-menu">
        <div class="container">
            <div class="classy-nav-container breakpoint-off">
                <nav class="classy-navbar" id="bigshopNav">

                    <!-- Nav Brand -->
                    <a href="{{route('homepage')}}" class="nav-brand"><img src="{{asset('img/core-img/logo.png')}}" alt="logo"></a>

                    <!-- Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Close -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav -->
                        @include('Frontend.template.partials.navbar')
                    </div>

                    <!-- Hero Meta -->
                    <div class="hero_meta_area ml-auto d-flex align-items-center justify-content-end">
                        <!-- Search -->
                        <div class="search-area">
                            <div class="search-btn"><i class="icofont-search"></i></div>
                            <!-- Form -->
                            <form method="GET" action="{{route('search')}}">
                            <div class="search-form d-flex">
                                <input type="search" id="search_text" class="form-control" placeholder="Search Products">
                                <button type="submit" class="btn btn-success m-2 text-sm-center" value="Send" >Search</button>
                            </div>
                            </form>
                        </div>

                        <!-- Wishlist -->
                        <div class="wishlist-area">
                            <a href="{{route('whishlist')}}" class="wishlist-btn"><i class="icofont-heart"></i></a>
                        </div>

                        <!-- Cart -->

                    @include('Frontend.cart.cart')
                    <!-- Account -->

                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
