
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
$databasename = "med";
 
 $connection = mysqli_connect($servername, $username, $password, $databasename);

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

    
    $query = "UPDATE `med` SET `Name`='".$Namea."',`LRN`='".$LRNa."',`DOB`='".$DOBa."',`BIRTHPLACE`='".$BIRTHPLACEa."',`PARENTGUARDIAN`='".$PARENTGUARDIANa."',`ADDRESS`='".$ADDRESSa."',`SCHOOLID`='".$SCHOOLIDa."',`REGION`='".$REGIONa."',`TELEPHONENO`='".$TELEPHONENOa."',`DATEOFEXAMINATION`='".$DATEOFEXAMINATIONa."',`TEMPERATUREBP`='".$TEMPERATUREBPa."',`HEARTRATEPULSERATERESPIRATORYRATE`='".$HEARTRATEPULSERATERESPIRATORYRATEa."',`HEIGHT`='".$HEIGHTa."',`WEIGHT`='".$WEIGHTa."',`BMI`='".$BMIa."',`NUTRITIONALSTATUS`='".$NUTRITIONALSTATUSa."',`VISIONSCREENINGUSINGAPPROPRIATECHART`='".$VISIONSCREENINGUSINGAPPROPRIATECHARTa."',`AUDITORYSCREENING`='".$AUDITORYSCREENINGa."',`SKINSCALP`='".$SKINSCALPa."',`EYESEARNOSE`='".$EYESEARNOSEa."',`MOUTHTHROATNECK`='".$MOUTHTHROATNECKa."',`LUNGSHEART`='".$LUNGSHEARTa."',`ABDOMEN`='".$ABDOMENa."',`DEFORMITIES`='".$DEFORMITIESa."',`IRONSUPPLEMENTATION`='".$IRONSUPPLEMENTATIONa."',`DEWORMING`='".$DEWORMINGa."',`IMMUNIZATION`='".$IMMUNIZATIONa."',`SBFPBENEFICIARY`='".$SBFPBENEFICIARYa."',`FOURPSBENEFICIARY`='".$FOURPSBENEFICIARYa."',`MENARCHE`='".$MENARCHEa."',`DATE`='".$DATEa."',`CHIEFCOMPLAINT`='".$CHIEFCOMPLAINTa."',`INTERVENTIONTREATMENTDONE`='".$INTERVENTIONTREATMENTDONEa."',`REMARKS`='".$REMARKSa."',`ATTENDEDBY`='".$ATTENDEDBYa."' WHERE `PATIENTNO` = $PATIENTNO";
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

  </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Multi Columns Form</h5>

              <!-- Multi Columns Form -->
              <form class="row g-3" method="post"> 
             
              <div class="col-md-6">
                  <label for="Name" class="form-label">Name</label>
                  <input type="text" class="form-control"   name="Name" value="<?php echo $Name; ?>">
                </div>
                <div class="col-md-6">
                  <label for="LRN" class="form-label">LRN</label>
                  <input type="number" class="form-control"   name="LRN" value="<?php echo $LRN; ?>">
                </div>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">DATE OF BIRTH</label>
                  <input type="Text" class="form-control"  name="DOB" value="<?php echo $DOB; ?>">
                </div>
                <div class="col-md-6">
                  <label for="BIRTHPLACE" class="form-label">BIRTHPLACE</label>
                  <input type="text" class="form-control"  name="BIRTHPLACE" value="<?php echo $BIRTHPLACE; ?>">
                </div>
                <div class="col-md-6">
                  <label for="PARENT/GUARDIAN" class="form-label">PARENT/GUARDIAN</label>
                  <input type="text" class="form-control" name="PARENTGUARDIAN" value="<?php echo $PARENTGUARDIAN; ?>">
                </div>
                <div class="col-md-6">
                  <label for="ADDRESS" class="form-label">ADDRESS</label>
                  <input type="text" class="form-control"  name="ADDRESS" value="<?php echo $ADDRESS; ?>">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">SCHOOL ID</label>
                  <input type="number" class="form-control"  name="SCHOOLID" value="<?php echo $SCHOOLID; ?>">
                </div>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">REGION</label>
                  <input type="text" class="form-control"  name="REGION" value="<?php echo $REGION; ?>">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">TELEPHONE NO</label>
                  <input type="text" class="form-control" name="TELEPHONENO" value="<?php echo $TELEPHONENO; ?>">
                </div>
                <div class="col-md-6">
                  <label for="DATE" class="form-label">DATE OF EXAMINATION</label>
                  <input type="Text" class="form-control" name="DATEOFEXAMINATION" value="<?php echo $DATEOFEXAMINATION; ?>">
                </div>
                <div class="col-md-6">
                  <label for="TEMPERATURE" class="form-label">TEMPERATURE/BP</label>
                  <input type="text" class="form-control"  name="TEMPERATUREBP" value="<?php echo $TEMPERATUREBP; ?>">
                </div>

                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">HEART RATE/PULSE RATE /RESPIRATORY RATE</label>
                  <input type="text" class="form-control" name="HEARTRATEPULSERATERESPIRATORYRATE" value="<?php echo $HEARTRATEPULSERATERESPIRATORYRATE; ?>">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">HEIGHT(INCHES)</label>
                  <input type="number" class="form-control" id="height" name="HEIGHT" value="<?php echo $HEIGHT; ?>">
                </div>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">WEIGHT(POUNDS)</label>
                  <input type="number" class="form-control" id="weight" name="WEIGHT" value="<?php echo $WEIGHT; ?>">
                </div>
                
                <div class="col-md-6">
                <label for="nothing" class="form-label" id="bmi">BMI </label>
                <script>
        
        const height =document.querySelector("#height")
        const weight =document.querySelector("#weight")
        const vki =document.querySelector("#vki")
        
        height.addEventListener('input',vkiHesapla);
        weight.addEventListener('input',vkiHesapla);
        
        function vkiHesapla()
        {
            h=height.value
            w=weight.value
            index = w/(h*h)* 703;
            index=index.toFixed(2)
 
            if (index < 18.5) {
                bmi.innerHTML="underweight - BMI : " + index  
                bmi.setAttribute("class","alert alert-secondary")
            } else if (index < 25) {
                bmi.innerHTML="normal - BMI : "+ index  
                bmi.setAttribute("class","alert alert-success")
            } else if (index < 30) {
                bmi.innerHTML="overweight - BMI : " + index  
                bmi.setAttribute("class","alert alert-warning")
            } else {
                bmi.innerHTML="obese - BMI : " + index  
                bmi.setAttribute("class","alert alert-danger")
            }
        }
    </script>
               <input type="number" class="form-control"  name="BMI" value="<?php echo $BMI; ?>">
                </div>

                <div class="col-md-6">
                  <label for="inputState" class="form-label">Nutritional Status</label>
                  <select id="inputState" class="form-select" name="NUTRITIONALSTATUS" >
                    <option selected><?php echo $NUTRITIONALSTATUS; ?></option>
                    <option value="Normal Weight">Normal Weight</option>
                   <option value="Wasted/Underweight">Wasted/Underweight</option>
                   <option value="severely Wasted/Underweight">severely Wasted/Underweight</option>
                   <option value="Overweight">Overweight</option>
                   <option value="Obese">Obese</option>
                  <option value="Normal Height">Normal Height</option>
                   <option value="Stundted">Stundted</option>
                    <option value="Tall">Tall</option>

                    
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">VISION SCREENING USING APPROPRIATE CHART</label>
                  <select id="inputState" class="form-select" name="VISIONSCREENINGUSINGAPPROPRIATECHART">
                    <option selected><?php echo $VISIONSCREENINGUSINGAPPROPRIATECHART; ?></option>
                    <option value="Passed">Passed</option>
    <option value="Failed">Failed</option>

                    
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">AUDITORY SCREENING(TUNNING FORK)</label>
                  <select id="inputState" class="form-select" name="AUDITORYSCREENING">
                    <option selected><?php echo $AUDITORYSCREENING; ?></option>
                    <option value="Passed">Passed</option>
    <option value="Failed">Failed</option>

                    
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">SKIN/SCALP</label>
                  <select id="inputState" class="form-select" name="SKINSCALP">
                    <option selected><?php echo $SKINSCALP; ?></option>
                    <option value="Normal">Normal</option>
    <option value="Presence of Lice">Presence of Lice</option>
     <option value="Redness of Skin">Redness of Skin</option>
     <option value="White Spots">White Spots</option>
     <option value="Flaky Skin">Flaky Skin</option>
      <option value="Impetigo/boil">Impetigo/boil</option>
      <option value="Hematoma">Hematoma</option>
      <option value="Bruises/Injuries">Bruises/Injuries</option>
      <option value="Itchiness">Itchiness</option>
      <option value="Skin Lessions">Skin Lessions</option>
      <option value="Acne/Pimple">Acne/Pimple</option>

                    
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">EYES/EAR/NOSE</label>
                  <select id="inputState" class="form-select" name="EYESEARNOSE">
                    <option selected><?php echo $EYESEARNOSE; ?></option>
                    <option value="Normal">Normal</option>
    <option value="Stye">Stye</option>
     <option value="Eye Redness">Eye Redness</option>
     <option value="Ocular Misalignment">Ocular Misalignment</option>
     <option value="Pale Conjunctiva">Pale Conjunctiva</option>
      <option value="Ear Discharge">Ear Discharge</option>
      <option value="Impacted cerumen">Impacted cerumen</option>
      <option value="Mucus Discharge">Mucus Discharge</option>
      <option value="NOse Bleeding">NOse Bleeding</option>
      <option value="Eye Discharge">Eye Discharge</option>
      <option value="Matted Eyelashes">Matted Eyelashes</option>
                    
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">MOUTH/THROAT/NECK</label>
                  <select id="inputState" class="form-select" name="MOUTHTHROATNECK">
                    <option selected><?php echo $MOUTHTHROATNECK; ?></option>
                    <option value="Normal">Normal</option>
    <option value="Enlarge Tonsils">Enlarge Tonsils</option>
     <option value="Pressence of lessions">Pressence of lessions</option>
     <option value="INflamed pharynx">INflamed pharynx</option>
     <option value="Enlarge Lymphnodes">Enlarge Lymphnodes</option>
      <option value="Thoothache">Thoothache</option>
      <option value="OThers,Specify">OThers,Specify</option>

                    
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">LUNGS/HEART</label>
                  <select id="inputState" class="form-select" name="LUNGSHEART">
                    <option selected><?php echo $LUNGSHEART; ?></option>
                    <option value="Normal">Normal</option>
    <option value="Distended">Distended</option>
     <option value="Abdominal Pain">Abdominal Pain</option>
     <option value="Tenderness">Tenderness</option>
     <option value="Dysmenorrhea">Dysmenorrhea</option>
     <option value="Others,Speciy">Others,Specify</option>

                    
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">ABDOMEN</label>
                  <select id="inputState" class="form-select" name="ABDOMEN">
                    <option selected><?php echo $ABDOMEN; ?></option>
                    <option value="Normal">Normal</option>
    <option value="Distended">Distended</option>
     <option value="Abdominal Pain">Abdominal Pain</option>
     <option value="Tenderness">Tenderness</option>
     <option value="Dysmenorrhea">Dysmenorrhea</option>
     <option value="Others,Speciy">Others,Speciy</option>
                    
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">DEFORMITIESK</label>
                  <select id="inputState" class="form-select" name="DEFORMITIES">
                    <option selected><?php echo $DEFORMITIES; ?></option>
                    <option value="Acquired">Acquired</option>
    <option value="Congenital">Congenital</option>
    

                    
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">IRON SUPPLEMENTATION</label>
                  <select id="inputState" class="form-select" name="IRONSUPPLEMENTATION">
                    <option selected><?php echo $IRONSUPPLEMENTATION; ?></option>
                    <option value="checked">checked</option>
    <option value="unchecked">unchecked</option>

                    
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">DEWORMING (1ST DOSE ADN 2ND DOSE)</label>
                  <select id="inputState" class="form-select" name="DEWORMING">
                    <option selected><?php echo $DEWORMING; ?></option>
                    <option value="checked">FIRST DOSE </option>
                    <option value="checked">2ND DOSE </option>
    <option value="unchecked">NOT</option>

                    
                  </select>

                </div>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">IMMUNIZATION(SPECIFY WHAT KIND):</label>
                  <input type="text" class="form-control" name="IMMUNIZATION" value="<?php echo $IMMUNIZATION; ?>">
                </div>

                <div class="col-md-6">
                  <label for="inputState" class="form-label">SBFP BENEFICIARY</label>
                  <select id="inputState" class="form-select" name="SBFPBENEFICIARY">
                    <option selected><?php echo $SBFPBENEFICIARY; ?></option>
                    <option value="checked">checked</option>
    <option value="unchecked">unchecked</option>

                    
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">4PS BENEFICIARY</label>
                  <select id="inputState" class="form-select" name="FOURPSBENEFICIARY">
                    <option selected><?php echo $FOURPSBENEFICIARY; ?></option>
                    <option value="checked">checked</option>
    <option value="unchecked">unchecked</option>

                    
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">MENARCHE(THE START PLEASE SPECIFY)</label>
                  <select id="inputState" class="form-select" name="MENARCHE">
                    <option selected><?php echo $MENARCHE; ?></option>
                    <option value="checked">checked</option>
    <option value="unchecked">unchecked</option>

                    
                  </select>
                </div>

              
                <div class="col-md-6">
                  <label for="DATE" class="form-label">DATE</label>
                  <input type="Text" class="date form-control" name="DATE" value="<?php echo $DATE; ?>">
                </div>
                <div class="col-md-6">
                  <label for="CHIEF COMPLAINT" class="form-label">CHIEF COMPLAINT</label>
                  <input type="text" class="form-control" name="CHIEFCOMPLAINT" value="<?php echo $CHIEFCOMPLAINT; ?>">
                </div>
                <div class="col-md-6">
                  <label for="INTERVENTION/TREATMENT DONE" class="form-label">INTERVENTION/TREATMENT DONE:</label>
                  <input type="text" class="form-control" name="INTERVENTIONTREATMENTDONE" value="<?php echo $INTERVENTIONTREATMENTDONE; ?>">
                </div>
                <div class="col-md-6">
                  <label for="REMARKS" class="form-label">REMARKS</label>
                  <input type="text" class="form-control" name="REMARKS" value="<?php echo $REMARKS; ?>">
                </div>

                



                <div class="col-md-6">
                  <label for="ATTENDED BY(NAME/POSITION)" class="form-label">ATTENDED BY(NAME/POSITION):</label>
                  <input type="text" class="form-control" name="ATTENDEDBY" value="<?php echo $ATTENDEDBY; ?>">
                </div>
                



              
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="Update_Data">Submit</button>
                  
                </div>
              </form><!-- End Multi Columns Form -->

            </div>
          </div>

        </div>

        <div class="col-lg-6">

         




<!-- Main Body-->

	






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