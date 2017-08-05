@extends('layouts.app')

@section('paralax')
<!-- parralax skyline -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="{{ asset('css/parralax-skyline.css') }}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
@endsection

@section('js_addon')
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://rawgithub.com/soulwire/sketch.js/master/js/sketch.min.js'></script>
<script src="{{ asset('js/parralax-skyline.js') }}"></script>
@endsection

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
                                <input id="email" type="email" class="form-control" placeholder="Enter your email here" name="email" value="" required autofocus>

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
                                <input id="password" type="password" class="form-control" placeholder="Enter password" name="password" required>

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
                                <a class="btn btn-link" href="forget_password">
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
                            <center><a href="account_activation" class="btn btn-success">ACCOUNT ACTIVATION</a></center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
