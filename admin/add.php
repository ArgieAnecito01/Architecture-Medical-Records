
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


  </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Multi Columns Form</h5>

              <!-- Multi Columns Form -->
              <form class="row g-3"action="add.php" method="post"> 
             
              <div class="col-md-6">
                  <label for="Name" class="form-label">Name</label>
                  <input type="text" class="form-control"name="i1">
                </div>
                <div class="col-md-6">
                  <label for="LRN" class="form-label">LRN</label>
                  <input type="number" class="form-control"  name="i2">
                </div>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">DATE OF BIRTH</label>
                  <input type="date" class="form-control"  name="i3">
                </div>
                <div class="col-md-6">
                  <label for="BIRTHPLACE" class="form-label">BIRTHPLACE</label>
                  <input type="text" class="form-control"  name="i4">
                </div>
                <div class="col-md-6">
                  <label for="PARENT/GUARDIAN" class="form-label">PARENT/GUARDIAN</label>
                  <input type="text" class="form-control"  name="i5">
                </div>
                <div class="col-md-6">
                  <label for="ADDRESS" class="form-label">ADDRESS</label>
                  <input type="text" class="form-control"  name="i6">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">SCHOOL ID</label>
                  <input type="number" class="form-control"  name="i7">
                </div>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">REGION</label>
                  <input type="text" class="form-control"  name="i8">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">TELEPHONE NO</label>
                  <input type="text" class="form-control"  name="i9">
                </div>
                <div class="col-md-6">
                  <label for="DATE" class="form-label">DATE OF EXAMINATION</label>
                  <input type="date" class="form-control"  name="i10">
                </div>
                <div class="col-md-6">
                  <label for="TEMPERATURE" class="form-label">TEMPERATURE/BP</label>
                  <input type="text" class="form-control"  name="i11">
                </div>

                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">HEART RATE/PULSE RATE /RESPIRATORY RATE</label>
                  <input type="text" class="form-control" name="i12">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">HEIGHT(INCHES)</label>
                  <input type="number" class="form-control" id="height" name="i13">
                </div>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">WEIGHT(POUNDS)</label>
                  <input type="number" class="form-control" id="weight" name="i14">
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
               <input type="number" class="form-control"  name="i15">
                </div>

                <div class="col-md-6">
                  <label for="inputState" class="form-label">Nutritional Status</label>
                  <select id="inputState" class="form-select" name="i16">
                    <option selected>Choose...</option>
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
                  <select id="inputState" class="form-select" name="i17">
                    <option selected>Choose...</option>
                    <option value="Passed">Passed</option>
    <option value="Failed">Failed</option>

                    
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">AUDITORY SCREENING(TUNNING FORK)</label>
                  <select id="inputState" class="form-select" name="i18">
                    <option selected>Choose...</option>
                    <option value="Passed">Passed</option>
    <option value="Failed">Failed</option>

                    
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">SKIN/SCALP</label>
                  <select id="inputState" class="form-select" name="i19">
                    <option selected>Choose...</option>
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
                  <select id="inputState" class="form-select" name="i20">
                    <option selected>Choose...</option>
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
                  <select id="inputState" class="form-select" name="i21">
                    <option selected>Choose...</option>
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
                  <select id="inputState" class="form-select" name="i22">
                    <option selected>Choose...</option>
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
                  <select id="inputState" class="form-select" name="i23">
                    <option selected>Choose...</option>
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
                  <select id="inputState" class="form-select" name="i24">
                    <option selected>Choose...</option>
                    <option value="Acquired">Acquired</option>
    <option value="Congenital">Congenital</option>
    

                    
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">IRON SUPPLEMENTATION</label>
                  <select id="inputState" class="form-select" name="i25">
                    <option selected>Choose...</option>
                    <option value="checked">checked</option>
    <option value="unchecked">unchecked</option>

                    
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">DEWORMING (1ST DOSE ADN 2ND DOSE)</label>
                  <select id="inputState" class="form-select" name="i26">
                    <option selected>Choose...</option>
                    <option value="checked">FIRST DOSE </option>
                    <option value="checked">2ND DOSE </option>
    <option value="unchecked">NOT</option>

                    
                  </select>

                </div>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">IMMUNIZATION(SPECIFY WHAT KIND):</label>
                  <input type="text" class="form-control" name="i27">
                </div>

                <div class="col-md-6">
                  <label for="inputState" class="form-label">SBFP BENEFICIARY</label>
                  <select id="inputState" class="form-select" name="i28">
                    <option selected>Choose...</option>
                    <option value="checked">checked</option>
    <option value="unchecked">unchecked</option>

                    
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">4PS BENEFICIARY</label>
                  <select id="inputState" class="form-select" name="i29">
                    <option selected>Choose...</option>
                    <option value="checked">checked</option>
    <option value="unchecked">unchecked</option>

                    
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">MENARCHE(THE START PLEASE SPECIFY)</label>
                  <select id="inputState" class="form-select" name="i30">
                    <option selected>Choose...</option>
                    <option value="checked">checked</option>
    <option value="unchecked">unchecked</option>

                    
                  </select>
                </div>

              
                <div class="col-md-6">
                  <label for="DATE" class="form-label">DATE</label>
                  <input type="date" class="date form-control" name="i31">
                </div>
                <div class="col-md-6">
                  <label for="CHIEF COMPLAINT" class="form-label">CHIEF COMPLAINT</label>
                  <input type="text" class="form-control" name="i32">
                </div>
                <div class="col-md-6">
                  <label for="INTERVENTION/TREATMENT DONE" class="form-label">INTERVENTION/TREATMENT DONE:</label>
                  <input type="text" class="form-control" name="i33">
                </div>
                <div class="col-md-6">
                  <label for="REMARKS" class="form-label">REMARKS</label>
                  <input type="text" class="form-control" name="i34">
                </div>


                <?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "med";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `medicine`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2

$result2 = mysqli_query($connect, $query);

$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}

?>




                <div class="col-md-6">
                <label for="Medicine Recommend" class="form-label">Medicine Recommend:</label>
                <select id="inputState" class="form-select" name="i0">
                <option selected>Choose...</option>
            <?php echo $options;?>
        </select>

                 
                </div>














                <div class="col-md-6">
                  <label for="ATTENDED BY(NAME/POSITION)" class="form-label">ATTENDED BY(NAME/POSITION):</label>
                  <input type="text" class="form-control" name="i35">
                </div>
                



              
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="insert">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
                
         
         
              </form><!-- End Multi Columns Form -->

            </div>
          </div>

        </div>

        <div class="col-lg-6">

         




<!-- Main Body-->

<?php

// php insert data to mysql database using PDO
if(isset($_POST['insert']))
{
 try {
 // connect to mysql
 $pdoConnect = new PDO("mysql:host=localhost;dbname=med","root","");
 } catch (PDOException $exc) {
 echo $exc->getMessage();
 exit();
 }
 // get values form input text
 $medicine_recommend = $_POST['i0'];
 $Name = $_POST['i1'];
 $LRN = $_POST['i2'];
 $DOB = $_POST['i3'];
  $BIRTHPLACE = $_POST['i4'];
 $PARENTGUARDIAN = $_POST['i5'];
 $ADDRESS = $_POST['i6'];
  $SCHOOLID = $_POST['i7'];
 $REGION = $_POST['i8'];
 $TELEPHONENO = $_POST['i9'];
  $DATEOFEXAMINATION = $_POST['i10'];
 $TEMPERATUREBP = $_POST['i11'];
 $HEARTRATEPULSERATERESPIRATORYRATE = $_POST['i12'];
  $HEIGHT = $_POST['i13'];
 $WEIGHT = $_POST['i14'];
 $BMI = $_POST['i15'];
  $NUTRITIONALSTATUS = $_POST['i16'];
 $VISIONSCREENINGUSINGAPPROPRIATECHART = $_POST['i17'];
 $AUDITORYSCREENING = $_POST['i18'];
  $SKINSCALP = $_POST['i19'];
 $EYESEARNOSE = $_POST['i20'];
 $MOUTHTHROATNECK = $_POST['i21'];
  $LUNGSHEART = $_POST['i22'];
 $ABDOMEN = $_POST['i23'];
 $DEFORMITIES = $_POST['i24'];
  $IRONSUPPLEMENTATION = $_POST['i25'];
 $DEWORMING = $_POST['i26'];
 $IMMUNIZATION = $_POST['i27'];
  $SBFPBENEFICIARY = $_POST['i28'];
 $FOURPSBENEFICIARY = $_POST['i29'];
 $MENARCHE = $_POST['i30'];


 $DATE = $_POST['i31'];
 $CHIEFCOMPLAINT = $_POST['i32'];
  $INTERVENTIONTREATMENTDONE = $_POST['i33'];
 $REMARKS	= $_POST['i34'];
 $ATTENDEDBY = $_POST['i35'];


 // mysql query to insert data
 $pdoQuery = "INSERT INTO `med`(`medicine_recommend`, `Name`, `LRN`, `DOB`,`BIRTHPLACE`, `PARENTGUARDIAN`, `ADDRESS`,`SCHOOLID`, `REGION`, `TELEPHONENO`,`DATEOFEXAMINATION`, `TEMPERATUREBP`, `HEARTRATEPULSERATERESPIRATORYRATE`,`HEIGHT`, `WEIGHT`,`BMI`,`NUTRITIONALSTATUS`, `VISIONSCREENINGUSINGAPPROPRIATECHART`,`AUDITORYSCREENING`, `SKINSCALP`, `EYESEARNOSE`,`MOUTHTHROATNECK`, `LUNGSHEART`, `ABDOMEN`,`DEFORMITIES`, `IRONSUPPLEMENTATION`, `DEWORMING`,`IMMUNIZATION`,  `SBFPBENEFICIARY`,`FOURPSBENEFICIARY`, `MENARCHE`, `DATE`,`CHIEFCOMPLAINT`,  `INTERVENTIONTREATMENTDONE`,`REMARKS`, `ATTENDEDBY`) VALUES (:i0,:i1,:i2,:i3,:i4,:i5,:i6,:i7,:i8,:i9,:i10,:i11,:i12,:i13,:i14,:i15,:i16,:i17,:i18,:i19,:i20,:i21,:i22,:i23,:i24,:i25,:i26,:i27,:i28,:i29,:i30,:i31,:i32,:i33,:i34,:i35)";
 $pdoResult = $pdoConnect->prepare($pdoQuery);
 $pdoExec = $pdoResult->execute(array(":i0"=>$medicine_recommend,":i1"=>$Name,":i2"=>$LRN,":i3"=>$DOB,":i4"=>$BIRTHPLACE,":i5"=>$PARENTGUARDIAN,":i6"=>$ADDRESS,":i7"=>$SCHOOLID,":i8"=>$REGION,":i9"=>$TELEPHONENO,":i10"=>$DATEOFEXAMINATION,":i11"=>$TEMPERATUREBP,":i12"=>$HEARTRATEPULSERATERESPIRATORYRATE,":i13"=>$HEIGHT,":i14"=>$WEIGHT,":i15"=>$BMI,":i16"=>$NUTRITIONALSTATUS,":i17"=>$VISIONSCREENINGUSINGAPPROPRIATECHART,":i18"=>$AUDITORYSCREENING,":i19"=>$SKINSCALP,":i20"=>$EYESEARNOSE,":i21"=>$MOUTHTHROATNECK,":i22"=>$LUNGSHEART,":i23"=>$ABDOMEN,":i24"=>$DEFORMITIES,":i25"=>$IRONSUPPLEMENTATION,":i26"=>$DEWORMING,":i27"=>$IMMUNIZATION,":i28"=>$SBFPBENEFICIARY,":i29"=>$FOURPSBENEFICIARY,":i30"=>$MENARCHE,":i31"=>$DATE,":i32"=>$CHIEFCOMPLAINT,":i33"=>$INTERVENTIONTREATMENTDONE,":i34"=>$REMARKS,":i35"=>$ATTENDEDBY));
 
 // check if mysql insert query successful
 if($pdoExec)
 {
 echo 'Patient Recorded';
 }else{
 echo 'Patient Not Recorded';
 } }
?>












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