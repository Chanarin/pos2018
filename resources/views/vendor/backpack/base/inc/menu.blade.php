<div class="navbar-custom-menu pull-left">
    <ul class="nav navbar-nav">
        <!-- =================================================== -->
        <!-- ========== Top menu items (ordered left) ========== -->
        <!-- =================================================== -->

    <!-- <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> <span>Home</span></a></li> -->

        <!-- ========== End of top menu left items ========== -->

    </ul>
</div>


<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">

        <li class=" hidden-xs hidden-sm">
            <a href="{{ url('/admin/sale') }}">
                <i class="fa fa-th-large"> {{_t('POS')}}</i>

            </a>
        </li>
        <li class=" hidden-xs hidden-sm">
            <a href="{{ url('/admin/customers') }}">
                <i class="fa  fa-user"> {{_t('Customer')}}</i>

            </a>
        </li>
        <li class=" hidden-xs hidden-sm">
            <a href="{{ url('/admin/openitem') }}">
                <i class="fa fa-book"> {{_t('Open Item')}}</i>

            </a>
        </li>

        <li class=" hidden-xs hidden-sm">
            <a href="{{ url('/admin/purchase') }}" >
                <i class="fa fa-cart-arrow-down"> {{_t('Purchase')}}</i>

            </a>
        </li>

        <li class=" hidden-xs hidden-sm">
            <a href="{{ url('/admin/production') }}" >
                <i class="fa fa-gavel"> {{_t('Production')}}</i>

            </a>
        </li>

        <li class=" hidden-xs hidden-sm">
            <a href="{{ url('/admin/print-invoice') }}">
                <i class="fa fa-check-square"> {{_t('Checklist')}}</i>

            </a>
        </li>

        <li class=" hidden-xs hidden-sm">
            <a href="{{url('/admin/register')}}">
                <i class="fa fa-th-large"> {{_t('Register')}}</i>

            </a>
        </li>
        <!-- ========================================================= -->
        <!-- ========== Top menu right items (ordered left) ========== -->
        <!-- ========================================================= -->


    <!-- <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> <span>Home</span></a></li> -->

        @if (Auth::guest())
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/login') }}">{{_t('login')}}</a></li>
            @if (config('backpack.base.registration_open'))
                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/register') }}">{{_t('register')}}</a></li>
            @endif
        @else
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}"><i class="fa fa-btn fa-sign-out"></i> {{_t('logout')}}</a></li>
    @endif

    <!-- ========== End of top menu right items ========== -->
    </ul>
</div>
