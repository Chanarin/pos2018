@if (Auth::check())
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
          <li class="header">{{ _t('administration') }}</li>
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{_t('Dashboard')}}</span></a></li>


          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/sale') }}"><i class="fa fa-fw fa-desktop"></i> <span>{{_t('POS')}}</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/invoice') }}"><i class="fa fa-fw fa-file-excel-o"></i> <span>{{_t('Invoice')}}</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/customer') }}"><i class="fa  fa-user"></i> <span>{{_t('Customer')}}</span></a></li>


          <li class="treeview">
            <a href="#">
              <i class="fa fa-pie-chart"></i>
              <span>{{_t('Report')}}</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li>
                <a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/view-report') }}">
                  <i class="fa fa-pie-chart"></i>
                  <span>{{_t('Table Report')}}</span>
                </a>
              </li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/report') }}">
                  <i class="fa fa-pie-chart"></i>
                  <span>{{_t('Report')}}</span>
                </a>
              </li>
            </ul>
          </li>



          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/openitem') }}"><i class="fa fa-fw fa-book"></i> <span>{{_t('Open Item')}}</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/purchase') }}"><i class="fa fa-fw fa-cart-arrow-down"></i> <span>{{_t('Purchase')}}</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/production') }}"><i class="fa fa-fw fa-gavel"></i> <span>{{_t('Production')}}</span></a></li>



          <li class="treeview">
            <a href="#">
              <i class="fa fa-university"></i>
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

              <li>
                <a href="{{ url(config('backpack.base.route_prefix', 'admin').'/unit') }}">
                  <i class="fa fa-fw fa-book"></i>
                  <span>{{_t('Unit')}}</span>
                </a>
              </li>

            </ul>
          </li>





          <li class="treeview">
            <a href="#">
              <i class="fa fa-fw fa-check-square"></i>
              <span>{{_t('Checklist')}}</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li>
                <a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/view-checklist') }}">
                  <i class="fa fa-fw fa-check-square"></i>
                  <span>{{_t('Checklist Stock')}}</span>
                </a>
              </li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/checklist') }}">
                  <i class="fa fa-fw fa-check-square"></i>
                  <span>{{_t('Checklist')}}</span>
                </a>
              </li>
            </ul>
          </li>

          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/elfinder') }}"><i class="fa fa-files-o"></i> <span>{{_t('File manager')}}</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/setting') }}"><i class="fa fa-cog"></i> <span>{{_t('Settings')}}</span></a></li>

          <!-- ======================================= -->
          <li class="header">{{ _t('user') }}</li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}"><i class="fa fa-sign-out"></i> <span>{{_t('logout')}}</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif


