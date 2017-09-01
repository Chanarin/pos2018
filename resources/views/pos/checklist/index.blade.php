@extends('backpack::layout')
@section('graph_style')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/plugins/morris/morris.css">
@endsection

{{--@section('header')--}}
{{--<section class="content-header">--}}
{{--<h1>--}}
{{--{{ trans('backpack::base.dashboard') }}<small>Checklist Item</small>--}}
{{--</h1>--}}
{{--<ol class="breadcrumb">--}}
{{--<li><a href="{{url('admin/dashboard')}}">{{ config('backpack.base.project_name') }}</a></li>--}}
{{--<li class="active">Checklist Item</li>--}}
{{--</ol>--}}
{{--</section>--}}
{{--@endsection--}}
@section('content')
    <script>
        function printContent(el) {
            var restorepage = document.body.innerHTML;
            var printcontent = document.getElementById(el).innerHTML;
            document.body.innerHTML = printcontent;
            window.print();
            document.body.innerHTML = restorepage;
        }
    </script>
    <div class="box">
        <div class="box-header with-border col-md-12">

            <div class=" pull-left text-left">
                <h3 class="box-title" style="text-align: left !important;">Checklist Table</h3>
            </div>

            <div class=" pull-right text-right">

                <button class="btn btn-xs btn-default no-print pull-left" onclick="printContent('print-checklist')">
                    <i class="fa fa-print"></i>&nbsp;PRINT
                </button>
            </div>
        </div>
        <div class="box-body" id="print-checklist">
            <table class="table-responsive"  width="1024px"  border="0" cellspacing="0" style="margin:auto;">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 10px; margin-top: 10px;">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 " style="text-align: center;">
                        <img src="{{asset('/pos/img/logo.jpg')}}" width="100" height="100"
                             alt="">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align: center;">
                        <span style="font-size: 24px;"><b>CHECKLIST STOCKT</b></span>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <br>
                        <div style="text-align: right;">
                            {{--/Invoice No--}}
                            <span style="font-size: 14px;"><b>Number : ____________________</b></span><br><br>
                            {{--​/Date--}}
                            <span style="font-size: 14px;"><b>ថ្ងៃទី : ____________________</b></span>
                        </div>
                    </div>
                </div>
                <tr>
                    <td style="height:5px;" colspan="2"></td>
                </tr>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 10px">#</th>
                        <th class="text-center" style="width: 70px;">Image</th>
                        <th class="text-center">Code</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Unit</th>
                        <th class="text-center">Qty</th>
                        <th class="text-center">Count</th>
                        <th class="text-center" style="width: 140px">Note</th>
                        <th class="text-center" style="width: 10px">Tick</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($checklist as $row)
                            @php
                                $transaction = \App\Models\ItemTransaction::where('item_id','=',$row->id)->sum('qty');
                            @endphp
                            <tr>
                                <td class="text-left">{{$key++}}.</td>
                                <td class="text-center">
                                    @php
                                        $img = json_decode($row->image);

                                    @endphp
                                    @if(count($img)>0)

                                    <img src="{{url('img/cache/original/'.\App\Helpers\Glb::get_basename($img[0]))}}" width="50" height="50">
                                    @endif
                                </td>
                                <td class="text-left">{{$row->item_code}}</td>
                                <td class="text-left">{{$row->title}} </td>
                                <td class="text-left">{{$row->unit}}</td>
                                <td class="text-right">{{$transaction}}</td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                <td class="text-center"><input type="checkbox"></td>
                            </tr>
                        @endforeach
                    </tbody>




                </table>
            </table>
        </div>
    </div>
@endsection
@section('graph_script')

@endsection

