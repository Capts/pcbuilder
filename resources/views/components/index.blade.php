@extends('layouts.app')

@section('title', 'PC Builder | All components')
<!--  ucfirst($com->component_name) -->
@section('content')

<div class="wrapper">
	@include('admins.admin-nav')
	@include('partials.sidebar')
	@include('components.modals.add_component_modal')
	<div class="content-wrapper">

		<!-- Content Header (Page header) -->
		<section class="content-header">
		  <h1>
		    <i class="fa fa-television"></i> All components  
		    <small class="text-gray"></small>
		  </h1>
		  <ol class="breadcrumb">
		    <li><a href="{{ route('dash') }}"><i class="fa fa-dashboard"></i>  Dashboard</a></li>
		    <li><a href="{{ route('dash') }}"><i class="fa fa-television"></i>  Component</a></li>
		    <li><a href="{{ route('dash') }}"><i class="fa fa-microchip"></i>  All components</a></li>
		  </ol>
		</section>

		<div class="content">
			  @if (Session::has('success'))

			  <div class="alert alert-success" role="alert">
			    <div class="box-tools pull-right">
			      {{-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
 --}}
			    </div>
			    <i class="fa fa-check"></i>&nbsp;{{ Session::get('success')}} 
			  </div>
			@endif

		
			
		</div>
	</div>
</div>

@endsection
