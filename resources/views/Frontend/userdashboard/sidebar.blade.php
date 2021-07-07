<ul>
    <li class="{{ Route::currentRouteNamed('user.dashboard') ? 'active' : '' }}"><a href="{{route('user.dashboard')}}">Dashboard</a></li>
    <li class="{{ Route::currentRouteNamed('user.order') ? 'active' : '' }}"><a href="{{route('user.order')}}">Orders</a></li>
    <li class="{{ Route::currentRouteNamed('user.address') ? 'active' : '' }}"><a href="{{route('user.address')}}">Addresses</a></li>
    <li class="{{ Route::currentRouteNamed('user.accountdetails') ? 'active' : '' }}"><a href="{{route('user.accountdetails')}}">Account Details</a></li>
    <li><a href="">Logout</a></li>
</ul>
