@if (Auth::check())
  @php
    $u_level = \App\Helpers\GH::getUserLevel();
  @endphp
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="https://placehold.it/160x160/00a65a/ffffff/&text={{ mb_substr(Auth::user()->name, 0, 1) }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>

              <a href="#"><i class="fa fa-circle text-success"></i>{{_t('Online')}}</a>

              <a href="{{url('/lang/km')}}">
                <i><img src="{{asset('/pos/img/km.svg')}}" width="40" height="25"></i>
              </a>

              <a href="{{url('/lang/en')}}">
                <i>​<img src="{{asset('/pos/img/en.svg')}}" width="40" height="25"></i>
              </a>

          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">{{_t('administration') }}</li>
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{_t('Dashboard')}}</span></a></li>

          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/sale') }}"><i class="fa fa-fw fa-desktop"></i> <span>{{_t('POS')}}</span></a></li>

          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/invoice') }}"><i class="fa fa-fw fa-file-excel-o"></i> <span>{{_t('Invoice')}}</span></a></li>

          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/customer') }}"><i class="fa  fa-user"></i> <span>{{_t('Customer')}}</span></a></li>

          @if($u_level != 1)
          <li class="treeview">
            <a href="#">
              <i class="fa fa-pie-chart"></i>
              <span>{{_t('Transaction')}}</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/openitem') }}"><i class="fa fa-fw fa-book"></i> <span>{{_t('Open Item')}}</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/production') }}"><i class="fa fa-fw fa-gavel"></i> <span>{{_t('Production')}}</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/purchase') }}"><i class="fa fa-fw fa-cart-arrow-down"></i> <span>{{_t('Purchase')}}</span></a></li>
            </ul>
          </li>
          @endif
          @if($u_level != 1)
          <li class="treeview">
            <a href="#">
              <i class="fa fa-diamond"></i>
              <span>{{_t('Product')}}</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                    </span>
            </a>
            <ul class="treeview-menu">

              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/itemcategory') }}">
                  <i class="fa fa-list"></i>
                  <span>{{_t('Product Category')}}</span>
                </a>
              </li>
              <li>
                <a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/item') }}">
                  <i class="fa fa-fw fa-diamond"></i>
                  <span>{{_t('Product')}}</span>
                </a>
              </li>

              @if($u_level!=2)
              <li>
                <a href="{{ url(config('backpack.base.route_prefix', 'admin').'/unit') }}">
                  <i class="fa fa-fw fa-book"></i>
                  <span>{{_t('Unit')}}</span>
                </a>
              </li>
              @endif
            </ul>
          </li>
          @endif


          @if($u_level != 1 && $u_level != 2)
            <li class="treeview">
              <a href="#">
                <i class="fa fa-bar-chart"></i>
                <span>{{_t('Table Report')}}</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
              </a>
              <ul class="treeview-menu">
                <li><a target="_blank" href="{{ url(config('backpack.base.route_prefix', 'admin') . '/view-report') }}"><i class="fa fa-fw fa-book"></i> <span>{{_t('Table Report')}}</span></a></li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-fw fa-book"></i>
                    <span>{{_t('Sale Report')}}</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{url('/admin/report-type/sale/list')}}"><i class="fa fa-fw fa-gavel"></i> <span>{{_t('Sale List')}}</span></a></li>

                    <li><a href="{{url('/admin/report-type/sale/detail')}}"><i class="fa fa-fw fa-cart-arrow-down"></i> <span>{{_t('Sale Detail')}}</span></a></li>

                    <li><a href="#"><i class="fa fa-fw fa-cart-arrow-down"></i> <span>{{_t('Sale Profit')}}</span></a></li>

                    <li><a href="#"><i class="fa fa-fw fa-cart-arrow-down"></i> <span>{{_t('Sale Daily')}}</span></a></li>

                    <li><a href="#"><i class="fa fa-fw fa-cart-arrow-down"></i> <span>{{_t('Sale Monthly')}}</span></a></li>

                    <li><a href="{{url('/admin/report-type/sale/discount')}}"><i class="fa fa-fw fa-cart-arrow-down"></i> <span>{{_t('Sale Discount')}}</span></a></li>

                    <li><a href="#"><i class="fa fa-fw fa-cart-arrow-down"></i> <span>{{_t('Customer Report')}}</span></a></li>

                  </ul>
                </li>

                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-fw fa-book"></i>
                    <span>{{_t('Production Report')}}</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{url('/admin/report-type/production-item/list')}}"><i class="fa fa-fw fa-gavel"></i> <span>{{_t('Production List')}}</span></a></li>

                    <li><a href="{{url('/admin/report-type/production-item/detail')}}"><i class="fa fa-fw fa-cart-arrow-down"></i> <span>{{_t('Production Detail')}}</span></a></li>
                  </ul>
                </li>

                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-fw fa-book"></i>
                    <span>{{_t('Purchase Report')}}</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{url('/admin/report-type/purchase-item/list')}}"><i class="fa fa-fw fa-gavel"></i> <span>{{_t('Purchase List')}}</span></a></li>

                    <li><a href="{{url('/admin/report-type/purchase-item/detail')}}"><i class="fa fa-fw fa-cart-arrow-down"></i> <span>{{_t('Purchase Detail')}}</span></a></li>
                  </ul>
                </li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-fw fa-book"></i>
                    <span>{{_t('Open Report')}}</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{url('/admin/report-type/open-item/list')}}"><i class="fa fa-fw fa-gavel"></i> <span>{{_t('Open List')}}</span></a></li>

                    <li><a href="{{url('/admin/report-type/open-item/detail')}}"><i class="fa fa-fw fa-cart-arrow-down"></i> <span>{{_t('Open Detail')}}</span></a></li>
                  </ul>
                </li>
              </ul>

            </li>
          @endif

          @if($u_level != 1)
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/checklist') }}">
              <i class="fa fa-fw fa-check-square"></i>
              <span>{{_t('Checklist')}}</span>
            </a>
          </li>
          @endif
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/exchangerate') }}"><i class="fa fa-university"></i> <span>{{_t('Exchange Rate')}}</span></a></li>
          @if($u_level==3 || $u_level==4)
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/adminuser') }}"><i class="fa fa-users"></i> <span>{{_t('User manager')}}</span></a></li>
         @endif

          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/elfinder') }}"><i class="fa fa-files-o"></i> <span>{{_t('File manager')}}</span></a></li>
        {{--<li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/setting') }}"><i class="fa fa-cog"></i> <span>{{_t('Settings')}}</span></a></li>--}}

        <!-- ======================================= -->
          <li class="header">{{_t('user') }}</li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}"><i class="fa fa-sign-out"></i> <span>{{_t('logout')}}</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif


