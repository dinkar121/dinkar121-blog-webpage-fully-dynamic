
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $_SESSION['file']?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION["fname"]." ".$_SESSION["lname"]; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                USER:
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <?php
             include('dbcon.php');
             
 if($_SESSION["role"] == '0')
 {

  ?>
              <li class="nav-item">
                <a href="add-user.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add user</p>
                </a>
              </li>
              <?php
            }
            ?>
              <li class="nav-item">
                <a href="view-user.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View user</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view-profile.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View profile</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                POST:
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-post.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add post:</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view-post.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Post:</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view-description.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Description:</p>
                </a>
              </li>
              
            </ul>
          </li>
          
           <li class="nav-item" >
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-th" style="color: green"></i>
              <p>
                Logout
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>