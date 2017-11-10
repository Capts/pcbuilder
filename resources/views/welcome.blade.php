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
		
		<div class="container-fluid" style="margin-top:50px;">
			<div class="row">
				{{-- <div class="col-md-8">
					<div class="content" style="margin-bottom: 520px;">
						<p class="text-center" style="font-size: 40px;color:black;">
							Generate your build
						</p>
						<br>
						<div class="col-md-12 text-center">
							<button class="btn btn-flat bg-red btn-lg" style="width: 420px;">Gaming Rig</button><br><br>
							<button class="btn btn-flat bg-red btn-lg" style="width: 420px;">Office PC</button><br>
							<h3>or</h3>
							<a href="{{ route('manual.index') }}" class="btn btn-flat btn-primary btn-lg" style="width: 420px;">Manually build my pc</a>
						</div>	
						<br>
						<br>
						
						
					</div>
				</div> --}}
				<div class="col-md-4 hidden-sm hidden-xs">
					<p class="text-left text-default" style="font-size: 18px">
						In order to avail some <i class="label label-danger"> discount</i> <br>Consider registering an account. <br>It's easy and FREE!
					</p>
					<a href="#" class="dropdown-toggle btn btn-flat btn-info btn-lg" data-toggle="dropdown">Register now</a>
				
						<ul class="dropdown-menu dropdown-lr animated slideX" role="menu" style="background-color: white;width: 300px;">
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

			@include('partials.header')
				<div class="content">
					saf
					as
					f
				</div>
		@else
			
		@endif

	@endguest
	<div class="container-fluid" style="margin-top:50px;">
			<div class="row">
				<div class="col-md-8">
					<div class="content" style="margin-bottom: 520px;">
						<p class="text-center" style="font-size: 40px;color:black;">
							Generate your build
						</p>
						<br>
						<div class="col-md-12 text-center">
							<button class="btn btn-flat bg-red btn-lg" style="width: 420px;">Gaming Rig</button><br><br>
							<button class="btn btn-flat bg-red btn-lg" style="width: 420px;">Office PC</button><br>
							<h3>or</h3>
							<a href="{{ route('manual.index') }}" class="btn btn-flat btn-primary btn-lg" style="width: 420px;">Manually build my pc</a>
						</div>	
						<br>
						<br>
						
						
					</div>
				</div>
				<div class="col-md-4">
					<p class="text-center">Latest builds</p>
				</div>
				
			</div>
			
		</div >
	
	
</div>


@stop
