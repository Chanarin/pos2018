@if (Auth::check())
  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Select Report Type</li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-check-square"></i>
            <span>Open Item</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="#">
                <input data-url="{{url('/api/report/open-item/list')}}" type="radio" name="name-report-option" class="minimal report-option">
                <span>List</span>
              </a>
            </li>
            <li>
              <a href="#">
                <input data-url="{{url('/api/report/open-item/detail')}}" type="radio" name="name-report-option" class="minimal report-option">
                <span>Detail</span>
              </a>
            </li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-check-square"></i>
            <span>Purchase Item</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="#">
                <input data-url="{{url('/api/report/purchase-item/list')}}" type="radio" name="name-report-option" class="minimal report-option">
                <span>List</span>
              </a>
            </li>
            <li>
              <a href="#">
                <input data-url="{{url('/api/report/purchase-item/detail')}}" type="radio" name="name-report-option" class="minimal report-option">
                <span>Detail</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-check-square"></i>
            <span>Production Item</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="#">
                <input data-url="{{url('/api/report/production-item/list')}}" type="radio" name="name-report-option" class="minimal report-option">
                <span>List</span>
              </a>
            </li>
            <li>
              <a href="#">
                <input data-url="{{url('/api/report/production-item/detail')}}" type="radio" name="name-report-option" class="minimal report-option">
                <span>Detail</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-check-square"></i>
            <span>Sale Invoice</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="#">
                <input data-url="{{url('/api/report/invoice/list')}}" type="radio" name="name-report-option" class="minimal report-option">
                <span>List</span>
              </a>
            </li>
            <li>
              <a href="#">
                <input data-url="{{url('/api/report/invoice/detail')}}" type="radio" name="name-report-option" class="minimal report-option">
                <span>Detail</span>
              </a>
            </li>
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
@endif
