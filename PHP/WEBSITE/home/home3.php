<?php include('connect.php'); ?>

<?php

session_start();
 $_SESSION["user"]= "true";

$query = run("select subject,teacherId from announcemnet where classId = 1 and global = False ORDER BY time desc;"); 

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