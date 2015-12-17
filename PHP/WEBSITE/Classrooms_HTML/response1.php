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
        $id = $_SESSION['class'];  
        $desc = $_REQUEST["desc"];
        
        $sql = "update classes set description = '$desc' where classId = ".$id.";";
        $row = $db->query($sql);
        
		$output["data"] = $sql;
		echo json_encode($output);
	}
	else if($action == "updateOut")
	{
        $cid = $_SESSION['class'];  
        $id = $_SESSION['user'];  
        $out = $_REQUEST["out"];
        
        $sql = "update classes set courseOutline = '$out' where classId = ".$cid." ;";
        $row = $db->query($sql);
        
		$output["data"] = $sql;
		echo json_encode($output);
	}
  }//end of if
  


?>