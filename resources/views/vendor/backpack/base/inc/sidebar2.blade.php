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
      <nav style="padding-left: 5px; margin-left: 5px;">
        <ul class="sidebar-menu">

            <h3 style="text-align: center; font-weight: bold;">{{_t('Select Report Type')}}</h3>
            <h4 style="font-weight: bold;">{{_t('Sale Report')}}</h4>
            <li>
              <label for="invoice_list">
                <input data-url="{{url('/api/report/invoice/list')}}" type="radio"
                       id="invoice_list"
                       class="report-option" name="report"><span>{{_t('List')}}</span>
              </label>
            </li>
            <li>
              <label for="invoice_detial">
                <input data-url="{{url('/api/report/invoice/detail')}}" type="radio"
                       id="invoice_detial"
                       class="report-option" name="report"> <span>{{_t('Detail')}}</span>
              </label>
            </li>
            <li>
              <label for="invoice_profit">
                <input data-url="{{url('/api/report/invoice/profit')}}" type="radio"
                       id="invoice_profit"
                       class="report-option" name="report"> <span>{{_t('Profit')}}</span>
              </label>
            </li>

            <h4 style="font-weight: bold;">{{_t('Open Item')}}</h4>
            <li>
              <label for="open_list">
                <input data-url="{{url('/api/report/open-item/list')}}" type="radio"
                       id="open_list"
                       class="report-option" name="report"><span>{{_t('List')}}</span>
              </label>
            </li>
            <li>
              <label for="open_detial">
                <input data-url="{{url('/api/report/open-item/detail')}}" type="radio"
                       id="open_detial"
                       class="report-option" name="report"> <span>{{_t('Detail')}}</span>
              </label>
            </li>

            <h4 style="font-weight: bold;">{{_t('Purchase Item')}}</h4>
            <li>
              <label for="purchase_list">
                <input data-url="{{url('/api/report/purchase-item/list')}}" type="radio"
                       id="purchase_list"
                       class="report-option" name="report"><span>{{_t('List')}}</span>
              </label>
            </li>
            <li>
              <label for="purchase_detial">
                <input data-url="{{url('/api/report/purchase-item/detail')}}" type="radio"
                       id="purchase_detial"
                       class="report-option" name="report"> <span>{{_t('Detail')}}</span>
              </label>
            </li>

            <h4 style="font-weight: bold;">{{_t('Production Item')}}</h4>
            <li>
              <label for="production_list">
                <input data-url="{{url('/api/report/production-item/list')}}" type="radio"
                       id="production_list"
                       class="report-option" name="report"><span>{{_t('List')}}</span>
              </label>
            </li>
            <li>
              <label for="production_detail">
                <input data-url="{{url('/api/report/production-item/detail')}}" type="radio"
                       id="production_detail"
                       class="report-option" name="report"> <span>{{_t('Detail')}}</span>
              </label>
            </li>
        </ul>
      </nav>
    </section>
    <!-- /.sidebar -->
  </aside>
@endif
