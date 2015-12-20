<?php include('connect.php'); ?>

<?php

session_start();

if( $_SESSION['user'] == null)
{
    
     header('Location: ../mp1.php');
}

$query = run("select subject,teacherId from announcemnet where   global = True ORDER BY time desc;"); 

$output = array();
 while ($row = $query->fetch(PDO::FETCH_ASSOC))
 {
  
   $teacherid = $row["teacherId"];
  
  
   $q = run("select fname from person where id = '$teacherid' ;");
  
   $pid = $q->fetch(PDO::FETCH_ASSOC);
   $arr["announceby"] = $pid["fname"];
   $arr["subject"] = $row["subject"];
   $output[] = $arr;   
   
   
 
 }

		$output["data"] = $output;
      
	echo json_encode($output);
		
    
?>