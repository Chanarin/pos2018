@extends('backpack::layout')
@section('graph_style')
@endsection
@section('header')
    <section class="content-header">
        <h1>
            {{_t('Error') }}<small>{{_t('something has wrong!!!') }}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
            <li class="active">{{_t('Error')}}</li>
        </ol>
    </section>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">{{_t('Error')}}</div>
                </div>
                <section class="content">
                    <h1 style="color: red; text-align: center;">{{_t('Oopp, Something has wrong!!!')}}</h1>
                </section>
            </div>
        </div>
    </div>

@endsection
@section('graph_script')
@endsection

