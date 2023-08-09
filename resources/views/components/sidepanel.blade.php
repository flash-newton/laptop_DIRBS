
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidepanel sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="/home">
            <i class="mdi mdi-home menu-icon"></i>
            <span class="menu-title">Home</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/devices">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Device</span>
            </a>
          </li>

          @can('isSuperAdmin')
          <li class="nav-item">
            <a class="nav-link" href="/users">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Users</span>
            </a>
          </li>
          @endcan
          
    
        
      </ul>
    </nav>
    <!-- partial -->
    