
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
<style>
  
    .b3{
        margin-left:10px;
  color: white;
  border-radius: 10px;
  height: 70px;
  background-color: red;
  font-size:20px ;
}.b2{
    margin-left:10px;
  color: white;
  border-radius: 10px;
  height: 70px;
  background-color: green;
  font-size:20px ;
}.b1{
  color: white;
  border-radius: 10px;
  height: 70px;
  background-color: skyblue;
  font-size:20px ;
}
</style>
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
        <a class="nav-link collapsed" href="dashboard.php">
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
        <a class="nav-link collapsed" href="addaccount.php">
          <i class="bi bi-person"></i>
          <span>Manage Account</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php" onclick="return confirm('Are you sure to logout?');">
          <i class="bi bi-person"></i>
          <span>Logout</span>
        </a>
      </li>
    </ul>

  </aside><!-- End Sidebar-->








<!-- Main Body-->

<main>

<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Patient List</h5>
              <p>Patient List<a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank"></a>  <code></code></p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                  <th>PATIENT NO</th>
                 <th>Name</th>
                  <th>LRN</th>
                  <th>Date</th>
               
                  </tr>
                  
                </thead>
                <tbody>
                  
      <?php
      require_once 'db_connection.php';
      $stmt = $DB_con->prepare('SELECT * FROM patient');
      $stmt->execute();
  
      if($stmt->rowCount() > 0){
        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        ?>

        <tr>
             <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['Name']; ?></td>
          <td><?php echo $row['LRN']; ?></td>
          <td><?php echo $row['Date']; ?></td>
         

            
<td>
          
                <a  class = "b1" href="viewfull2.php?update_id=<?php echo $row['LRN']; ?>">FULL DETAILS </a>
                <a  class = "b2" href="update_data2.php?update_id=<?php echo $row['id']; ?>">UPDATE </a>
            <a class = "b3" href="delete_data3.php?delete_id=<?php echo $row['id']; ?>"onclick="return confirm('Are you sure to Delete?');">
          DELETE</a><br>
        
          </td>

            
          </td>
        </tr>

              
      <?php
    }
  }
?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>





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