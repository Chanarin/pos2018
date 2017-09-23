<div class="navbar-custom-menu pull-left">
    <ul class="nav navbar-nav">
        <!-- =================================================== -->
        <!-- ========== Top menu items (ordered left) ========== -->
        <!-- =================================================== -->
         <li>
             <a href="{{ url('/admin/dashboard') }}"  style="font-size: 20px;">
                 <i class="fa fa-home"></i></a>
         </li>
        <li>
            <a href="{{url('/lang/km')}}">
                <i><img src="{{asset('/pos/img/km.svg')}}" width="30" height="17"></i>
            </a>
        </li>
        <li>
            <a href="{{url('/lang/en')}}">
                <i>​<img src="{{asset('/pos/img/en.svg')}}" width="30" height="17"></i>
            </a>
        </li>
        <!-- ========== End of top menu left items ========== -->
    </ul>
</div>
<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">

        {{--<li class=" hidden-xs hidden-sm" style="background-color: #4a8009;">--}}
            {{--<a href="{{ url('/admin/dashboard') }}">--}}
                {{--<i class="fa fa-dashboard"> Dashboard</i>--}}

            {{--</a>--}}
        {{--</li>--}}
        <li class=" hidden-xs hidden-sm">
            <a href="{{ url('/admin/customer') }}" >
                <i class="fa  fa-user"></i> <span>{{_t('Customer')}}</span>

            </a>
        </li>
        <li class=" hidden-xs hidden-sm">
            <a href="{{ url('/admin/purchase') }}">
                <i class="fa fa-cart-arrow-down"></i> <span>{{_t('Purchase')}}</span>

            </a>
        </li>
        {{--<li class=" hidden-xs hidden-sm">--}}
            {{--<a href="#" >--}}
                {{--<i class="fa fa-th-large"></i> <span>{{_t('Profit')}}</span>--}}

            {{--</a>--}}
        {{--</li>--}}
        {{--<li class=" hidden-xs hidden-sm">--}}
            {{--<a href="#" >--}}
                {{--<i class="fa fa-print"></i> <span>{{_t('List Sale')}}</span>--}}

            {{--</a>--}}
        {{--</li>--}}
        <li class=" hidden-xs hidden-sm">
            <a href="{{url('admin/view-report')}}" >
                <i class="fa fa-th-large"></i> <span>{{_t('Today Sale')}}</span>

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
