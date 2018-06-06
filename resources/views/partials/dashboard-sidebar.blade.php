<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/uploads/avatars/{{ Auth::user()->avatar }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <!-- Optionally, you can add icons to the links -->
        <li {{ ((Request::segment(1) == "dashboard") ? 'class=active' : '') }}>
          <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>
        <li {{ ((Request::segment(1) == "employee") ? 'class=active' : '') }}>
          <a href="{{ url('employee') }}">
            <i class="pe-7s-user-female" style="font-weight: bold;"> <span>Employees</span></i>
          </a>
        </li>
        <li {{ ((Request::segment(1) == "department") ? 'class=active' : '') }}>
          <a href="{{ url('department') }}"><i class="pe-7s-keypad" style="font-weight: bold;"> <span>Department</span></i></a>
        </li>
        <li {{ ((Request::segment(1) == "news") ? 'class=active' : '') }}>
          <a href="{{ route('news') }}"><i class="fa fa-newspaper-o"></i> <span>News &amp; Regulatory</span></a>
        </li>
        <li {{ ((Request::segment(1) == "policy") ? 'class=active' : '') }}>
          <a href="#"><i class="fa fa-file-text-o"></i> <span>Policies &amp; Procedures</span></a>
        </li>
        <li {{ ((Request::segment(1) == "directory") ? 'class=active' : '') }}>
          <a href="#"><i class="fa fa-users"></i> <span>Directories</span></a>
        </li>
        <li {{ ((Request::segment(1) == "form") ? 'class=active' : '') }}>
          <a href="#"><i class="fa fa-pencil-square-o"></i> <span>e-Forms</span></a>
        </li>
        <li {{ ((Request::segment(1) == "blog") ? 'class=active' : '') }}>
          <a href="#"><i class="fa fa-wordpress"></i> <span>Blogs</span></a>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active">
              <a href="{{route('profile')}}">Profile</a>
            </li>
            <li><a href="#">Change Password</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>