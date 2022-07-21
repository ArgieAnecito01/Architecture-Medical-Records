<?php
  require_once 'db_connection.php';

  if(isset($_GET['delete_id']) && !empty($_GET['delete_id'])){
  	
    $delete_id = $_GET['delete_id'];
    $stmt = "DELETE FROM users WHERE user_id= '$delete_id'";
  	$DB_con->exec($stmt);

  	header("Location: addaccount.php");
      
  }else{
    header("Location: addaccount.php");
    
  }
?>