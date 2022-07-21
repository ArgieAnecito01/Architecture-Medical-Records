
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
    $stmt_edit = $DB_con->prepare('SELECT * FROM med WHERE PATIENTNO =:update_id');
    $stmt_edit->execute(array(':update_id'=>$update_id));
    $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
    extract($edit_row);
      
  }else{
    header("Location: index.php");
    
  }

?>
<?php

if(isset($_POST['Update_Data'])){ 
  $servername = "localhost";
$username = "root";
$password = "";
$databasename = "medical";
 
 $connection = mysqli_connect($servername, $username, $password, $databasename);
 $medicine_recommenda= $_POST['medicine_recommend'];
 $PATIENTNOa = $_POST['PATIENTNO'];
 $IMAGEa = $_POST['IMAGE'];
$Namea = $_POST['Name'];
 $LRNa = $_POST['LRN'];
 $DOBa = $_POST['DOB'];
  $BIRTHPLACEa = $_POST['BIRTHPLACE'];
 $PARENTGUARDIANa = $_POST['PARENTGUARDIAN'];
 $ADDRESSa = $_POST['ADDRESS'];
  $SCHOOLIDa = $_POST['SCHOOLID'];
 $REGIONa = $_POST['REGION'];
 $TELEPHONENOa = $_POST['TELEPHONENO'];
  $DATEOFEXAMINATIONa = $_POST['DATEOFEXAMINATION'];
 $TEMPERATUREBPa = $_POST['TEMPERATUREBP'];
 $HEARTRATEPULSERATERESPIRATORYRATEa = $_POST['HEARTRATEPULSERATERESPIRATORYRATE'];
  $HEIGHTa = $_POST['HEIGHT'];
 $WEIGHTa = $_POST['WEIGHT'];
 $BMIa = $_POST['BMI'];
  $NUTRITIONALSTATUSa = $_POST['NUTRITIONALSTATUS'];
 $VISIONSCREENINGUSINGAPPROPRIATECHARTa = $_POST['VISIONSCREENINGUSINGAPPROPRIATECHART'];
 $AUDITORYSCREENINGa = $_POST['AUDITORYSCREENING'];
  $SKINSCALPa = $_POST['SKINSCALP'];
 $EYESEARNOSEa = $_POST['EYESEARNOSE'];
 $MOUTHTHROATNECKa = $_POST['MOUTHTHROATNECK'];
  $LUNGSHEARTa = $_POST['LUNGSHEART'];
 $ABDOMENa = $_POST['ABDOMEN'];
 $DEFORMITIESa = $_POST['DEFORMITIES'];
  $IRONSUPPLEMENTATIONa = $_POST['IRONSUPPLEMENTATION'];
 $DEWORMINGa = $_POST['DEWORMING'];
 $IMMUNIZATIONa = $_POST['IMMUNIZATION'];
  $SBFPBENEFICIARYa = $_POST['SBFPBENEFICIARY'];
 $FOURPSBENEFICIARYa = $_POST['FOURPSBENEFICIARY'];
 $MENARCHEa = $_POST['MENARCHE'];


 $DATEa = $_POST['DATE'];
 $CHIEFCOMPLAINTa = $_POST['CHIEFCOMPLAINT'];
  $INTERVENTIONTREATMENTDONEa = $_POST['INTERVENTIONTREATMENTDONE'];
 $REMARKSa = $_POST['REMARKS'];
 $ATTENDEDBYa = $_POST['ATTENDEDBY'];

    
    $query = "UPDATE `med` SET`IMAGE`='".$IMAGEa."', `Name`='".$Namea."',`LRN`='".$LRNa."',`DOB`='".$DOBa."',`BIRTHPLACE`='".$BIRTHPLACEa."',`PARENTGUARDIAN`='".$PARENTGUARDIANa."',`ADDRESS`='".$ADDRESSa."',`SCHOOLID`='".$SCHOOLIDa."',`REGION`='".$REGIONa."',`TELEPHONENO`='".$TELEPHONENOa."',`DATEOFEXAMINATION`='".$DATEOFEXAMINATIONa."',`TEMPERATUREBP`='".$TEMPERATUREBPa."',`HEARTRATEPULSERATERESPIRATORYRATE`='".$HEARTRATEPULSERATERESPIRATORYRATEa."',`HEIGHT`='".$HEIGHTa."',`WEIGHT`='".$WEIGHTa."',`BMI`='".$BMIa."',`NUTRITIONALSTATUS`='".$NUTRITIONALSTATUSa."',`VISIONSCREENINGUSINGAPPROPRIATECHART`='".$VISIONSCREENINGUSINGAPPROPRIATECHARTa."',`AUDITORYSCREENING`='".$AUDITORYSCREENINGa."',`SKINSCALP`='".$SKINSCALPa."',`EYESEARNOSE`='".$EYESEARNOSEa."',`MOUTHTHROATNECK`='".$MOUTHTHROATNECKa."',`LUNGSHEART`='".$LUNGSHEARTa."',`ABDOMEN`='".$ABDOMENa."',`DEFORMITIES`='".$DEFORMITIESa."',`IRONSUPPLEMENTATION`='".$IRONSUPPLEMENTATIONa."',`DEWORMING`='".$DEWORMINGa."',`IMMUNIZATION`='".$IMMUNIZATIONa."',`SBFPBENEFICIARY`='".$SBFPBENEFICIARYa."',`FOURPSBENEFICIARY`='".$FOURPSBENEFICIARYa."',`MENARCHE`='".$MENARCHEa."',`DATE`='".$DATEa."',`CHIEFCOMPLAINT`='".$CHIEFCOMPLAINTa."',`INTERVENTIONTREATMENTDONE`='".$INTERVENTIONTREATMENTDONEa."',`REMARKS`='".$REMARKSa."',`ATTENDEDBY`='".$ATTENDEDBYa."' WHERE `PATIENTNO` = $PATIENTNO";
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
          <h3>Patient History No: <?php echo $PATIENTNO; ?></h3>
          <div class="social-links mt-2">
         
          </div>
        </div>
        
      </div>

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
                <div class="col-lg-3 col-md-4 label">DATE OF BIRTH</div>
                <div class="col-lg-9 col-md-8"><?php echo $DOB; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">BIRTHPLACE</div>
                <div class="col-lg-9 col-md-8"><?php echo $BIRTHPLACE; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">PARENT/GUARDIAN</div>
                <div class="col-lg-9 col-md-8"><?php echo $PARENTGUARDIAN; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">ADDRESS</div>
                <div class="col-lg-9 col-md-8"><?php echo $ADDRESS; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">SCHOOL ID</div>
                <div class="col-lg-9 col-md-8"><?php echo $SCHOOLID; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">REGION</div>
                <div class="col-lg-9 col-md-8"><?php echo $REGION; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">TELEPHONE NO</div>
                <div class="col-lg-9 col-md-8"><?php echo $TELEPHONENO; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">DATE OF EXAMINATION</div>
                <div class="col-lg-9 col-md-8"><?php echo $DATEOFEXAMINATION; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">TEMPERATURE/BP</div>
                <div class="col-lg-9 col-md-8"><?php echo $TEMPERATUREBP; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">HEART RATE/PULSE RATE /RESPIRATORY RATE</div>
                <div class="col-lg-9 col-md-8"><?php echo $HEARTRATEPULSERATERESPIRATORYRATE; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">HEIGHT(INCHES)</div>
                <div class="col-lg-9 col-md-8"><?php echo $HEIGHT; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">WEIGHT(POUNDS)</div>
                <div class="col-lg-9 col-md-8"><?php echo $WEIGHT; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">BMI</div>
                <div class="col-lg-9 col-md-8"><?php echo $BMI; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">NUTRITIONAL STATUS</div>
                <div class="col-lg-9 col-md-8"><?php echo $NUTRITIONALSTATUS; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">VISION SCREENING USING APPROPRIATE CHART</div>
                <div class="col-lg-9 col-md-8"><?php echo $VISIONSCREENINGUSINGAPPROPRIATECHART; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">AUDITORY SCREENING(TUNNING FORK)</div>
                <div class="col-lg-9 col-md-8"><?php echo $AUDITORYSCREENING; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">SKIN/SCALP</div>
                <div class="col-lg-9 col-md-8"><?php echo $SKINSCALP; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">EYES/EAR/NOSE</div>
                <div class="col-lg-9 col-md-8"><?php echo $EYESEARNOSE; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">MOUTH/THROAT/NECK</div>
                <div class="col-lg-9 col-md-8"><?php echo $MOUTHTHROATNECK; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">LUNGS/HEART</div>
                <div class="col-lg-9 col-md-8"><?php echo $LUNGSHEART; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">ABDOMEN</div>
                <div class="col-lg-9 col-md-8"><?php echo $ABDOMEN; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">DEFORMITIES</div>
                <div class="col-lg-9 col-md-8"><?php echo $DEFORMITIES; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">IRON SUPPLEMENTATION</div>
                <div class="col-lg-9 col-md-8"><?php echo $IRONSUPPLEMENTATION; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">DEWORMING (1ST DOSE ADN 2ND DOSE)</div>
                <div class="col-lg-9 col-md-8"><?php echo $DEWORMING; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">IMMUNIZATION(SPECIFY WHAT KIND)</div>
                <div class="col-lg-9 col-md-8"><?php echo $IMMUNIZATION; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">SBFP BENEFICIARY</div>
                <div class="col-lg-9 col-md-8"><?php echo $SBFPBENEFICIARY; ?></div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">4PS BENEFICIARY</div>
                <div class="col-lg-9 col-md-8"><?php echo $FOURPSBENEFICIARY; ?></div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">MENARCHE</div>
                <div class="col-lg-9 col-md-8"><?php echo $MENARCHE; ?></div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">DATE</div>
                <div class="col-lg-9 col-md-8"><?php echo $DATE; ?></div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">CHIEF COMPLAINT</div>
                <div class="col-lg-9 col-md-8"><?php echo $CHIEFCOMPLAINT; ?></div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">INTERVENTION/TREATMENT DONE</div>
                <div class="col-lg-9 col-md-8"><?php echo $INTERVENTIONTREATMENTDONE; ?></div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">REMARKS</div>
                <div class="col-lg-9 col-md-8"><?php echo $REMARKS; ?></div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Medicine Recommend</div>
                <div class="col-lg-9 col-md-8"><?php echo $medicine_recommend; ?></div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">ATTENDED BY</div>
                <div class="col-lg-9 col-md-8"><?php echo $ATTENDEDBY; ?></div>
              </div>

             

            </div>
            <div class="text-center">
                <button onclick="window.print()" class="btn btn-primary">Print</button>  
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