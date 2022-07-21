<?php
  require_once 'db_connection.php';

  if(isset($_GET['delete_id']) && !empty($_GET['delete_id'])){
  	
    $delete_id = $_GET['delete_id'];
    $stmt = "DELETE FROM medicine WHERE id= '$delete_id'";
  	$DB_con->exec($stmt);

  	header("Location: medicine.php");
      
  }else{
    header("Location: medicine.php");
    
  }
?>