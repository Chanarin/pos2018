@if (Auth::check())
    <aside class="main-sidebar">
      <section class="sidebar" style="padding-left: 15px;">
        <a href="#">
          <span><b>Open Item</b></span>
        </a>
        <p>
          <input data-url="/api/report/open-item/list" type="radio" name="name-report-option" class="minimal report-option"> List<br>
        </p>
        <p>
          <input data-url="/api/report/open-item/detail" type="radio" name="name-report-option" class="minimal report-option"> Detail<br>
        </p>

        <a href="#">
          <span><b>Purchase Item</b></span>
        </a>
        <p>
          <input data-url="/api/report/purchase-item/list" type="radio" name="name-report-option" class="minimal report-option"> List<br>
        </p>
        <p>
          <input data-url="/api/report/purchase-item/detail" type="radio" name="name-report-option" class="minimal report-option"> Detail<br>
        </p>

        <a href="#">
          <span><b>Production Item</b></span>
        </a>
        <p>
          <input data-url="/api/report/production-item/list" type="radio" name="name-report-option" class="minimal report-option"> List<br>
        </p>
        <p>
          <input data-url="/api/report/production-item/detail" type="radio" name="name-report-option" class="minimal report-option"> Detail<br>
        </p>

        <a href="#">
          <span><b>Sale Invoice</b></span>
        </a>
        <p>
          <input data-url="/api/report/invoice/list" type="radio" name="name-report-option" class="minimal report-option"> List<br>
        </p>
        <p>
          <input data-url="/api/report/invoice/detail" type="radio" name="name-report-option" class="minimal report-option"> Detail<br>
        </p>

      </section>
    </aside>
@endif


