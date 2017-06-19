@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>FORGET PASSWORD</center></div>
                <div class="panel-body">
                    <form class="form-horizontal"  method="POST" action="{{ url('/forget_password2') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">CODE</label>

                            <div class="col-md-6">
                                <input id="code" type="code" class="form-control" placeholder="Enter your code here" name="code" value="{{ old('code') }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <center><button style="height:35px;width:150px" type="submit" class="btn btn-primary">
                                    Submit
                                </button></center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    </div>
    </div>
@endsection