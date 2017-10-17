<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ Storage::url(auth()->user()->avatar) }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ ucfirst(auth()->user()->firstname). ' ' . ucfirst(auth()->user()->lastname) }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    

    </div>
    <!-- search form -->
    {{-- <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form> --}}
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header"><b><center>N A V I G A T I O N</center></b></li>
      <li><a href="/"><i class="fa fa-home"></i> <span>Home</span></a></li>
      <li><a href="{{ route('dash') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-television"></i> <span>Components</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-down pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">

          <li><a href="#" data-toggle="modal" data-target="#add_modal"><i class="fa fa-plus-circle text-orange"></i> Add component</a></li>
          <li><a href="{{ route('component.index') }}"><i class="fa fa-th-large text-orange"></i> View all components</a></li>
        </ul>
      </li>
      
      
     
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>