@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row" style="margin-top: 40px;">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #840c00;color: #fff;padding-left: 30px"><strong>Admin</strong></div>

                <div class="panel-body" >
                    <div class="row" >
                        <div class="col-md-6">


                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                    <div class="col-md-12" style="padding-left: 30px">
                                        <label for="email" class="control-label">E-Mail Address</label>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                 

                                    <div class="col-md-12" style="padding-left: 30px">
                                           <label for="password" class="control-label">Password</label>
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12" style="padding-left: 30px">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12" style="padding-left: 30px">
                                        <button type="submit" class="btn btn-primary" style="background-color: #840c00">
                                            Login
                                        </button>

                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Forgot Your Password?
                                        </a>
                                    </div>
                                </div>
                            </form>


                    </div>

                    <div class="col-md-6"  >
                        
                     <center> <img style="margin-top: 15%" src="{{asset("images/logo.png")}}" alt="" style="max-height: 300px;"> </center>
            

                    </div>






                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
