
<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
      <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
      <!-- nav bar -->
      <div class="w-100 mb-4 d-flex">
        <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ route('dashboard') }}">
          <b>Medtronix</b>
        </a>
      </div>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
          <a href="#profile" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-user fe-16"></i>
            <span class="ml-3 item-text">Profile</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="profile">
            <li class="nav-item active">
              <a class="nav-link pl-3" href="/dashboard"><span class="ml-1 item-text">Overview</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="{{ route('profile.settings') }}"><span class="ml-1 item-text">Settings</span></a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a href="#Employee" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-user fe-16"></i>
            <span class="ml-3 item-text">Employee</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="Employee">
            <li class="nav-item active">
              <a class="nav-link pl-3" href="{{ route('employees.create') }}"><span class="ml-1 item-text">Add</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="{{ route('employees.index') }}"><span class="ml-1 item-text">List</span></a>
            </li>
          </ul>
        </li>
      </ul> 
    </nav>
  </aside>