<aside class="main-sidebar sidebar-dark-success elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('user.index')}}" class="brand-link">
      <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
          <a href="{{route('admin.dashboard.index')}}" class="nav-link {{Request::segment(2)=='dashboard' ? 'active' :''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="{{route('admin.posts.index')}}" class="nav-link {{Request::segment(2)=='posts' ? 'active' :''}}">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
               Answers
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.categories.index')}}" class="nav-link {{Request::segment(2)=='categories' ? 'active' :''}}">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Questions
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="{{route('admin.personal.index')}}" class="nav-link {{Request::segment(2)=='personal' ? 'active' :''}}">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Personals
              </p>
            </a>
          </li><li class="nav-item">
            <a href="{{route('admin.feedback.index')}}" class="nav-link {{Request::segment(2)=='feedback' ? 'active' :''}}">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Feedbacks
              </p>
            </a>
          </li>
           </li><li class="nav-item">
            <a href="{{route('admin.teacher.index')}}" class="nav-link {{Request::segment(2)=='teacher' ? 'active' :''}}">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Teachers
              </p>
            </a>
          </li>
           </li><li class="nav-item">
            <a href="{{route('admin.student.index')}}" class="nav-link {{Request::segment(2)=='student' ? 'active' :''}}">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Students
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.setting')}}" class="nav-link {{Request::segment(2)=='setting' ? 'active' :''}}">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Setting
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
