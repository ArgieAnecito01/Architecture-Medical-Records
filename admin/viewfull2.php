
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
    .b1{
  color: white;
  border-radius: 10px;
  height: 70px;
  background-color: skyblue;
  font-size:20px ;
    }.b2{
  color: white;
  border-radius: 10px;
  height: 100px;
  background-color: green;
  font-size:20px ;
    }.b3{
  color: white;
  border-radius: 10px;
  height: 70px;
  background-color: red;
  font-size:20px ;
}.b4{
  color: white;
  border-radius: 5px;
  height: 70px;
  background-color: black;
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


    <?php
  require_once 'db_connection.php';

  if(isset($_GET['update_id']) && !empty($_GET['update_id'])){
    $update_id = $_GET['update_id'];
    $stmt_edit = $DB_con->prepare('SELECT * FROM patient WHERE LRN =:update_id');
    $stmt_edit->execute(array(':update_id'=>$update_id));
    $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
    extract($edit_row);
      
  }else{
    header("Location: viewpatient.php");
    
  }

?>
<?php

if(isset($_POST['Update_Data'])){ 
  $servername = "localhost";
$username = "root";
$password = "";
$databasename = "medical";
 
 $connection = mysqli_connect($servername, $username, $password, $databasename);
 $ida = $_POST['id'];
 $Namea = $_POST['Name'];
$LRNa = $_POST['LRN'];
 $Datea = $_POST['Date'];
 

    
    $query = "UPDATE `med` SET `Name`='".$Namea."',`LRN`='".$LRNa."',`Date`='".$Datea."' WHERE `Patient_No` = $Patient_Noa";
 $result = mysqli_query($connection, $query);
 if($result)
 {
 echo 'Data Updated';
 }else{
 echo 'Data Not Updated';
 }
 mysqli_close($connection);
}


?>


<main id="main" class="main">

<div class="pagetitle">
  <h1>Profile</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Overview</a></li>
      
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section profile">
  <div class="row">
    <div class="col-xl-4">

      <div class="card">
        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
        

          <h2><?php echo $Name; ?></h2>
          <h3>Patient No: <?php echo $id; ?></h3>
          <div class="social-links mt-2">
       
          </div>
        </div>
       
      </div>
      <a  class = "b4" href="add.php">Add Check Up </a><br>
      
    </div>

    <div class="col-xl-8">

      <div class="card">
        <div class="card-body pt-3">
          <!-- Bordered Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
              
            </li>

          

          </ul>
          <div class="tab-content pt-2">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">
              
              <h5 class="card-title">Profile Details</h5>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Full Name</div>
                <div class="col-lg-9 col-md-8"><?php echo $Name; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">LRN</div>
                <div class="col-lg-9 col-md-8"><?php echo $LRN;?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">DATE REGISTERED</div>
                <div class="col-lg-9 col-md-8"><?php echo $Date; ?></div>
              </div>

              <div class="row">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Patient History</h5>
              <p>Patient List<a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank"></a>  <code></code></p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                  <th>PATIENT NO</th>
                 <th>Name</th>
                  <th>LRN</th>
                  <th>Date Examined</th>
                
               
                  </tr>
                  
                </thead>
                <tbody>
                  
   

<?php
  require_once 'db_connection.php';

 

    if(isset($_GET['update_id']) && !empty($_GET['update_id'])){

      $course_id = $_GET['update_id'];
    $stmt= $DB_con->prepare('SELECT * FROM med WHERE LRN =:update_id');
    $stmt->execute(array(':update_id'=>$course_id));

  if($stmt->rowCount() > 0){
    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
      ?>

      
<tr>
             <td><?php echo $row['PATIENTNO']; ?></td>
          <td><?php echo $row['Name']; ?></td>
          <td><?php echo $row['LRN']; ?></td>
          <td><?php echo $row['DATEOFEXAMINATION']; ?></td>
        
         

            
<td>
          
                <a  class = "b1" href="viewfull.php?update_id=<?php echo $row['PATIENTNO']; ?>">FULL DETAILS </a>
                <a  class = "b2" href="update_data.php?update_id=<?php echo $row['PATIENTNO']; ?>">UPDATE </a>
            <a class = "b3" href="delete_data.php?delete_id=<?php echo $row['PATIENTNO']; ?>"onclick="return confirm('Are you sure to Delete?');">
          DELETE</a><br>
        
          </td>

              
      <?php
     }
    }
  }

?>
           
        
         


            
          </td>
        </tr>

              
      <?php
    
  
?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
            </div>

            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

              <!-- Profile Edit Form -->
















  </main><!-- End #main -->























  <!-- ======= Footer ======= -->
  
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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