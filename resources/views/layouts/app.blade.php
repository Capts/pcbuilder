<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('partials.head')
</head>
@guest
  <body style="background-color:#B0BEC5;font-family: 'Changa', sans-serif;">

      <div id="app">
          {{-- @include('partials.nav') --}}
          @include('partials.header')

          @yield('content')
        
          @include('partials.footer')
      </div>
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}"></script>
      <script src="{{ asset('js/adminlte.min.js') }}"></script>
      <script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>

  </body>
@else

  @if (auth()->user()->roles->first()->name == 'admin')
    <body class="hold-transition skin-red  sidebar-mini" style="font-family: 'Changa', sans-serif;">
      
      
      <div id="app">

          @yield('content')
        
        @include('partials.footer')
      </div>
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}"></script>
      <script src="{{ asset('js/adminlte.min.js') }}"></script>
      <script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>
  </body>
  @else
    <body style="background-color:#B0BEC5;font-family: 'Changa', sans-serif;">

        <div id="app">
            {{-- @include('partials.nav') --}}
            @include('partials.header')

            @yield('content')
          
            @include('partials.footer')
        </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/adminlte.min.js') }}"></script>
        <script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>

    </body>

  @endif
@endguest

</html>



  