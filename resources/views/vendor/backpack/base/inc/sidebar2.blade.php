@if (Auth::check())
  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
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

      <ul class="sidebar-menu">
        <li class="header"><h4>{{_t('Select Report Type')}}</h4></li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-book"></i>
            <span>{{_t('Open Item')}}</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="#">
                <input data-url="{{url('/api/report/open-item/list')}}" type="radio" name="name-report-option" class="minimal report-option">
                <span>{{_t('List')}}</span>
              </a>
            </li>
            <li>
              <a href="#">
                <input data-url="{{url('/api/report/open-item/detail')}}" type="radio" name="name-report-option" class="minimal report-option">
                <span>{{_t('Detail')}}</span>
              </a>
            </li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-cart-arrow-down"></i>
            <span>{{_t('Purchase Item')}}</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="#">
                <input data-url="{{url('/api/report/purchase-item/list')}}" type="radio" name="name-report-option" class="minimal report-option">
                <span>{{_t('List')}}</span>
              </a>
            </li>
            <li>
              <a href="#">
                <input data-url="{{url('/api/report/purchase-item/detail')}}" type="radio" name="name-report-option" class="minimal report-option">
                <span>{{_t('Detail')}}</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-gavel"></i>
            <span>{{_t('Production Item')}}</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="#">
                <input data-url="{{url('/api/report/production-item/list')}}" type="radio" name="name-report-option" class="minimal report-option">
                <span>{{_t('List')}}</span>
              </a>
            </li>
            <li>
              <a href="#">
                <input data-url="{{url('/api/report/production-item/detail')}}" type="radio" name="name-report-option" class="minimal report-option">
                <span>{{_t('Detail')}}</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-file-excel-o"></i>
            <span>{{_t('Sale Invoice')}}</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="#">
                <input data-url="{{url('/api/report/invoice/list')}}" type="radio" name="name-report-option" class="minimal report-option">
                <span>{{_t('List')}}</span>
              </a>
            </li>
            <li>
              <a href="#">
                <input data-url="{{url('/api/report/invoice/detail')}}" type="radio" name="name-report-option" class="minimal report-option">
                <span>{{_t('Detail')}}</span>
              </a>
            </li>
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
@endif
