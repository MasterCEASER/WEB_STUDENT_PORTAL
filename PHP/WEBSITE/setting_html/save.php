<?php include('connect.php'); 
session_start();




 
    
   $fname = $_REQUEST["fname"];
   $lname = $_REQUEST["lname"];
    $email = $_REQUEST["email"];
    $pass = $_REQUEST["pass"];
   $intro = $_REQUEST["intro"];
    
   
       
	  $qur = "update person set fname = '$fname' , lname = '$lname' , email = '$email' , Password = '$pass' , intro = '$intro' where id = 1 ";
		
	   $query = run($qur);
	   
 echo "<h1> DATA SAVED </h1>";
	  
       
          header('Location:settings.php');
	  
   


?>