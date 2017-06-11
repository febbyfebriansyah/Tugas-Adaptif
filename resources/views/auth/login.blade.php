@extends('layouts.app')

@section('content')
<div class="container">
    @include('flash::message')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>LOGIN</center></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-MAIL ADDRESS</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" required autofocus>

<!--                                 @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
 -->                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">PASSWORD</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

<!--                                 @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
 -->                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button style="height:35px;width:150px" type="submit" class="btn btn-primary">
                                    Login
                                </button>
                                <a class="btn btn-link" href="">
                                    Forgot Your Password?
                                </a>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" > Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                            <center><a href="/account_activation" class="btn btn-primary">ACCOUNT ACTIVATION</a></center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
