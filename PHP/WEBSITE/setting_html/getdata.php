 <?php include('connect.php'); ?>



<?php

session_start();
 $_SESSION["user"]= "true";

$query = run("select * from person where id = 1"); 

$output = array();
$arr = array();
 while ($row = $query->fetch(PDO::FETCH_ASSOC))
 {
  
  $arr["first"] = $row["fname"];
   $arr["second"] = $row["lname"];
   $arr["email"] = $row["email"];
   $arr["pass"] = $row["Password"];
   $arr["intro"] = $row["intro"];
  
  
 
   $output[] = $arr;   
   
   
 
 }

$output["data"] = $output;
      
	echo json_encode($output);
		
    
?>