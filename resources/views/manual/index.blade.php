@extends('layouts.app')

@section('title', 'Build pc manually')

@section('content')

<div class="container ">
	<div class="row">
		<div class="col-md-2">
			<div class="box box-danger">
				<div class="box-header with-border text-center">
					<h4 class="box-title">Build overview</h4>
				</div>
				<div class="box-body">
					
				</div>
			</div>
		</div>

		<div class="col-md-6">
			@guest
				<p class="alert alert-danger"><i class="fa fa-exclamation-circle"> </i> Consider signing up to avail awesome discounts</p>
			@else
			@endguest
			<div class="box box-danger">
				<div class="box-header with-border text-center">
					<h4 class="box-title">Put your hardware together</h4>
				</div>

				<div class="box-body">
					{!! Form::open(['method' => 'POST', 'class' => 'form-horizontal', 'style' => 'padding:20px 20px 20px']) !!}
						<label for="case">Chassis/Case</label>
					    <select  name="case" id="case" class="form-control input-lg">
					    	<option value="" selected disabled>...</option>
					    	<option value="" >1</option>
					    	<option value="" >1</option>
					    </select>

					    <label for="case">Motherboard</label>
					    <select  name="motherboard" id="motherboard" class="form-control input-lg">
					    	<option value="" selected disabled>...</option>
					    	<option value="" >1</option>
					    	<option value="" >1</option>
					    </select>

					    <label for="case">Processor</label>
					    <select  name="processor" id="processor" class="form-control input-lg">
					    	<option value="" selected disabled>...</option>
					    	<option value="" >1</option>
					    	<option value="" >1</option>
					    </select>

					    <label for="case">Memory</label>
					    <select  name="memory" id="memory" class="form-control input-lg">
					    	<option value="" selected disabled>...</option>
					    	<option value="" >1</option>
					    	<option value="" >1</option>
					    </select>

					    <label for="case">Hard Disk</label>
					    <select  name="hdd" id="hdd" class="form-control input-lg">
					    	<option value="" selected disabled>...</option>
					    	<option value="" >1</option>
					    	<option value="" >1</option>
					    </select>
					
					    
					<div class="text-center" >
						<br>
						<button class="btn btn-flat btn-danger btn-lg" style="width: 420px;">Build!</button>
					</div>
					{!! Form::close() !!}
					
				</div>
			
			</div>
		</div>
		<div class="col-md-4">
			<div class="box box-danger">
				<div class="box-header with-border  text-center">
					<h4 class="box-title">Find components</h4>
				</div>
				<div class="box-body">
					  <div class="input-group">
					    <input type="text" name="search" id="search" class="form-control input-lg" placeholder="e.g core i9 processor">
					    <span class="input-group-btn">
					      <button type="submit"  id="search-btn" class="btn btn-flat bg-olive btn-lg"><i class="fa fa-search"></i>
					      </button>
					    </span>
					  </div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop