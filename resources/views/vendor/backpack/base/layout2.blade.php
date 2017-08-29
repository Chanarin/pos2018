<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Encrypted CSRF token for Laravel, in order for Ajax requests to work --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>
        {{ isset($title) ? $title.' :: '.config('backpack.base.project_name').' Admin' : config('backpack.base.project_name').' Admin' }}
    </title>
    @yield('before_styles')
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/plugins/pace/pace.min.css">
    <link rel="stylesheet" href="{{ asset('vendor/backpack/pnotify/pnotify.custom.min.css') }}">
    <!-- BackPack Base CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/backpack/backpack.base.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte') }}/plugins/iCheck/all.css">

    <link rel="stylesheet" href="{{asset('vendor/adminlte/plugins/daterangepicker/daterangepicker.css')}}">
@yield('after_styles')
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition {{ config('backpack.base.skin') }} sidebar-mini">
<script type="text/javascript">
    /* Recover sidebar state */
    (function () {
        if (Boolean(sessionStorage.getItem('sidebar-toggle-collapsed'))) {
            var body = document.getElementsByTagName('body')[0];
            body.className = body.className + ' sidebar-collapse';
        }
    })();
</script>
<!-- Site wrapper -->
<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a href="{{ url('/admin/dashboard') }}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">{!! config('backpack.base.logo_mini') !!}</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">{!! config('backpack.base.logo_lg') !!}</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->

            <a href="#" id="add-class-sidbar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">{{ trans('backpack::base.toggle_navigation') }}</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            @include('backpack::inc.menu2')
        </nav>
    </header>
    <!-- =============================================== -->
@include('backpack::inc.sidebar2')
<!-- =============================================== -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @yield('header')
    <!-- Main content -->
        <section class="content">
            @yield('content')
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        @if (config('backpack.base.show_powered_by'))
            <div class="pull-right hidden-xs">
                {{ trans('backpack::base.powered_by') }} <a target="_blank" href="http://backpackforlaravel.com?ref=panel_footer_link">Backpack for Laravel</a>
            </div>
        @endif
        {{ trans('backpack::base.handcrafted_by') }} <a target="_blank" href="{{ config('backpack.base.developer_link') }}">{{ config('backpack.base.developer_name') }}</a>.
    </footer>
</div>
<!-- ./wrapper -->
@yield('before_scripts')
<!-- jQuery 2.2.0 -->
{{--<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>--}}
<script src="{{asset('/pos/jquery/jquery-2.2.0.min.js')}}"></script>
<script src="{{asset('/pos/sweet-alert/')}}/sweetalert-dev.js"></script>
<link rel="stylesheet" href="{{asset('/pos/sweet-alert/')}}/sweetalert.css">
<script>window.jQuery || document.write('<script src="{{ asset('vendor/adminlte') }}/plugins/jQuery/jQuery-2.2.0.min.js"><\/script>')</script>
<!-- Bootstrap 3.3.5 -->
<script src="{{ asset('vendor/adminlte') }}/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ asset('vendor/adminlte') }}/plugins/pace/pace.min.js"></script>
<script src="{{ asset('vendor/adminlte') }}/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="{{ asset('vendor/adminlte') }}/plugins/fastclick/fastclick.js"></script>
<script src="{{ asset('vendor/adminlte') }}/dist/js/app.min.js"></script>

<script src="{{ asset('vendor/adminlte') }}/plugins/iCheck/icheck.min.js"></script>
<script src="{{ asset('vendor/adminlte') }}/dist/js/demo.js"></script>
<script src="{{ asset('vendor/adminlte') }}/plugins/select2/select2.full.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>

<script src="{{asset('vendor/adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('vendor/adminlte/plugins/datepicker/bootstrap-datepicker.js')}}"></script>

<!-- page script -->
<script type="text/javascript">
    /* Store sidebar state */
    $('.sidebar-toggle').click(function(event) {
        event.preventDefault();
        if (Boolean(sessionStorage.getItem('sidebar-toggle-collapsed'))) {
            sessionStorage.setItem('sidebar-toggle-collapsed', '');
        } else {
            sessionStorage.setItem('sidebar-toggle-collapsed', '1');
        }
    });
    // To make Pace works on Ajax calls
    $(document).ajaxStart(function() { Pace.restart(); });

    // Ajax calls should always have the CSRF token attached to them, otherwise they won't work
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    // Set active state on menu element
    var current_url = "{{ Request::fullUrl() }}";
    var full_url = current_url+location.search;
    var $navLinks = $("ul.sidebar-menu li a");
    // First look for an exact match including the search string
    var $curentPageLink = $navLinks.filter(
        function() { return $(this).attr('href') === full_url; }
    );
    // If not found, look for the link that starts with the url
    if(!$curentPageLink.length > 0){
        $curentPageLink = $navLinks.filter(
            function() { return $(this).attr('href').startsWith(current_url) || current_url.startsWith($(this).attr('href')); }
        );
    }
    $curentPageLink.parents('li').addClass('active');
            {{-- Enable deep link to tab --}}
    var activeTab = $('[href="' + location.hash.replace("#", "#tab_") + '"]');
    activeTab && activeTab.tab('show');
    $('.nav-tabs a').on('shown.bs.tab', function (e) {
        location.hash = e.target.hash.replace("#tab_", "#");
    });
</script>
@include('backpack::inc.alerts')
@yield('after_scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
<script>
    //    ====================get print file====================
    function printContent(el) {
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
    }
//    ====================select date rang===============
    $(function () {
        var start = moment().subtract(29, 'days');
        var end = moment();
        function cb(start, end) {
            $('#reservation span').html(start.format('YYYY/MM/DD') + ' - ' + end.format('YYYY/MM/DD'));
            $('#from-date').val(start.format('YYYY/MM/DD'));
            $('#to-date').val(end.format('YYYY/MM/DD'));
        }
        $('#reservation').daterangepicker({
            startDate: start,
            endDate: end,
            locale: {
                format: 'YYYY/MM/DD'
            },
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'This Year': [moment().startOf('year'), moment().endOf('year')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb).on('apply.daterangepicker', function (ev, picker) {
            var st = (picker.startDate.format('YYYY/MM/DD'));
            var ed = (picker.endDate.format('YYYY/MM/DD'));
            $('#from-date').val(st);
            $('#to-date').val(ed);
        });
        cb(start, end);

//    ==================== report =====================

    //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });
//    ====================ajax get report data pagination and search=====================
        $('#search-report-by-date').on('click', function (e) {
            e.preventDefault();
            var report_url = $('.report-option:checked').data('url');
            var from_date = $('#from-date').val();
            var to_date = $('#to-date').val();
            var q = $('#q').val();
            if (report_url) {
                $.ajax({
                    url: report_url,
                    type: 'GET',
                    dataType: 'html',
                    data: {
                        from_date: from_date,
                        to_date: to_date,
                        q:q
                    },
                    success: function (d) {
                        $('.report-item-list').html(d);
                    },
                    error: function (d) {
                        alert('error');
                    }
                });
            } else {
                swal("OOps.., No Data!", "Please, select report type and date first.")
            }
        });
        $('body').delegate('.my-paginate ul li a', 'click', function (e) {
                e.preventDefault();
                var report_url = $(this).prop('href');
                $.ajax({
                    url: report_url,
                    type: 'GET',
                    dataType: 'html',
                    success: function (d) {
                        $('.report-item-list').html(d);
                    },
                    error: function (d) {
                        alert('error');
                    }
                });
            });
//    ====================get pdf file====================
        var specialElementHandlers = {
            '#editor': function (element,renderer) {
                return true;
            }
        };
        $('#cmd').click(function () {
            var doc = new jsPDF();
            doc.fromHTML($('#report-print').html(), 15, 15, {
                'width': 1070,'elementHandlers': specialElementHandlers
            });
            doc.save('report.pdf');
        });
    });
//    ====================get excel file====================
    $(document).ready(function() {
        $("#btnExport").click(function(e) {
            e.preventDefault();

            //getting data from our table
            var data_type = 'data:application/vnd.ms-excel';
            var table_div = document.getElementById('report-print');
            var table_html = table_div.outerHTML.replace(/ /g, '%20');

            var a = document.createElement('a');
            a.href = data_type + ', ' + table_html;
            a.download = 'exported_table_' + Math.floor((Math.random() * 9999999) + 1000000) + '.xls';
            a.click();
        });
    });
    //        ===================add class toggle by window media==================
    (function($) {
        var $window = $(window),
            $html = $('#add-class-sidbar-toggle');

        function resize() {
            if ($window.width() < 768) {
                return $html.addClass('sidebar-toggle');
            }

            $html.removeClass('sidebar-toggle');
        }

        $window
            .resize(resize)
            .trigger('resize');
    })(jQuery);
</script>
<!-- JavaScripts -->
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
