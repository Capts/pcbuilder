@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2"  style="height: 420px;">
            <br><br>
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                
                <div class="panel-body "  style="padding:20px 20px">
                    {{-- <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

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
                            <label for="password" class="col-md-4 control-label">Password</label>

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
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form> --}}

                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}

                                <div class="form-group has-feedback{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                    
                                        <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus placeholder="First Name">
                                         <span class="fa fa-user-o form-control-feedback"></span>

                                        @if ($errors->has('firstname'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('firstname') }}</strong>
                                            </span>
                                        @endif
                                   
                                </div>

                                <div class="form-group has-feedback{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                        <span class="fa fa-user-o form-control-feedback"></span>
                                        <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required placeholder="Last Name">

                                        @if ($errors->has('lastname'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('lastname') }}</strong>
                                            </span>
                                        @endif
                                    
                                </div>


                                <div class="form-group has-feedback{{ $errors->has('gender') ? ' has-error' : '' }}">
                                  <select class="form-control" name="gender">
                                    <option value="" disabled selected>Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                  </select>
                                  <span class="fa fa-venus-mars form-control-feedback"></span>
                                   @if ($errors->has('gender'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('gender') }}</strong>
                                            </span>
                                        @endif
                                </div>


                                <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                                    
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email">
                                         <span class="fa fa-envelope form-control-feedback"></span>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                   
                                </div>

                                <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                                    
                                        <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                                        <span class="fa fa-unlock-alt form-control-feedback"></span>
                    
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    
                                </div>

                                <div class="form-group has-feedback">
                                    
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm password">
                                        <span class="fa fa-unlock-alt form-control-feedback"></span>
                                    
                                </div>

                                <div class="form-group" style="padding:0px 0px;">
                                    <div class="col-md-12" style="padding:0px 0px;">
                                        <button type="submit" class="btn btn-flat btn-block btn-primary">
                                            Register
                                        </button>
                                    </div>
                                </div>
                            </form>

                </div>
            </div>
        </div>
    </div><br><br><br><br>
</div>
@endsection
