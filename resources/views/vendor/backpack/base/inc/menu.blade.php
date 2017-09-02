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
                <i class="fa fa-fw fa-desktop"></i> <span>{{_t('POS')}}</span>

            </a>
        </li>
        <li class=" hidden-xs hidden-sm">
            <a href="{{ url('/admin/customers') }}">
                <i class="fa  fa-user"></i> <span>{{_t('Customer')}}</span>
            </a>
        </li>

        <li class=" hidden-xs hidden-sm">
            <a href="{{ url('/admin/openitem') }}">
                <i class="fa fa-book"></i> <span>{{_t('Open Item')}}</span>
            </a>
        </li>

        <li class=" hidden-xs hidden-sm">
            <a href="{{ url('/admin/purchase') }}" >
                <i class="fa fa-cart-arrow-down"></i> <span>{{_t('Purchase')}}</span>

            </a>
        </li>

        <li class=" hidden-xs hidden-sm">
            <a href="{{ url('/admin/production') }}" >
                <i class="fa fa-gavel"></i> <span>{{_t('Production')}}</span>
            </a>
        </li>
        <li class=" hidden-xs hidden-sm">
            <a href="{{ url('/admin/checklist') }}">
                <i class="fa fa-check-square"></i> <span>{{_t('Checklist')}}</span>
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
