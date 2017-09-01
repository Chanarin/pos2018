
<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
    <!-- <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> <span>Home</span></a></li> -->

        @if (Auth::guest())
            <li class="hidden-xs hidden-sm"><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/login') }}">{{_t('login')}}</a></li>
            @if (config('backpack.base.registration_open'))
                <li class="hidden-xs hidden-sm"><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/register') }}">{{_t('register')}}</a></li>
            @endif
        @else
            <li  class="hidden-xs hidden-sm"><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}"><i class="fa fa-btn fa-sign-out"></i> {{_t('logout')}}</a></li>
    @endif

    <!-- ========== End of top menu right items ========== -->
    </ul>
</div>
