<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src=  "{{ asset('dist/img/user2-160x160.jpg') }}"
         class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="admin/dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
        
          </li>
          
         @if(Auth::user()->user_type == 1)
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                User details
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/student_details" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Students</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Teachers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Other staffs</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item">
            <a href="/calender" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
              Holiday calender
              </p>
            </a>
       </li>
        @elseif(Auth::user()->user_type == 3)

        <li class="nav-item">
            <a href="/calender" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
              profile
              </p>
            </a>
       </li>
       <li class="nav-item">
            <a href="/calender" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
              Assignments
              </p>
            </a>
       </li>
       <li class="nav-item">
            <a href="/calender" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
              Attendance
              </p>
            </a>
       </li>
       <li class="nav-item">
            <a href="/calender" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
              Fees & Clearance
              </p>
            </a>
       </li>
      @endif
     
          
         
            
           
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>