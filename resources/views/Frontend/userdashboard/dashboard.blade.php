@extends('Frontend.template.default')
@section('content')
    <section class="my-account-area section_padding_100_50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="my-account-navigation mb-50">
                        @include('Frontend.userdashboard.sidebar')
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="my-account-content mb-50">
                        <p>Hello <strong>Lim Sarah</strong> (not <strong>Lim Sarah</strong>? <a href="login.html">Log out</a>)</p>
                        <p>From your account dashboard you can view your recent orders, manage your shipping and billing addresses, and <a href="account-details.html">edit your password and account details</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
