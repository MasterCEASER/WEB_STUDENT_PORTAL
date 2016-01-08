 


<?php include('connect.php'); 



?>



<?php

$user = $_GET['id'];
$query = run("select * from person where id = '$user' "); 
$output = array();
$arr = array();
 while ($row = $query->fetch(PDO::FETCH_ASSOC))
 {
  
  $arr["first"] = $row["fname"];
   $arr["second"] = $row["lname"];
   $arr["email"] = $row["email"];
   $arr["pass"] = $row["password"];
   $arr["intro"] = $row["intro"];
    
if($row["userImg"] == "" || file_exists("../".$row["userImg"]) == false){
    $row["userImg"] = "image/defaultUser.jpg";
}  
     
   $arr["image"] = "../".$row["userImg"];
  
 
   $output[] = $arr;   
   
   
 
 }

$output["data"] = $output;
      
	echo json_encode($output);
		
    
?>