
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medical Record Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/L.png" alt="">
        <span class="d-none d-lg-block">Medical Records Admin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
      
    </div><!-- End Logo -->



        </li><!-- End Messages Nav -->

    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

     
    <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="patientadd.php">
          <i class="bi bi-journal-text"></i>
          <span>Add Patient</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="viewpatient.php">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Patient Record</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="appointlist.php">
          <i class="bi bi-person"></i>
          <span>Appointment List</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="medicine.php">
          <i class="bi bi-person"></i>
          <span>Medicine Inventory</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="login.php" onclick="return confirm('Are you sure to logout?');">
          <i class="bi bi-person"></i>
          <span>Logout</span>
        </a>
      </li>
    
    </ul>

  </aside><!-- End Sidebar-->







<!-- Main Body-->

	

    <main id="main" class="main">

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-8">
      <div class="row">

        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card sales-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Total Appointment <span>| </span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-list"></i>
                </div>
                <div class="ps-3">
                  <?php
                  require 'dbconfig.php';

                  $query = "SELECT appointmentid FROM appointment ORDER BY appointmentid";
                  $query_run = mysqli_query($connection,  $query);

                  $row = mysqli_num_rows( $query_run);

                  echo '<h6>'.$row.'</h6>'; 
                  ?>
                 
                  

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->

        <!-- Revenue Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card revenue-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

               
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Total Check Ups  <span></span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-person"></i>
                </div>
                <div class="ps-3">

                <?php
                  require 'dbconfig.php';

                  $query = "SELECT PATIENTNO  FROM med ORDER BY PATIENTNO ";
                  $query_run = mysqli_query($connection,  $query);

                  $row = mysqli_num_rows( $query_run);

                  echo '<h6>'.$row.'</h6>'; 
                  ?>
                  

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Revenue Card -->

        <!-- Customers Card -->
        <div class="col-xxl-4 col-xl-12">

          <div class="card info-card customers-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

               
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Patients <span></span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                <?php
                  require 'dbconfig.php';

                  $query = "SELECT id  FROM patient ORDER BY id ";
                  $query_run = mysqli_query($connection,  $query);

                  $row = mysqli_num_rows( $query_run);

                  echo '<h6>'.$row.'</h6>'; 
                  ?>
                 

                </div>
              </div>

            </div>
          </div>

        </div><!-- End Customers Card -->

         <!-- Customers Card -->
         <div class="col-xxl-4 col-xl-12">

<div class="card info-card customers-card">

  <div class="filter">
    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
      <li class="dropdown-header text-start">
        <h6>Filter</h6>
      </li>

    
    </ul>
  </div>

  <div class="card-body">
    <h5 class="card-title">Total Stocks Of Medicine <span></span></h5>

    <div class="d-flex align-items-center">
      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
        <i class="bi bi-list"></i>
      </div>
      <div class="ps-3">
      <?php
        require 'dbconfig.php';

        $query = "SELECT PATIENTNO  FROM med ORDER BY PATIENTNO ";
        $query_run = mysqli_query($connection,  $query);

        $row = mysqli_num_rows( $query_run);

        echo '<h6>'.$row.'</h6>'; 
        ?>
       

      </div>
    </div>

  </div>
</div>

</div><!-- End Customers Card -->


  </main><!-- End #main -->























  <!-- ======= Footer ======= -->
  
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
  
    </div>
  </footer><!-- End Footer -->

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