<!DOCTYPE html>
<html lang="en">

<head>
  <title>Dashboard - Heaven of Dairies</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  
  
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="#" rel="icon">
  <link href="" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>
  

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="" alt="">
        <span class="d-none d-lg-block">Heaven Of Dairies</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->



        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <!-- <img src="" alt="Profile" class="rounded-circle"> -->
            <i class="ri-account-circle-fill"></i>
            <span class="d-none d-md-block dropdown-toggle ps-2">Doctor</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Dr.Kabir</h6>
              <span>Doctor</span>
            </li>
            <li>
              <hr class="dropdown-divider">
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
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Vaccine Record</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="doctor-vaccine-details.php">
              <i class="bi bi-circle"></i><span>Vaccine details</span>
            </a>
          </li>
          <li>
            <a href="doctor-vaccine-monitoring.php">
              <i class="bi bi-circle"></i><span>Vaccine monitor</span>
            </a>
          </li>
          <li>
            <a href="doctor-cattle-health-history.php">
              <i class="bi bi-circle"></i><span>Cattle health history</span>
            </a>
          </li>
          <li>
            <a href="doctor-cattle-food-plan.php">
              <i class="bi bi-circle"></i><span>Cattle food plan</span>
            </a>
          </li>
          </ul>
          
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>About Cattle</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="doctor-cattle-details.php">
              <i class="bi bi-circle"></i><span>Cattle details</span>
            </a>
          </li>
          <li>
            <a href="doctor-cattle-daily-activity.php">
              <i class="bi bi-circle"></i><span>Cattle Daily Activity</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Profile</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="Doctor Profile.html">
              <i class="bi bi-circle"></i><span>Doctor's Profile</span>
            </a>
          </li>
          </li>
        </ul>
      </li>

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
          
        </ol>
        <a href = "" target = "_self"> 
          <!-- <img src = "https://images.pexels.com/photos/51311/cow-calf-cattle-stock-51311.jpeg?cs=srgb&dl=pexels-pixabay-51311.jpg&fm=jpg" alt = "Tutorials Point" style="width: 100%; height: 70%" border = "0"/>  -->
    
       </a>
      </nav>
    </div><!-- End Page Title -->


 <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>