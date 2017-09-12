@extends('layouts.app')


@section('title', 'Welcome' )

@section('content' )

<div class="row">
	<col-md-12>
		<div class="col-md-8">
			{{-- CONTENT SLIDES --}}

		</div>


		<div class="col-md-4">
			{{-- LOGIN /REGISTER --}}

			
			<div class="login-box">
			  <div class="login-logo">
			    {{-- <a href="/"><b>Admin</b>LTE</a> --}}
			  </div>
			  <!-- /.login-logo -->
			  <div class="login-box-body">
			    <p class="login-box-msg">Sign in to avail all the benefits! It's FREE!</p>

			    <form action="{{ route('login') }}" method="post">
			    {{ csrf_field() }}

			      <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
			        <input type="email" class="form-control" placeholder="Email" name="email">
			        <span class="fa fa-envelope form-control-feedback"></span>
				        @if ($errors->has('email'))
				            <span class="help-block">
				                <strong>{{ $errors->first('email') }}</strong>
				            </span>
				        @endif
			      </div>
			      <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
			        <input type="password" class="form-control" placeholder="Password" name="password">
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
			              <input type="checkbox"> Remember Me
			            </label><br><br>	
			            <a href="#">I forgot my password</a>
			          </div>
			        </div>
			        <!-- /.col -->
			        <div class="col-xs-4">
			          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
			        </div>
			        <!-- /.col -->
			      </div>
			    </form>

			    <div class="social-auth-links text-center">
			      <p>- OR -</p><br>
			      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
			        Facebook</a>
			      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
			        Google+</a>
			    </div>
			    <!-- /.social-auth-links -->

			    <br>
			    <a href="/register" class="text-center">I don't have account yet</a>

			  </div>
			  <!-- /.login-box-body -->
			</div>
			



		</div>
	</col-md-12>
</div>



@stop

