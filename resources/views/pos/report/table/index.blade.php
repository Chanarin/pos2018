@extends('backpack::layout2')

@section('header')

    <section class="content-header">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <div class="col-md-10" >
                    <!-- Date range -->
                    <div class="col-md-4 input-group-sm">
                        <input type="text" id="q" class="form-control pull-right" placeholder="{{_t('search here')}}...">
                    </div>
                    <div class="col-md-8">
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
                                </span>
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                </div>
                <div class="col-md-2">

                </div>
                <li><a href="#" class="btn btn-xs btn-default" onclick="printContent('report-print')"><i class="fa fa-fw fa-print"></i> {{_t('PRINT')}}</a></li>
                {{--<li><a href="#" class="btn btn-xs btn-default" id="cmd" ><i class="fa fa-fw fa-file-pdf-o"></i> PDF</a></li>--}}
                {{--<li><a href="#" class="btn btn-xs btn-default" id="btnExport"><i class="fa fa-fw fa-file-excel-o"></i> EXCEL</a></li>--}}
            </ol>
        </div>

    </section>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-body">
                    <div class="col-md-12 table-responsive report-item-list report-item-detail">
                        {{--========================list report===================--}}
                        <div style="min-height: 450px;"></div>
                        {{--===========end list report=============--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
