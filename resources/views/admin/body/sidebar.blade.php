@php
  $prefix = Request::route()->getPrefix();
  $route = Route::current()->getName();
@endphp




  <aside class="main-sidebar light-skin">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">
						  <img src="{{ asset('backend/images/seu.png') }}" style="width: 30px; height:30px">
						  <h3><b>UMS</b>  Admin</h3>
					 </div>
				</a>
			</div>
        </div>

      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">

		<li class="{{ ($route == 'dashboard'?'active':'') }}">
          <a href="{{ route('dashboard') }}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>

        <li class="treeview {{ ($prefix == '/users'?'active':'') }}">
          <a href="#">
            <i data-feather="link"></i>
            <span>Manage User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('user.view') }}"><i class="ti-more"></i>View User</a></li>
            <li><a href="{{ route('user.add') }}"><i class="ti-more"></i>Add User</a></li>
          </ul>
        </li>

        <li class="treeview {{ ($prefix == '/profile'?'active':'') }}">
          <a href="#">
            <i data-feather="link"></i> <span>Manage Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('profile.view') }}"><i class="ti-more"></i>Your Profile</a></li>
            <li><a href=""><i class="ti-more"></i>Change Password</a></li>
          </ul>
        </li>

        <li class="treeview {{ ($prefix == '/student'?'active':'') }}">
          <a href="#">
            <i data-feather="link"></i> <span>Manage Student</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i> 
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('student.reg.view') }}"><i class="ti-more"></i>Student Registration</a></li>
            <li><a href=""><i class="ti-more"></i>Student Semester Fee</a></li> 
          </ul>
        </li>


        <li class="treeview {{ ($prefix == '/employee'?'active':'') }}">
            <a href="#">
              <i data-feather="link"></i>
              <span>Manage Employee</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('employee.view') }}"><i class="ti-more"></i>View Employee</a></li>
              <li><a href="{{ route('employee.add') }}"><i class="ti-more"></i>Add Employee</a></li>
            </ul>
        </li>


          <li class="treeview {{ ($prefix == '/faculty'?'active':'') }}">
            <a href="#">
              <i data-feather="link"></i>
              <span>Manage Faculty</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              
              <li><a href="{{ route('faculty.view') }}"><i class="ti-more"></i>View Faculty</a></li>
              <li><a href="{{ route('faculty.add') }}"><i class="ti-more"></i>Add Faculty</a></li>
            </ul>
          </li>



          <li class="treeview {{ ($prefix == '/course'?'active':'') }}">
            <a href="#">
              <i data-feather="link"></i>
              <span>Manage Course</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              
              <li><a href="{{ route('course.view') }}"><i class="ti-more"></i>View Course</a></li>
              <li><a href="{{ route('course.add') }}"><i class="ti-more"></i>Add Course</a></li>
            </ul>
          </li>

          <li class="treeview {{ ($prefix == '/department'?'active':'') }}">
            <a href="#">
              <i data-feather="link"></i>
              <span>Manage Department</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              
              <li><a href="{{ route('department.view') }}"><i class="ti-more"></i>View Department</a></li>
              <li><a href="{{ route('department.add') }}"><i class="ti-more"></i>Add Department</a></li>
            </ul>
          </li>



		<li>
          <a href="auth_login.html">
            <i data-feather="lock"></i>
			<span>Log Out</span>
          </a>
        </li>

      </ul>
    </section>

	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>
