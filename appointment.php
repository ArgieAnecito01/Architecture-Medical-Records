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
 $Name = $_POST['i1'];
 $Email = $_POST['i2'];
 $Phone = $_POST['i3'];
  $Date = $_POST['i4'];
 $Doctor = $_POST['i5'];
 $Message = $_POST['i6'];
 

 // mysql query to insert data
 $pdoQuery = "INSERT INTO `appointment`(`Name`, `Email`, `Phone`,`Date`, `Doctor`, `Message`) VALUES (:i1,:i2,:i3,:i4,:i5,:i6)";
 $pdoResult = $pdoConnect->prepare($pdoQuery);
 $pdoExec = $pdoResult->execute(array(":i1"=>$Name,":i2"=>$Email,":i3"=>$Phone,":i4"=>$Date,":i5"=>$Doctor,":i6"=>$Message));
 
 // check if mysql insert query successful
 if($pdoExec)
 {
 echo 'Data Inserted';
 }else{
 echo 'Data Not Inserted';
 } }
?>
<div class="container" data-aos="fade-up">

<div class="section-title">
  <h2>Make an Appointment</h2>
  <p>Fill up the following details.</p>
</div>

<form action="appointment.php" method="post">
  <div class="row">
    <div class="col-md-4 form-group">
      <input type="text" name="i1" class="form-control" id="name" placeholder="Your Name" required>
    </div>
    <div class="col-md-4 form-group mt-3 mt-md-0">
      <input type="email" class="form-control" name="i2" id="email" placeholder="Your Email" required>
    </div>
    <div class="col-md-4 form-group mt-3 mt-md-0">
      <input type="tel" class="form-control" name="i3" id="phone" placeholder="Your Phone" required>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 form-group mt-3">
      <input type="datetime" name="i4" class="form-control datepicker" id="date" placeholder="Appointment Date" required>
    </div>
    
    <div class="col-md-4 form-group mt-3">
      <select name="i5" id="doctor" class="form-select">
        <option value="">Select Doctor</option>
        <option value="Doctor 1">Joann Tuapin</option>
        <option value="Doctor 2">Michael John Paco</option>
        <option value="Doctor 3">Jessica C. Reyss</option>
      </select>
    </div>
  </div>

  <div class="form-group mt-3">
    <textarea class="form-control" name="i6" rows="5" placeholder="Message (Optional)"></textarea>
  </div>
  
  <div class="text-center"><input type="submit" name="insert" value="Insert Data"  class="button"></div>
  
</form>

</div>