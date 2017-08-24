@if (Auth::check())
    <aside class="main-sidebar">
      <section class="sidebar" style="padding-left: 15px;">
        <a href="#">
          <i class="fa fa-fw fa-check-square"></i>
          <span><b>Open Item</b></span>
        </a>

        <input data-url="/api/report/open-item/list" type="radio" name="r1" class="minimal report-option" checked> List<br>
        <input data-url="/api/report/open-item/detail" type="radio" name="r1" class="minimal report-option"> Detail<br>
        <h4><b>Purchase Item</b></h4>
        <input data-url="/api/report/purchase-item/list" type="radio" name="r1" class="minimal report-option" checked> List<br>
        <input data-url="/api/report/purchase-item/detail" type="radio" name="r1" class="minimal report-option"> Detail<br>
        <h4><b>Production Item</b></h4>
        <input data-url="/api/report/production-item/list" type="radio" name="r1" class="minimal report-option" checked> List<br>
        <input data-url="/api/report/production-item/detail" type="radio" name="r1" class="minimal report-option"> Detail<br>
        <h4><b>Sale Item</b></h4>
        <input data-url="/api/report/sale-item/list" type="radio" name="r1" class="minimal report-option" checked> List<br>
        <input data-url="/api/report/sale-item/detail" type="radio" name="r1" class="minimal report-option"> Detail<br>

      </section>
    </aside>
@endif


