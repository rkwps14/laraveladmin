<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/dashboard" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a>Users<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= url('users/create'); ?>">Add new user</a></li>
                      <li><a href="<?= url('users'); ?>">User list</a></li>
                    </ul>
                  </li>
                  <li><a> Branch <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= url('branchs/create'); ?>">Add new branch</a></li>
                      <li><a href="<?= url('branchs'); ?>">Branch list</a></li>
                    </ul>
                  </li>
                  <li><a>Doctors <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= url('patient/chart'); ?>">Patient chart</a></li>
                    </ul>
                  </li>
                  <li><a>Patients <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= url('patients/create'); ?>">Add new patients</a></li>
                      <li><a href="<?= url('patients'); ?>">Patient list</a></li> 
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
          </div>
        </div>
