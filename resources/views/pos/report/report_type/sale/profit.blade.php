@extends('backpack::layout')
@section('graph_style')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/plugins/morris/morris.css">
@endsection
@section('header')
    <section class="content-header">
        <h1>
            {{_t('Open Item List') }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
            <li class="active">{{_t('Sale Report Detail')}}</li>
        </ol>
    </section>
@endsection
@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">

                        <table class="" style="width: 100%">


                                <tr>
                                    <td colspan="6">
                                        <br>

                                    </td>
                                </tr>

                                {{--  -------------------------------------------------------------------------------------}}
                                <table width="100%">
                                    <thead class="border" style="background: #CCCCCC">
                                    <tr>
                                        <th class="text-center">{{_t('No')}}</th>
                                        <th class="text-center">{{_t('Image')}}</th>
                                        <th class="text-center">{{_t('Code')}}</th>
                                        <th class="text-center">{{_t('Name')}}</th>
                                        <th class="text-center">{{_t('Unit')}}</th>
                                        <th class="text-center">{{_t('Qty')}}</th>
                                        <th class="text-center">{{_t('Price')}}</th>
                                        <th class="text-center">{{_t('Total')}}</th>

                                    </tr>
                                    </thead>
                                    <tbody class="border" style="border: 1px solid #CCC;">
                                        <tr class="item" style="height: 30px;">
                                            <td class="text-left">1</td>
                                            <td class="text-left">
                                                1
                                            </td>
                                            <td class="text-left">1</td>
                                            <td class="text-left">1</td>
                                            <td class="text-left">1</td>
                                            <td class="text-right">1</td>
                                            <td class="text-right">$ 1</td>
                                            <td class="text-right">$ 1</td>
                                        </tr>


                                    </tbody>
                                </table>


                        </table>
                        <div class="my-paginate" align="center">

                        </div>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>

@endsection
@section('graph_script')

@endsection

