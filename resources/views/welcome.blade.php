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
				<div class="col-md-8">
					<div class="col-md-12 col-lg-8 col-lg-offset-2">
						<p class="text-center" style="font-size: 40px;color:black;">
							Start building!
						</p>
						<br>
						{!! Form::open(['method' => 'GET', 'route' => 'find', 'class' => 'sidebar-form' ]) !!}
						<div class="input-group">
			              <input type="text" name="searchApp" class="form-control input-lg" placeholder="Find components" required>
			              <span class="input-group-btn">
			                <button type="submit"  id="search-btn" class="btn btn-flat btn-danger btn-lg"><i class="fa fa-search"></i>
			                </button>
			              </span>
			            </div>
			             {!! Form::close() !!}
						
						
						
					</div>
					<div class="col-md-12">
						<!-- new components -->
						@if (url()->current() == $uri)
							@include('partials.compatible')
						@else

							@include('partials.carousel')
						@endif

						<!-- recommendation -->
					</div>

				</div>


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
		@else	
		@endif

	@endguest
	
	
	
</div>


@stop
