@extends('backpack::layout2')

@section('header')

    <section class="content-header">
        <div class="col-md-12">
            {{--breadcrumb--}}
            <ol>
                <div class="col-md-10" >
                    <!-- Date range -->
                    <div class="col-md-4 input-group-sm">
                        <input type="text" id="q" class="form-control pull-right" placeholder="{{_t('search here')}}...">
                    </div>
                    <div class="col-md-8 text-center">
                        <div class="form-group">

                            <div class="input-group input-group-sm">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="reservation">
                                <input type="hidden" id="from-date">
                                <input type="hidden" id="to-date">
                                <span class="input-group-btn">
                                  <button type="button" class="btn btn-info btn-flat" id="search-report-by-date">{{_t('Search')}}</button>
                                  <button type="button" class="btn btn-info btn-flat" id="btnPrint">Print</button>
                                </span>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <label for="to_date">
                            <input type="radio" id="to_date" class="report-name" name="report_option">To Date
                        </label>
                        <label for="between">
                            <input checked="checked" type="radio" id="between" class="report-name" name="report_option">
                            Between
                        </label>
                    </div>
                </div>
                <div class="col-md-2">

                </div>
            </ol>
        </div>

    </section>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-body" style="min-width: 100% !important; background-color: #ffffff;
                            -webkit-box-shadow: 0px 6px 26px -6px rgba(0,0,0,0.48);
                            -moz-box-shadow: 0px 6px 26px -6px rgba(0,0,0,0.48);
                            box-shadow: 0px 6px 26px -6px rgba(0,0,0,0.48);
                            border-radius: 5px;">
                    <div class="col-md-12 table-responsive report-item-list report-item-detail">
                        {{--========================list report===================--}}
                        <div style="min-height: 450px;" >

                        </div>
                        {{--===========end list report=============--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('after_scripts')
    @parent
        <script type="text/javascript">
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

                //    ====================ajax get report data pagination and search=====================
                $('#search-report-by-date').on('click', function (e) {
                    e.preventDefault();
                    var report_url = $('.report-option:checked').data('url');
                    var from_date = $('#from-date').val();
                    var to_date = $('#to-date').val();
                    var report_option = $('#to_date').is(':checked') ? 'to_date' : 'between';
                    var q = $('#q').val();
                    if (report_url && report_option != '') {
                        $.ajax({
                            url: report_url,
                            type: 'GET',
                            async: false,
                            dataType: 'html',
                            data: {
                                from_date: from_date,
                                to_date: to_date,
                                report_option: report_option,
                                q:q
                            },
                            success: function (d) {
                                $('.report-item-list').html(d);
                                $('.my-modal').hide();
                            },
                            error: function (d) {
                                alert('error');
                                $('.my-modal').hide();
                            }
                        });
                    } else {
                        swal("អូរ.., មិនមានទិន្នន័យ!", "សូមលោកអ្នក​ ធ្វើការជ្រើសរើសប្រភេទនៃរបាយការណ័<<report>> និងថ្ងៃខែជាមុនសិន.")
                    }
                });
                $('body').delegate('.my-paginate ul li a', 'click', function (e) {
                    e.preventDefault();
                    var report_url = $(this).prop('href');
                    $('.my-modal').show(500);

                    $.ajax({
                        url: report_url,
                        type: 'GET',
                        dataType: 'html',
                        success: function (d) {
                            $('.report-item-list').html(d);
                            $('.my-modal').hide();
                        },
                        error: function (d) {
                            alert('error');
                            $('.my-modal').hide();
                        }
                    });
                });
            });
        </script>
    <script type="text/javascript">
        $(function () {
            $("#btnPrint").click(function () {

                $('#search-report-by-date').trigger('click');

                var contents = $(".report-item-list").html();
                var frame1 = $('<iframe />');
                frame1[0].name = "frame1";
                frame1.css({"position": "absolute", "top": "-1000000px"});
                $("body").append(frame1);
                var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument.document ? frame1[0].contentDocument.document : frame1[0].contentDocument;
                frameDoc.document.open();
                //Create a new HTML document.
                frameDoc.document.write('<html><head><title>Print Report</title>');

                frameDoc.document.write('<style>\n' +
                    '    table{\n' +
                    '        border-collapse: collapse;\n' +
                    '    }\n' +
                    '    .border th, .border td {\n' +
                    '        border: 1px solid rgba(188, 188, 188, 0.96);\n' +
                    '        padding: 5px;\n' +
                    '    }\n' +
                    '</style>');

                frameDoc.document.write('</head><body>');
                //Append the external CSS file.

//                frameDoc.document.write('<link href="style.css" rel="stylesheet" type="text/css" />');
                //Append the DIV contents.
                frameDoc.document.write(contents);
                frameDoc.document.write('</body></html>');
                frameDoc.document.close();
                setTimeout(function () {
                    window.frames["frame1"].focus();
                    window.frames["frame1"].print();
                    frame1.remove();
                }, 500);
            });
        });
    </script>
@endsection