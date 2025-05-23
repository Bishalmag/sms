 <!-- Sidebar Menu -->
 <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <!-- Student Section -->
               <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Students
                <i class="fas fa-angle-left right"></i>
{{--                <span class="badge badge-info right">6</span>--}}
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('students.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Students</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('students.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Students</p>
                </a>
                </li>
  </ul>
</li>

                <!-- Faculty Section -->
                <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Faculty
                <i class="fas fa-angle-left right"></i>
{{--                <span class="badge badge-info right">6</span>--}}
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('faculty.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Faculty</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('faculty.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Faculty</p>
                </a>
                </li>
  </ul>
</li>

           <!-- Courses Section -->  
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Courses
                <i class="fas fa-angle-left right"></i>
{{--                <span class="badge badge-info right">6</span>--}}
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('courses.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Courses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('courses.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Courses</p>
                </a>
                </li>
  </ul>
</li>  

                <!-- Enrollment Section -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Enrollment
                <i class="fas fa-angle-left right"></i>
{{--                <span class="badge badge-info right">6</span>--}}
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('enrollment.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Enrollment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('enrollment.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Enrollment</p>
                </a>
                </li>
  </ul>
</li>

            <!-- Result Section -->
<li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Result
                <i class="fas fa-angle-left right"></i>
{{--                <span class="badge badge-info right">6</span>--}}
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('results.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Result</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('results.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Result</p>
                </a>
                </li>
  </ul>
</li>

{{--          <li class="nav-item">--}}
{{--            <a href="#" class="nav-link">--}}
{{--              <i class="nav-icon fas fa-edit"></i>--}}
{{--              <p>--}}
{{--                Forms--}}
{{--                <i class="fas fa-angle-left right"></i>--}}
{{--              </p>--}}
{{--            </a>--}}
{{--            <ul class="nav nav-treeview">--}}
{{--              <li class="nav-item">--}}
{{--                <a href="pages/forms/general.html" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>General Elements</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="nav-item">--}}
{{--                <a href="pages/forms/advanced.html" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>Advanced Elements</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="nav-item">--}}
{{--                <a href="pages/forms/editors.html" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>Editors</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="nav-item">--}}
{{--                <a href="pages/forms/validation.html" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>Validation</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--            </ul>--}}
{{--          </li>--}}
{{--          <li class="nav-item">--}}
{{--            <a href="#" class="nav-link">--}}
{{--              <i class="nav-icon fas fa-table"></i>--}}
{{--              <p>--}}
{{--                Tables--}}
{{--                <i class="fas fa-angle-left right"></i>--}}
{{--              </p>--}}
{{--            </a>--}}
{{--            <ul class="nav nav-treeview">--}}
{{--              <li class="nav-item">--}}
{{--                <a href="pages/tables/simple.html" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>Simple Tables</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="nav-item">--}}
{{--                <a href="pages/tables/data.html" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>DataTables</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="nav-item">--}}
{{--                <a href="pages/tables/jsgrid.html" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>jsGrid</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--            </ul>--}}
{{--          </li>--}}
{{--          <li class="nav-header">EXAMPLES</li>--}}
{{--          <li class="nav-item">--}}
{{--            <a href="pages/calendar.html" class="nav-link">--}}
{{--              <i class="nav-icon far fa-calendar-alt"></i>--}}
{{--              <p>--}}
{{--                Calendar--}}
{{--                <span class="badge badge-info right">2</span>--}}
{{--              </p>--}}
{{--            </a>--}}
{{--          </li>--}}
{{--          <li class="nav-item">--}}
{{--            <a href="pages/gallery.html" class="nav-link">--}}
{{--              <i class="nav-icon far fa-image"></i>--}}
{{--              <p>--}}
{{--                Gallery--}}
{{--              </p>--}}
{{--            </a>--}}
{{--          </li>--}}
{{--          <li class="nav-item">--}}
{{--            <a href="pages/kanban.html" class="nav-link">--}}
{{--              <i class="nav-icon fas fa-columns"></i>--}}
{{--              <p>--}}
{{--                Kanban Board--}}
{{--              </p>--}}
{{--            </a>--}}
{{--          </li>--}}
{{--          <li class="nav-item">--}}
{{--            <a href="#" class="nav-link">--}}
{{--              <i class="nav-icon far fa-envelope"></i>--}}
{{--              <p>--}}
{{--                Mailbox--}}
{{--                <i class="fas fa-angle-left right"></i>--}}
{{--              </p>--}}
{{--            </a>--}}
{{--            <ul class="nav nav-treeview">--}}
{{--              <li class="nav-item">--}}
{{--                <a href="pages/mailbox/mailbox.html" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>Inbox</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="nav-item">--}}
{{--                <a href="pages/mailbox/compose.html" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>Compose</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="nav-item">--}}
{{--                <a href="pages/mailbox/read-mail.html" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>Read</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--            </ul>--}}
{{--          </li>--}}
{{--          <li class="nav-item">--}}
{{--            <a href="#" class="nav-link">--}}
{{--              <i class="nav-icon fas fa-book"></i>--}}
{{--              <p>--}}
{{--                Pages--}}
{{--                <i class="fas fa-angle-left right"></i>--}}
{{--              </p>--}}
{{--            </a>--}}
{{--            <ul class="nav nav-treeview">--}}
{{--              <li class="nav-item">--}}
{{--                <a href="pages/examples/invoice.html" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>Invoice</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="nav-item">--}}
{{--                <a href="pages/examples/profile.html" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>Profile</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="nav-item">--}}
{{--                <a href="pages/examples/e-commerce.html" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>E-commerce</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="nav-item">--}}
{{--                <a href="pages/examples/projects.html" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>Projects</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="nav-item">--}}
{{--                <a href="pages/examples/project-add.html" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>Project Add</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="nav-item">--}}
{{--                <a href="pages/examples/project-edit.html" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>Project Edit</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="nav-item">--}}
{{--                <a href="pages/examples/project-detail.html" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>Project Detail</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="nav-item">--}}
{{--                <a href="pages/examples/contacts.html" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>Contacts</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="nav-item">--}}
{{--                <a href="pages/examples/faq.html" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>FAQ</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="nav-item">--}}
{{--                <a href="pages/examples/contact-us.html" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>Contact us</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--            </ul>--}}
{{--          </li>--}}
{{--          <li class="nav-item">--}}
{{--            <a href="#" class="nav-link">--}}
{{--              <i class="nav-icon far fa-plus-square"></i>--}}
{{--              <p>--}}
{{--                Extras--}}
{{--                <i class="fas fa-angle-left right"></i>--}}
{{--              </p>--}}
{{--            </a>--}}
{{--            <ul class="nav nav-treeview">--}}
{{--              <li class="nav-item">--}}
{{--                <a href="#" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>--}}
{{--                    Login & Register v1--}}
{{--                    <i class="fas fa-angle-left right"></i>--}}
{{--                  </p>--}}
{{--                </a>--}}
{{--                <ul class="nav nav-treeview">--}}
{{--                  <li class="nav-item">--}}
{{--                    <a href="pages/examples/login.html" class="nav-link">--}}
{{--                      <i class="far fa-circle nav-icon"></i>--}}
{{--                      <p>Login v1</p>--}}
{{--                    </a>--}}
{{--                  </li>--}}
{{--                  <li class="nav-item">--}}
{{--                    <a href="pages/examples/register.html" class="nav-link">--}}
{{--                      <i class="far fa-circle nav-icon"></i>--}}
{{--                      <p>Register v1</p>--}}
{{--                    </a>--}}
{{--                  </li>--}}
{{--                  <li class="nav-item">--}}
{{--                    <a href="pages/examples/forgot-password.html" class="nav-link">--}}
{{--                      <i class="far fa-circle nav-icon"></i>--}}
{{--                      <p>Forgot Password v1</p>--}}
{{--                    </a>--}}
{{--                  </li>--}}
{{--                  <li class="nav-item">--}}
{{--                    <a href="pages/examples/recover-password.html" class="nav-link">--}}
{{--                      <i class="far fa-circle nav-icon"></i>--}}
{{--                      <p>Recover Password v1</p>--}}
{{--                    </a>--}}
{{--                  </li>--}}
{{--                </ul>--}}
{{--              </li>--}}
{{--              <li class="nav-item">--}}
{{--                <a href="#" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>--}}
{{--                    Login & Register v2--}}
{{--                    <i class="fas fa-angle-left right"></i>--}}
{{--                  </p>--}}
{{--                </a>--}}
{{--                <ul class="nav nav-treeview">--}}
{{--                  <li class="nav-item">--}}
{{--                    <a href="pages/examples/login-v2.html" class="nav-link">--}}
{{--                      <i class="far fa-circle nav-icon"></i>--}}
{{--                      <p>Login v2</p>--}}
{{--                    </a>--}}
{{--                  </li>--}}
{{--                  <li class="nav-item">--}}
{{--                    <a href="pages/examples/register-v2.html" class="nav-link">--}}
{{--                      <i class="far fa-circle nav-icon"></i>--}}
{{--                      <p>Register v2</p>--}}
{{--                    </a>--}}
{{--                  </li>--}}
{{--                  <li class="nav-item">--}}
{{--                    <a href="pages/examples/forgot-password-v2.html" class="nav-link">--}}
{{--                      <i class="far fa-circle nav-icon"></i>--}}
{{--                      <p>Forgot Password v2</p>--}}
{{--                    </a>--}}
{{--                  </li>--}}
{{--                  <li class="nav-item">--}}
{{--                    <a href="pages/examples/recover-password-v2.html" class="nav-link">--}}
{{--                      <i class="far fa-circle nav-icon"></i>--}}
{{--                      <p>Recover Password v2</p>--}}
{{--                    </a>--}}
{{--                  </li>--}}
{{--                </ul>--}}
{{--              </li>--}}
{{--              <li class="nav-item">--}}
{{--                <a href="pages/examples/lockscreen.html" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>Lockscreen</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="nav-item">--}}
{{--                <a href="pages/examples/legacy-user-menu.html" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>Legacy User Menu</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="nav-item">--}}
{{--                <a href="pages/examples/language-menu.html" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>Language Menu</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="nav-item">--}}
{{--                <a href="pages/examples/404.html" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>Error 404</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="nav-item">--}}
{{--                <a href="pages/examples/500.html" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>Error 500</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="nav-item">--}}
{{--                <a href="pages/examples/pace.html" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>Pace</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="nav-item">--}}
{{--                <a href="pages/examples/blank.html" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>Blank Page</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="nav-item">--}}
{{--                <a href="starter.html" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>Starter Page</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--            </ul>--}}
{{--          </li>--}}
{{--          <li class="nav-item">--}}
{{--            <a href="#" class="nav-link">--}}
{{--              <i class="nav-icon fas fa-search"></i>--}}
{{--              <p>--}}
{{--                Search--}}
{{--                <i class="fas fa-angle-left right"></i>--}}
{{--              </p>--}}
{{--            </a>--}}
{{--            <ul class="nav nav-treeview">--}}
{{--              <li class="nav-item">--}}
{{--                <a href="pages/search/simple.html" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>Simple Search</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="nav-item">--}}
{{--                <a href="pages/search/enhanced.html" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>Enhanced</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--            </ul>--}}
{{--          </li>--}}
{{--          <li class="nav-header">MISCELLANEOUS</li>--}}
{{--          <li class="nav-item">--}}
{{--            <a href="iframe.html" class="nav-link">--}}
{{--              <i class="nav-icon fas fa-ellipsis-h"></i>--}}
{{--              <p>Tabbed IFrame Plugin</p>--}}
{{--            </a>--}}
{{--          </li>--}}
{{--          <li class="nav-item">--}}
{{--            <a href="https://adminlte.io/docs/3.1/" class="nav-link">--}}
{{--              <i class="nav-icon fas fa-file"></i>--}}
{{--              <p>Documentation</p>--}}
{{--            </a>--}}
{{--          </li>--}}
{{--          <li class="nav-header">MULTI LEVEL EXAMPLE</li>--}}
{{--          <li class="nav-item">--}}
{{--            <a href="#" class="nav-link">--}}
{{--              <i class="fas fa-circle nav-icon"></i>--}}
{{--              <p>Level 1</p>--}}
{{--            </a>--}}
{{--          </li>--}}
{{--          <li class="nav-item">--}}
{{--            <a href="#" class="nav-link">--}}
{{--              <i class="nav-icon fas fa-circle"></i>--}}
{{--              <p>--}}
{{--                Level 1--}}
{{--                <i class="right fas fa-angle-left"></i>--}}
{{--              </p>--}}
{{--            </a>--}}
{{--            <ul class="nav nav-treeview">--}}
{{--              <li class="nav-item">--}}
{{--                <a href="#" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>Level 2</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="nav-item">--}}
{{--                <a href="#" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>--}}
{{--                    Level 2--}}
{{--                    <i class="right fas fa-angle-left"></i>--}}
{{--                  </p>--}}
{{--                </a>--}}
{{--                <ul class="nav nav-treeview">--}}
{{--                  <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                      <i class="far fa-dot-circle nav-icon"></i>--}}
{{--                      <p>Level 3</p>--}}
{{--                    </a>--}}
{{--                  </li>--}}
{{--                  <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                      <i class="far fa-dot-circle nav-icon"></i>--}}
{{--                      <p>Level 3</p>--}}
{{--                    </a>--}}
{{--                  </li>--}}
{{--                  <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                      <i class="far fa-dot-circle nav-icon"></i>--}}
{{--                      <p>Level 3</p>--}}
{{--                    </a>--}}
{{--                  </li>--}}
{{--                </ul>--}}
{{--              </li>--}}
{{--              <li class="nav-item">--}}
{{--                <a href="#" class="nav-link">--}}
{{--                  <i class="far fa-circle nav-icon"></i>--}}
{{--                  <p>Level 2</p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--            </ul>--}}
{{--          </li>--}}
{{--          <li class="nav-item">--}}
{{--            <a href="#" class="nav-link">--}}
{{--              <i class="fas fa-circle nav-icon"></i>--}}
{{--              <p>Level 1</p>--}}
{{--            </a>--}}
{{--          </li>--}}
{{--            <li class="nav-header">LABELS</li>--}}
            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-link nav-link text-danger" style="border: none; background: none; cursor: pointer;">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                </form>
            </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
