<?php include('connect.php'); ?>

<?php

session_start();
 if( $_SESSION['user'] == null)
{
    
     header('Location: ../mp1.php');
}

$userid = $_SESSION['user'];
$quuer = run("select classId from student where studentId = '$userid' ");

while($roow = $quuer->fetch(PDO::FETCH_ASSOC))
{
 $classid = $roow['classId'];
$query = run("select subject,teacherId from announcemnet where classId = '$classid' and global = False ORDER BY time desc;"); 

 while ($row = $query->fetch(PDO::FETCH_ASSOC))
 {
  
   $teacherid = $row["teacherId"];
  
  
   $q = run("select fname from person where id = '$teacherid' ;");
  
   $pid = $q->fetch(PDO::FETCH_ASSOC);
   $arr["announceby"] = $pid["fname"];
   $arr["subject"] = $row["subject"];
   $output[] = $arr;   
   
   
 
  }
}
 $output["data"] = $output;
      
	echo json_encode($output);

    
?>