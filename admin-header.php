<?php session_start(); ?>
    
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <span class="d-none d-lg-block">Heaven Of Dairies</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown">

        </li><!-- End Notification Nav -->


        <li class="nav-item dropdown">

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <!-- <img src="" alt="Profile" class="rounded-circle"> -->
            <i class="ri-account-circle-fill"></i>
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION["userName"] ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $_SESSION["userName"] ?></h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="admin-logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="admin-index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Views</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="admin-view-vaccine-details.php">
              <i class="bi bi-circle"></i><span>Vaccine details</span>
            </a>
          </li>
          <li>
            <a href="admin-view-vaccine-monitor.php">
              <i class="bi bi-circle"></i><span>Vaccine monitor</span>
            </a>
          </li>
          <li>
            <a href="admin-view-cattle-health.php">
              <i class="bi bi-circle"></i><span>Cattle health history</span>
            </a>
          </li>
          <li>
            <a href="admin-view-food-plan.php">
              <i class="bi bi-circle"  ></i><span>Cattle food plan</span>
            </a>
          </li>
          </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Order management</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Order details</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Payment details</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Delivery details</span>
            </a>
          </li>
          <li>
            <a href="admin-order-feedback.php">
              <i class="bi bi-circle"></i><span>Feedbacks</span>
            </a>
          </li>
          <li>
            <a href="admin-order-support.php">
              <i class="bi bi-circle"></i><span>Support</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Cattle daily activity</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="admin-activity-enter.php">
              <i class="bi bi-circle"></i><span>Enter details</span>
            </a>
          </li>
          <li>
            <a href="admin-activity-view.php">
              <i class="bi bi-circle"></i><span>View activity</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Sales</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Product sales</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Customers</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Sellers</span>
            </a>
          </li>
        </ul>
      </li>End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Register</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="admin-register-cattle.php">
              <i class="bi bi-circle" ></i><span >Cattle</span>
            </a>
          </li>
          <li>
            <a href="admin-register-seller.php">
              <i class="bi bi-circle"></i><span>Seller</span>
            </a>
          </li>
          <li>
            <a href="admin-register-doctor.php">
              <i class="bi bi-circle" ></i><span >Doctor</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <!-- <li class="nav-heading">Pages</li> -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="admin-customer.php">
          <i class="bi bi-person" ></i>
          <span >Customer</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="admin-products.php">
          <i class="bi bi-cart" ></i>
          <span >Products</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="admin-stocks.php">
          <i class="bi bi-bar-chart" ></i>
          <span >Stocks</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="admin-plans.php">
          <i class="bi bi-question-circle"></i>
          <span>Plans</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="admin-visit.php">
          <i class="bi bi-envelope"></i>
          <span>Farm visit</span>
        </a>
      </li><!-- End Contact Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->