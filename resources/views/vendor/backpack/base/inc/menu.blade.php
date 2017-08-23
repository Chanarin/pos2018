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

        <li class=" hidden-xs hidden-sm" style="background-color: #108042;">
            <a href="{{ url('/admin/sale') }}">
                <i class="fa fa-th-large"> POS</i>

            </a>
        </li>
        <li class=" hidden-xs hidden-sm" style="background-color: #328005;">
            <a href="{{ url('/admin/customers') }}">
                <i class="fa  fa-user"> Customer</i>

            </a>
        </li>

        <li class=" hidden-xs hidden-sm" style="background-color: #328005;">
            <a href="{{ url('/admin/purchase') }}" >
                <i class="fa fa-cart-arrow-down"> Purchase</i>

            </a>
        </li>
        <li class=" hidden-xs hidden-sm" style="background-color: #328005;">
            <a href="{{ url('/admin/open-items') }}">
                <i class="fa fa-book"> Open Item</i>

            </a>
        </li>

        <li class=" hidden-xs hidden-sm" style="background-color: #13803a;">
            <a href="{{ url('/admin/print-invoice') }}">
                <i class="fa fa-check-square"> Checklist</i>

            </a>
        </li>

        <li class=" hidden-xs hidden-sm" style="background-color: #14806c;">
            <a href="{{url('/admin/register')}}">
                <i class="fa fa-th-large"> Register</i>

            </a>
        </li>
        <!-- ========================================================= -->
        <!-- ========== Top menu right items (ordered left) ========== -->
        <!-- ========================================================= -->
        <li class="dropdown hidden-xs " style="background-color: #137d80;">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-language"> English</i>
            </a>
            <ul class="dropdown-menu" style=" height: 50px; !important;">
                <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu" style="    width: 100%; height: 40px !important;">
                        <li><!-- start message -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-th-large"> ខ្មែរ</i>
                            </a>
                        </li>
                        <!-- end message -->
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-th-large">​ English</i>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    <!-- <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> <span>Home</span></a></li> -->

        @if (Auth::guest())
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/login') }}">{{ trans('backpack::base.login') }}</a></li>
            @if (config('backpack.base.registration_open'))
                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/register') }}">{{ trans('backpack::base.register') }}</a></li>
            @endif
        @else
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}"><i class="fa fa-btn fa-sign-out"></i> {{ trans('backpack::base.logout') }}</a></li>
    @endif

    <!-- ========== End of top menu right items ========== -->
    </ul>
</div>
