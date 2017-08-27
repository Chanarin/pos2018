@extends('backpack::layout3')

@section('content')
    <div class="login-box">
        {{--style="position:fixed;position: absolute; left: 40%"--}}
        <div class="login-logo">
            <a href="{{ asset('vendor/adminlte/') }}/index2.html"><b style="color: #3c8dbc;">STOCK</b> <span style="color: #3c8dbc;">Management</span></a>
        </div>
        <div class="login-box-body" style="background: rgba(169, 169, 169, 0.19);">
            <p class="login-box-msg">Sign in to start your session</p>
            <form class="form-horizontal" role="form" method="POST" action="{{ url(config('backpack.base.route_prefix').'/login') }}">
                {!! csrf_field() !!}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="remember"> {{ trans('backpack::base.remember_me') }}
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">
                            {{ trans('backpack::base.login') }}
                        </button>

                        {{--<a class="btn btn-link" href="{{ url(config('backpack.base.route_prefix', 'admin').'/password/reset') }}">{{ trans('backpack::base.forgot_your_password') }}</a>--}}
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
