

<?php include('connect.php'); ?>

<?php

session_start();
 $_SESSION["user"]= "true";

$query = run("select intro,fname,userimg from person where type = 1;");    
 
 
        
           
            
        $output = array();
        $arr = array();
       // $arr["tayyab"] = "tayyay";
//$output[] = $arr;
         while ($row = $query->fetch(PDO::FETCH_ASSOC)) 
         {
            
            
           
           
            $arr["intro"] = $row["intro"];
            $arr["name"] = $row["fname"];
            $arr["img"] = $row["userimg"];
            $output[] = $arr;   
         }
         

		$output["data"] = $output;
      
	echo json_encode($output);
		
    
?>