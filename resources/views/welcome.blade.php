@extends('layouts.app')


@guest
	@section('title', 'Welcome builders!' )
@else
	@if (auth()->user()->roles->first()->name == 'admin')
		@section('title', 'Admin panel |' . auth()->user()->firstname  )
	@else
		@section('title', 'Welcome builder |' . auth()->user()->firstname  )
	@endif
@endguest


@section('content' )

<div class="wrapper">
	@guest
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8">
					<div class="content">
						<p class="text-center" style="font-size: 40px;color:white;">
							BUILD YOUR OWN PC
						</p>
						<div class="col-md-3 col-md-offset-1">
							<div class="well">
								<br>
								<br>
								<br>
								<br>
								<br>
							</div>
						</div>
						<div class="col-md-8" style="border-radius: 0px;">
							<div class="well">
								<br>
								<br>
								<br>
								<br>
								<br>
								<br>
							</div>
						</div>
						<div class="col-md-12">
							{{-- <div class="well"> --}}
								<br><br>
								<br><br>
								<br><br>
								<br><br>
							{{-- </div> --}}
						</div>
						
					</div>
				</div>
				<div class="col-md-4 hidden-sm hidden-xs">
					<p class="text-left text-default" >
						In order to avail some <i class="label label-danger"> discount</i> <br>Consider registering an account. <br>It's easy and FREE!
					</p>
					<a href="#" class="dropdown-toggle btn btn-flat btn-primary" data-toggle="dropdown">Register now!</a>
					<ul class="dropdown-menu dropdown-lr animated flipInX" role="menu" style="background-color: white;width: 300px;">
					  <div class="col-lg-12">
					    <div class="text-center">
					      <h3><b>Register</b></h3>
					  	</div>
					   
					    @include('auth.register_modified')
					  </div>
					</ul>
				
				</div>
			</div>
			
		</div >

	@else
		@if (auth()->user()->roles->first()->name == 'admin')
			{{-- @include('partials.nav') --}}
			@include('partials.header')
				<div class="content">
					saf
					as
					f
				</div>
		@else
			sss
		@endif

	@endguest

	
	
</div>


@stop
{{-- 
<div class="box-body">
	@if (auth()->user()->roles()->first()->name =='admin')
	<!-- go to admin GUI-->
		@include('partials.sidebar')
	@else
		<!-- go to client GUI-->
		<div class="col-md-6">
			{!! Form::open(['method' => 'POST',  'class' => 'form-horizontal']) !!}
				
				    boottext
				
				    <div class="btn-group pull-right">
				        {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
				        {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
				    </div>
				
				{!! Form::close() !!}	
		</div>

		<div class="col-md-6">
			ss
		</div>
	@endif
	
</div> --}}