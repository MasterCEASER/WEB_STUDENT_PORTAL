<?php
include('connectPDO.php');
session_start();
?>

<?php
  
  
  if (isset($_POST["action"]) && !empty($_POST["action"])) 
  { 
    $action = $_POST["action"];
	
    if($action == "updateDesc")
	{
        $id = $_SESSION['course'];  
        $desc = $_REQUEST["desc"];
        
        $sql = "update courses set description = '$desc' where courseId = ".$id.";";
        $row = $db->query($sql);
        
		$output["data"] = $sql;
		echo json_encode($output);
	}
	else if($action == "updateOut")
	{
        $cid = $_SESSION['course'];  
        $id = $_SESSION['user'];  
        $out = $_REQUEST["out"];
        
        $sql = "update teacher set courseOutline = '$out' where courseId = ".$cid." and teacherId = ".$id.";";
        $row = $db->query($sql);
        
		$output["data"] = $sql;
		echo json_encode($output);
	}
  }//end of if
  


?>