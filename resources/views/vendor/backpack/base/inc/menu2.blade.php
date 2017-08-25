<div class="navbar-custom-menu pull-left">
    <ul class="nav navbar-nav" style="padding-top: 8px;">
        <li class="name_date hidden-xs hidden-sm">
            <span>FROM :</span>
        </li>
        <li style="padding-right: 10px;">
            <span>
                <div class="input-group date date-button">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="from-date">
                </div>
            </span>
        </li>
        <li  class="name_date">
            <span>TO :</span>
        </li>
        <li style="padding-right: 10px;">
            <span>
                <div class="input-group date date-button">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="to-date">
                </div>
            </span>
        </li>
    </ul>
</div>
<style>
    .navbar {
        position: static !important;
    }
    .date-button{
        max-width: 200px !important;
    }
    @media only screen and (max-width: 800px) {
        .date-button{
            max-width: 150px !important;
        }
    }
    @media only screen and (max-width: 670px) {
        .date-button{
            max-width: 135px !important;
        }
    }
    @media only screen and (max-width: 570px) {
        .date-button{
            max-width: 108px !important;
        }
    }
    .name_date{
        padding-right: 10px; color: white; padding-top: 7px;
    }
</style>

<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
        <li class="dropdown hidden-xs hidden-sm">
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
            <li class="hidden-xs hidden-sm"><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/login') }}">{{ trans('backpack::base.login') }}</a></li>
            @if (config('backpack.base.registration_open'))
                <li class="hidden-xs hidden-sm"><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/register') }}">{{ trans('backpack::base.register') }}</a></li>
            @endif
        @else
            <li  class="hidden-xs hidden-sm"><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}"><i class="fa fa-btn fa-sign-out"></i> {{ trans('backpack::base.logout') }}</a></li>
    @endif

    <!-- ========== End of top menu right items ========== -->
    </ul>
</div>
