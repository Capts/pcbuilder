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

		<div class="content" >
			  @if (Session::has('success'))

			  <div class="alert alert-success" role="alert">
			    <div class="box-tools pull-right">
			      {{-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
 --}}
			    </div>
			    <i class="fa fa-check"></i>&nbsp;{{ Session::get('success')}} 
			  </div>
			@endif


			
			<div class="box box-danger">
				<div class="box box-header">
					
				</div>
				<div class="box-body">
					@foreach ($allComponents as $component)
						<div class="col-md-3">
							<div class="box">
								<div class="box-header">
									<center><a href="{{ route('component.show', $component->id) }}">
									{{ substr(strip_tags($component->component_name), 0, 35) }}
									{{ strlen(strip_tags(ucfirst($component->component_name))) > 35 ? '...' : "" }}</a></center>
								</div>
								<div class="box-body">
									@if(!empty($component->component_image))
										<img src="{{asset('upload/component/image/' . $component->component_image)}}" class="img-thumbnail" style="height: 200px; width: auto;">
									@else
										<center><img src="/upload/no-image/not_found.jpeg" class="img-thumbnail" style="height: 200px; width: 200px;"></center>
									@endif
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>

		
			
		</div>
	</div>
</div>

@endsection
