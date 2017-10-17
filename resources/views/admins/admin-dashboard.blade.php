@extends('layouts.app')

@section('title', 'PC Builder | ' . ucfirst(Auth::user()->firstname). ' ' .ucfirst(Auth::user()->lastname) )

@section('content')

<div class="wrapper">
	@include('admins.admin-nav')
	@include('partials.sidebar')
	<div class="content-wrapper">
		
		<!-- Content Header (Page header) -->
		<section class="content-header">
		  <h1>
		    <i class="fa fa-dashboard"></i> Dashboard
		    <small class="text-gray">Welcome to your dashboard</small>
		  </h1>
		  <ol class="breadcrumb">
		    <li><a href="{{ route('dash') }}"><i class="fa fa-dashboard"></i>  Dashboard</a></li>
		  </ol>
		</section>

		<div class="content">
			<div class="row">
				<div class="col-lg-3 col-xs-6">
				  <!-- small box -->
				  <div class="small-box bg-aqua">
				    <div class="inner">
				      <h3 style="color:white;">150</h3>

				      <p>New Orders</p>
				    </div>
				    <div class="icon">
				      <i class="ion ion-bag"></i>
				    </div>
				    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				  </div>
				</div>
				<div class="col-lg-3 col-xs-6">
				  <!-- small box -->
				  <div class="small-box bg-green">
				    <div class="inner">
				      <h3 style="color:white;">53<sup style="font-size: 20px;">%</sup></h3>

				      <p>Bounce Rate</p>
				    </div>
				    <div class="icon">
				      <i class="ion ion-stats-bars"></i>
				    </div>
				    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				  </div>
				</div>
				<div class="col-lg-3 col-xs-6">
				  <!-- small box -->
				  <div class="small-box bg-yellow">
				    <div class="inner">
				      <h3 style="color:white;">44</h3>

				      <p>User Registrations</p>
				    </div>
				    <div class="icon">
				      <i class="ion ion-person-add"></i>
				    </div>
				    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				  </div>
				</div>
				<div class="col-lg-3 col-xs-6">
				  <!-- small box -->
				  <div class="small-box bg-red">
				    <div class="inner">
				      <h3 style="color:white;">44</h3>

				      <p>User Registrations</p>
				    </div>
				    <div class="icon">
				      <i class="ion ion-person-add"></i>
				    </div>
				    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				  </div>
				</div>
			</div>

			

		</div>
	</div>
</div>

@endsection
