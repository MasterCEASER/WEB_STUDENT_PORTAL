<?php

session_start();

if( $_SESSION['user'] == null)
{
    
     header('Location: ../mp1.php');
}
?>

<?php include('connect.php'); 



$user = $_SESSION['user'];

 
    
   $fname = $_REQUEST["fname"];
   $lname = $_REQUEST["lname"];
    $email = $_REQUEST["email"];
    $pass = $_REQUEST["pass"];
   $intro = $_REQUEST["intro"];
    
   
       
	  $qur = "update person set fname = '$fname' , lname = '$lname' , email = '$email' , Password = '$pass' , intro = '$intro' where id = '$user' ";
		
	   $query = run($qur);
	   
 echo "<h1> DATA SAVED </h1>";
	  
       
          header('Location:settings.php?name='.$fname.' '.$lname);
	  
   


?>