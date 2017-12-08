<section class="navbar navbar-inverse" style="margin-top: 0px;font-size: 18px;" id="resizenavitems">
	
	<div class="container">
		<div class="navbar-header">

		    <!-- Collapsed Hamburger -->
		    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#burger">
		        <span class="sr-only">Toggle Navigation</span>
		        <span class="icon-bar" style="background-color: white;"></span>
		        <span class="icon-bar" style="background-color: white;"></span>
		        <span class="icon-bar" style="background-color: white;"></span>
		    </button>
		  
		</div>



		<div class="collapse navbar-collapse" id="burger">

			<ul class="nav navbar-nav " style="margin-top: 15px;">
				<li>
					
					<a href="{{ url('/') }}" style="color:#e28726">
					{{-- <img src="img/logo.png" width="50px" height="40px" alt=""> --}}
				    <span style="font-family: 'Luckiest Guy', cursive;font-size: 45px;">PC</span>
				    <span style="font-family: 'Luckiest Guy', cursive;font-size: 25px;">MOD </span>
				    {{-- <span style="font-size: 40px;">|</span> --}}
				</a>
				</li>
				@guest
					<li><a href="{{ route('system-build.index') }}">System Build</a></li>
					<li><a href="#">Build Guides</a></li>
					{{-- <li><a href="#">Complete Builds</a></li> --}}
					<li><a href="#">Components</a></li>

				@else
					@if(auth()->user()->roles()->first()->name == 'admin')
						<li><a href="/">Home</a></li>
						<li><a href="{{ route('dash') }}">Dashboard</a></li>

					@elseif(auth()->user()->roles()->first()->name == 'client')
						<li><a href="{{ route('system-build.index') }}">System Build</a></li>
						<li><a href="#">Build Guides</a></li>
						{{-- <li><a href="#">Complete Builds</a></li> --}}
						<li><a href="#">Components</a></li>

						
					@endif

				@endguest
				
				

			</ul>


			<ul class="nav navbar-nav navbar-right " style="background-color: transparent;margin-top: 15px;">
			    <!-- Authentication Links -->
			    @guest
			    	
		    	      {{-- <ul class="nav navbar-nav navbar-right" > --}}
		    	        {{-- <li class="dropdown">
		    	          <a href="#" class="dropdown-toggle navtxt" data-toggle="dropdown">Register </a>
		    	          <ul class="dropdown-menu dropdown-lr animated flipInX" role="menu" style="background-color: white;width: 290px;">
		    	            <div class="col-lg-12">
		    	              <div class="text-center">
		    	                <h3><b>Register</b></h3></div>
		    	             
		    	              @include('auth.register_modified')
		    	            </div>
		    	          </ul>
		    	        </li> --}}
		    	        <li class="dropdown">
		    	          <a href="#" class="dropdown-toggle navtxt btn-flat bg-red" data-toggle="dropdown">Sign in {{-- <span class="caret"></span> --}}</a>
		    	          <ul class="dropdown-menu dropdown-lr animated flipInX" role="menu" style="background-color: white;width:300px;">
		    	            <div class="col-lg-12">
		    	              <div class="text-center">
		    	                <h3><b>Sign in</b></h3></div>
		    	            
		    	              @include('auth.login_modified')
		    	            </div>
		    	          </ul>
		    	        </li>
		    	      {{-- </ul> --}}
			        {{-- <li><a href="{{ route('login') }}">Login</a></li> --}}
			        {{-- <li><a href="{{ route('register') }}">Register</a></li> --}}
			    @else
			        <li class="dropdown user user-menu">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			            <img src="{{ Storage::url(auth()->user()->avatar) }}" class="user-image" alt="User Image">
			            <span class="hidden-xs">{{ ucfirst(auth()->user()->firstname) . ' ' .ucfirst(auth()->user()->lastname) }}</span>
			            
			            
			          </a>
			          <ul class="dropdown-menu" style="background-color: #212121;">
			            <!-- User image -->
			            <li class="user-header">
			              <img src="{{ Storage::url(auth()->user()->avatar) }}" class="img-circle" alt="User Image">
							@if (auth()->user()->roles()->first()->name == 'admin')
								 <h6><span class="label label-danger" style="border-radius: 10px 10px;font-size: 10px;">admin</span></h6>
							@else

							@endif
								
			              <p>
			                {{ ucfirst(auth()->user()->firstname) . ' ' .ucfirst(auth()->user()->lastname) }} 
			                
			                <small>Member since {{ date('M j,Y', strtotime(Auth::getUser()->created_at)) }}</small>
			              </p>
			           

			            </li>
			            <!-- Menu Body -->
			            
			            <li class="user-body">
			              <div>
                     
                            <a  href="{{ route('logout') }}" class="btn btn-flat btn-block"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>

			              </div>
			            </li>
			          </ul>
			        </li>
			    @endguest
			</ul>
		</div><!--/.nav-collapse -->


	</div>

	

</section>