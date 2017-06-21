@extends('layouts.app')

@section('content')
    <div class="container">
        @include('flash::message')
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><center>REGISTER</center></div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('account_activation') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('noKtp') ? ' has-error' : '' }}">
                                <label for="noKtp" class="col-md-4 control-label">NIP</label>

                                <div class="col-md-6">
                                    <input id="noKtp" type="text" class="form-control" name="noKtp" value="{{ old('noKtp') }}" required autofocus>

                                    @if ($errors->has('noKtp'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('noKtp') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-MAIL ADDRESS</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">PASSWORD</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">CONFIRM PASSWORD</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <center><button style="height:35px;width:150px" type="submit" class="btn btn-primary">Submit</button></center>
                                    <center><a href="login" class="btn btn-link">Has an Account?</a></center>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
