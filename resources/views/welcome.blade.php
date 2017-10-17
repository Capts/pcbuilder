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
			
			<br>
			<div class="col-md-6 col-md-offset-3" style="height: 420px">
				<!-- search form -->
				<form action="#" method="get" class="sidebar-form">
					{{ csrf_field() }}
				<label for="q">Search components</label>
				  <div class="input-group">

				    <input type="text" name="q" class="form-control" placeholder="Search...">
				    <span class="input-group-btn">
				          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
				          </button>
				        </span>
				  </div>
				</form>
				<!-- /.search form -->
			</div>
		</div >

	@else
		@if (auth()->user()->roles->first()->name == 'admin')
			@include('partials.nav')
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