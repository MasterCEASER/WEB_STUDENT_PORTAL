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
 $query = run("select studentId from student where classId = '$classid' ;"); 

 while ($row = $query->fetch(PDO::FETCH_ASSOC))
 {
  
   $studentid = $row["studentId"];
  
   $query2 = run("select postDesc from post where global = false and postedby = '$studentid';");
  
   $q = run("select fname from person where id = '$studentid' ;");
  
   $pid = $q->fetch(PDO::FETCH_ASSOC);
  
   while( $row2 = $query2->fetch(PDO::FETCH_ASSOC) )
   {
            $arr["apostedby"] = $pid["fname"];
            $arr["apostDesc"] = $row2["postDesc"];
            $output[] = $arr;   
   }
   
 
 }
}
		$output["data"] = $output;
      
	echo json_encode($output);
		
    
?>