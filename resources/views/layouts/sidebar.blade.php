<aside class="left-sidebar sidebar-dark" id="left-sidebar">
  <div id="sidebar" class="sidebar sidebar-with-footer">
      <!-- Aplication Brand -->
      <div class="app-brand">
          <a href="/index.html">
              <img src="{{asset('assets/images/logo.png')}}" alt="Mono" />
              <span class="brand-name">MONO</span>
          </a>
      </div>
      <!-- begin sidebar scrollbar -->
      <div class="sidebar-left" data-simplebar style="height: 100%">
          <!-- sidebar menu -->
            @if (Auth::guard('admin')->check())
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="active"><a class="sidenav-item-link" href="index.html"><i class="mdi mdi-briefcase-account-outline"></i><span class="nav-text">Admin Dashboard</span></a>
                </li>
                {{-- Jobs --}}
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#job" aria-expanded="false" aria-controls="email"><i class="mdi mdi-arrow-all"></i><span class="nav-text">Jobs</span><b class="caret"></b>
                    </a>
                    <ul class="collapse" id="job" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li><a class="sidenav-item-link"href="email-inbox.html"><span class="nav-text">All Jobs</span></a></li>
                            <li><a class="sidenav-item-link" href="email-details.html"><span class="nav-text">Add Job</span></a></li>
                        </div>
                    </ul>
                </li>
                {{-- Category --}}
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#category" aria-expanded="false" aria-controls="email"><i class="mdi mdi-arrow-all"></i><span class="nav-text">Categories</span><b class="caret"></b>
                    </a>
                    <ul class="collapse" id="category" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li><a class="sidenav-item-link"href="{{route('categories.index')}}"><span class="nav-text">All Categories</span></a></li>
                            <li><a class="sidenav-item-link" href="{{route('categories.create')}}"><span class="nav-text">Add Category</span></a></li>
                        </div>
                    </ul>
                </li>
                {{-- Location --}}
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#location" aria-expanded="false" aria-controls="email"><i class="mdi mdi-arrow-all"></i><span class="nav-text">Locations</span><b class="caret"></b>
                    </a>
                    <ul class="collapse" id="location" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li><a class="sidenav-item-link" href="{{route('locations.index')}}"><span class="nav-text">All Locations</span></a></li>
                            <li><a class="sidenav-item-link" href="{{route('locations.create')}}"><span class="nav-text">Add Location</span></a></li>
                        </div>
                    </ul>
                </li>
                {{-- Industry --}}
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#industry" aria-expanded="false" aria-controls="email"><i class="mdi mdi-arrow-all"></i><span class="nav-text">Industries</span><b class="caret"></b>
                    </a>
                    <ul class="collapse" id="industry" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li><a class="sidenav-item-link" href="{{route('industries.index')}}"><span class="nav-text">All Industries</span></a></li>
                            <li><a class="sidenav-item-link" href="{{route('industries.create')}}"><span class="nav-text">Add Industry</span></a></li>
                        </div>
                    </ul>
                </li>
            </ul>               
            @elseif(Auth::guard('company')->check())
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="active"><a class="sidenav-item-link" href="index.html"><i class="mdi mdi-briefcase-account-outline"></i><span class="nav-text">Company Dashboard</span></a>
                </li>
                {{-- Jobs --}}
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#job" aria-expanded="false" aria-controls="email"><i class="mdi mdi-arrow-all"></i><span class="nav-text">Jobs</span><b class="caret"></b>
                    </a>
                    <ul class="collapse" id="job" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li><a class="sidenav-item-link"href="{{route('jobs.index')}}"><span class="nav-text">All Jobs</span></a></li>
                            <li><a class="sidenav-item-link" href="{{route('jobs.create')}}"><span class="nav-text">Add Job</span></a></li>
                        </div>
                    </ul>
                </li>
            </ul>                
            @endif
      </div>
  </div>
</aside>
