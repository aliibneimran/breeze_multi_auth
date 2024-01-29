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
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#email" aria-expanded="false" aria-controls="email"><i class="mdi mdi-email"></i><span class="nav-text">email</span><b class="caret"></b>
                    </a>
                    <ul class="collapse" id="email" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li><a class="sidenav-item-link"href="email-inbox.html"><span class="nav-text">Email Inbox</span></a></li>
                            <li><a class="sidenav-item-link" href="email-details.html"><span class="nav-text">Email Details</span></a></li>
                        </div>
                    </ul>
                </li>
                {{-- Jobs --}}
                <li class="has-sub">
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#email" aria-expanded="false" aria-controls="email"><i class="mdi mdi-email"></i><span class="nav-text">Message</span><b class="caret"></b>
                  </a>
                  <ul class="collapse" id="email" data-parent="#sidebar-menu">
                      <div class="sub-menu">
                          <li><a class="sidenav-item-link"href="email-inbox.html"><span class="nav-text">Email Inbox</span></a></li>
                          <li><a class="sidenav-item-link" href="email-details.html"><span class="nav-text">Email Details</span></a></li>
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
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#email" aria-expanded="false" aria-controls="email"><i class="mdi mdi-email"></i><span class="nav-text">email</span><b class="caret"></b>
                    </a>
                    <ul class="collapse" id="email" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li><a class="sidenav-item-link"href="email-inbox.html"><span class="nav-text">Email Inbox</span></a></li>
                            <li><a class="sidenav-item-link" href="email-details.html"><span class="nav-text">Email Details</span></a></li>
                        </div>
                    </ul>
                </li>
            </ul>                
            @endif
      </div>
  </div>
</aside>
