<?php
  require_once 'db_connection.php';

  if(isset($_GET['delete_id']) && !empty($_GET['delete_id'])){
  	
    $delete_id = $_GET['delete_id'];
    $stmt = "DELETE FROM appointment WHERE appointmentid= '$delete_id'";
  	$DB_con->exec($stmt);

  	header("Location: appointlist.php");
      
  }else{
    header("Location: appointlist.php");
    
  }
?>