

<?php include('connect.php'); ?>

<?php

session_start();

if( $_SESSION['user'] == null)
{
    
     header('Location: ../mp1.php');
}

$query = run("select postedBy,postDesc from post where global = True;");    
 
 
        
           
            
        $output = array();
        $arr = array();
        
         while ($row = $query->fetch(PDO::FETCH_ASSOC)) 
         {
            $id = $row["postedBy"];
            
            $q = run("select fname from person where id = '$id' ;");
            $pid = $q->fetch(PDO::FETCH_ASSOC);
            $arr["postedby"] = $pid["fname"];
            $arr["postDesc"] = $row["postDesc"];
            $output[] = $arr;   
         }
         

		$output["data"] = $output;
      
	echo json_encode($output);
		
    
?>