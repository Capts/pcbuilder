@extends('layouts.app')

@section('title', 'PC Builder | ' . ucfirst($com->component_name))
<!--  ucfirst($com->component_name) -->
@section('content')

@include('components.modals.edit_component_modal')
<div class="wrapper">
	@include('admins.admin-nav')
	@include('partials.sidebar')
	<div class="content-wrapper">

		<!-- Content Header (Page header) -->
		<section class="content-header">
		  <h1>
		    <i class="fa fa-television"></i> Component
		    <small class="text-gray"></small>
		  </h1>
		  <ol class="breadcrumb">
		    <li><a href="{{ route('dash') }}"><i class="fa fa-dashboard"></i>  Dashboard</a></li>
		    <li><a href="{{ route('dash') }}"><i class="fa fa-television"></i>  Component</a></li>
		    <li><a href="{{ route('dash') }}"><i class="fa fa-microchip"></i>  {{ $com->component_name }}</a></li>
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

			<div class="row text-center" style="margin-top: 80px;">
				<div class="col-md-2 col-md-offset-2 no-padding">
					<!-- component image -->
					<img src="{{ Storage::url(auth()->user()->avatar) }}" alt="" class="img-thumbnail">	
					
				</div>
				<div class="col-md-6 text-left visible-lg visible-md">
					<h4 class=""><b>{{ $com->component_name }}</b>
							<span class="pull-right"><a href="#" class="btn btn-flat btn-primary btn-sm" data-toggle="modal"  data-target="#edit_modal"><i class="fa fa-pencil"> </i></a></span>
					</h4>
					<small class="" style="margin-top: none;">{{ date('M j,Y', strtotime(Auth::getUser()->created_at)) }}</small>


					<h5>
						{{ ucfirst($com->component_desc) }}
					</h5>


					<h5>
						<b>₱ </b>{{ number_format($com->component_price, 2) }}
					</h5>


					<h5>
						{{ $com->component_qty }} <kbd>stocks left</kbd>
					</h5>
				
						
						
					
				</div>
				<div class="col-md-6 visible-xs visible-sm">
					<br>
					<h4 class=""><b>{{ $com->component_name }}</b>
						<span><a href="#" class="btn btn-flat btn-primary btn-sm" data-toggle="modal"  data-target="#edit_modal"><i class="fa fa-pencil"> </i></a></span>
					</h4>
					<small class="" style="margin-top: none;">{{ date('M j,Y', strtotime(Auth::getUser()->created_at)) }}</small>

					<h5>
						{{ ucfirst($com->component_desc) }}
					</h5>


					<h5>
						<b>₱ </b>{{ number_format($com->component_price, 2) }}
					</h5>

					<h5>
						{{ $com->component_qty }} <kbd>stocks left</kbd>
					</h5>
				</div>
				
			</div>
			
		</div>
	</div>
</div>

@endsection
