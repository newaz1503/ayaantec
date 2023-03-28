<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{url('admin/dashboard')}}">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-controls="auth">
          <i class="mdi mdi-account menu-icon"></i>
          <span class="menu-title">Users</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('admin/edit-user',Auth::guard('admin')->user()->id)}}"> Manage profile </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('admin/all-users')}}"> All users </a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-controls="auth">
          <i class="mdi mdi-account menu-icon"></i>
          <span class="menu-title">Manage Menubar</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('view_menu')}}"> View Menu</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.ceo')}}">
          <i class="mdi mdi-view-headline menu-icon"></i>
          <span class="menu-title">CEO</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('admin/banner/index')}}">
          <i class="mdi mdi-view-headline menu-icon"></i>
          <span class="menu-title">Banners</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('admin/services/index')}}">
          <i class="mdi mdi-chart-pie menu-icon"></i>
          <span class="menu-title">Services</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('admin/product/index')}}">
          <i class="mdi mdi-wallet-travel menu-icon"></i>
          <span class="menu-title">Products</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('admin/news/index')}}">
          <i class="mdi mdi-newspaper menu-icon"></i>
          <span class="menu-title">News</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/about/index') }}">
          <i class="mdi mdi-emoticon menu-icon"></i>
          <span class="menu-title">About</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/print') }}">
          <i class="mdi mdi-emoticon menu-icon"></i>
          <span class="menu-title">Print</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/money_receipt') }}">
          <i class="mdi mdi-emoticon menu-icon"></i>
          <span class="menu-title">Money Receipt</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/subs/index') }}">
          <i class="mdi mdi-forum menu-icon"></i>
          <span class="menu-title">Massages</span>
        </a>
      </li>
    </ul>
  </nav>
  <!-- partial -->
