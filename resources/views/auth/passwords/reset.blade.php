@extends('layouts.app')

@section('content')
<title>Advaith A J - Password Reset</title>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" autofocus placeholder="email...">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <div style="position: relative;">
                                    <div style="position: absolute; right: 0; cursor: pointer; height: 100%; width: 35px; text-align: center;" id="password-toggle">
                                        <i class="glyphicon glyphicon-eye-open" aria-hidden="true" style="top: 50%; transform: translate(0, -60%)" onclick="showPassword()"></i>
                                    </div>
                                    <input id="password" type="password" class="form-control password" name="password" style="padding-right: 35px;" placeholder="password...">
                                </div>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <div style="position: relative;">
                                    <div style="position: absolute; right: 0; cursor: pointer; height: 100%; width: 35px; text-align: center;" id="password-toggle">
                                        <i class="glyphicon glyphicon-eye-open" aria-hidden="true" style="top: 50%; transform: translate(0, -60%)" onclick="showPassword()"></i>
                                    </div>
                                    <input id="password-confirm" type="password" class="form-control password" name="password_confirmation" style="padding-right: 35px;" placeholder="confirm password...">
                                </div>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
