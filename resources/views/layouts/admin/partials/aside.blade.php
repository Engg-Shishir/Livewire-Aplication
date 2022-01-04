
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          {{-- <img src="{{ auth()->user()->avatar_url }}" id="profileImage"  class="img-circle elevation-2" alt="User Image"> --}}
          <img src="{{ auth()->user()->avatar_url }}" id="profileImage"  class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          {{-- <a href="#" class="d-block" x-ref="username">{{ auth()->user()->name }}</a> --}}
          <a href="#" class="d-block" x-ref="username">{{ auth()->user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->is('admin/dashboard') ? 'active': '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a x-ref="profileLink" target="_blank" href="/clear-cache" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Cache Clear
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link {{ request()->is('admin/users') ? 'active': '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                 Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.users') }}" class="nav-link {{ request()->is('admin/users') ? 'active': '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User List</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="{{ route('admin.appoinments') }}" class="nav-link {{ request()->is('admin/appoinments') ? 'active': '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Appoinments
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a x-ref="profileLink" href="" class="nav-link {{ request()->is('admin/profile') ? 'active' : '' }}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a href="" onclick="event.preventDefault(); this.closest('form').submit();" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Logout
                </p>
              </a>
            </form>
          </li>

           <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>