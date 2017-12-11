<div class="content">
    <br>
    <div class="col-md-12 text-center"><p style="font-size: 21px;">Compatible components : <span style="color:red;">{{ $search }}</span><br></p></div>
    <div class="col-md-10 col-md-offset-1">
   		<div class="box-body">
   			{{-- ram --}}
			@foreach ($recomRam as $ram)
			@endforeach
			<div class="col-md-4">
				<center>
						{{ substr(strip_tags(ucfirst($ram->component_name)), 0, 35) }}
						{{ strlen(strip_tags(ucfirst($ram->component_name))) > 35 ? '...' : "" }} <br>
					<kbd>Memory</kbd>
					
				</center>
				<div class="box-body">
					{{-- @if(!empty($component->component_image)) --}}
						
						<img src="{{asset('upload/component/image/' . $ram->component_image)}}" class="img-thumbnail" style="height: 200px; width: auto;">
					{{-- @else --}}
						{{-- <center> --}}
							{{-- <img src="/upload/no-image/not_found.jpeg" class="img-thumbnail" style="height: 200px; width: 200px;"> --}}
						{{-- </center> --}}
					{{-- @endif --}}
					
				</div>
			</div>

			{{-- hdd --}}
			@foreach ($recomHDD as $hdd)
			@endforeach
			<div class="col-md-4">
				<center>
						{{ substr(strip_tags(ucfirst($hdd->component_name)), 0, 35) }}
						{{ strlen(strip_tags(ucfirst($hdd->component_name))) > 35 ? '...' : "" }} <br>
					<kbd>HDD</kbd>
					
				</center>
				<div class="box-body">
					{{-- @if(!empty($component->component_image)) --}}
						
						<img src="{{asset('upload/component/image/' . $hdd->component_image)}}" class="img-thumbnail" style="height: 200px; width: auto;">
					{{-- @else --}}
						{{-- <center> --}}
							
							{{-- <img src="/upload/no-image/not_found.jpeg" class="img-thumbnail" style="height: 200px; width: 200px;"> --}}
						{{-- </center> --}}
					{{-- @endif --}}
					
				</div>
			</div>

			{{-- hdd --}}
			@foreach ($recomMOBO as $mobo)
			@endforeach
			<div class="col-md-4">
				<center>
						{{ substr(strip_tags(ucfirst($mobo->component_name)), 0, 35) }}
						{{ strlen(strip_tags(ucfirst($mobo->component_name))) > 35 ? '...' : "" }} <br>
					<kbd>Motherboard</kbd>
					
				</center>
				<div class="box-body">
					{{-- @if(!empty($component->component_image)) --}}
						
						<img src="{{asset('upload/component/image/' . $mobo->component_image)}}" class="img-thumbnail" style="height: 200px; width: 200px">
					{{-- @else --}}
						{{-- <center> --}}
							
							{{-- <img src="/upload/no-image/not_found.jpeg" class="img-thumbnail" style="height: 200px; width: 200px;"> --}}
						{{-- </center> --}}
					{{-- @endif --}}
					
				</div>
			</div>
		
		</div>
    </div>

</div>