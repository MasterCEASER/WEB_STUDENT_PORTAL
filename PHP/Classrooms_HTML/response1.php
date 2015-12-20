<?php
include('../connect/connectPDO.php');
session_start();
?>

<?php

  if (isset($_REQUEST["action"]) && !empty($_REQUEST["action"])) 
  { 
    $action = $_REQUEST["action"];
	
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
	else if($action == "viewTA")
	{
        $c = $_REQUEST['c'];  
        
        $sql = "select ta.studentId,p.fname,p.lname,p.userImg from ta,person p where p.id = ta.studentId and classId = $c;";
        $res = $db->query($sql);
        $i=0;
        while($row = $res->fetch(PDO::FETCH_ASSOC)){
            $row['userImg'] = "..//".$row['userImg'];  
            if(!file_exists($row['userImg'])){
                $row['userImg'] = "..//image//defaultUser.jpg";
                
            }/*
            echo '<img src='.$row['userImg'].'>';*/
            $out[$i] = $row;
            $i++;
        }
		$output["data"] = $out;
		echo json_encode($output);
	}
	else if($action == "viewST")
	{
        $c = $_REQUEST['c'];  
        
        $sql = "select ta.studentId,p.fname,p.lname,p.userImg from student ta,person p where p.id = ta.studentId and classId = $c;";
        $res = $db->query($sql);
        $i=0;
        while($row = $res->fetch(PDO::FETCH_ASSOC)){
            $row['userImg'] = "..//".$row['userImg'];  
            if(!file_exists($row['userImg'])){
                $row['userImg'] = "..//image//defaultUser.jpg";
                
            }/*
            echo '<img src='.$row['userImg'].'>';*/
            $out[$i] = $row;
            $i++;
        }
		$output["data"] = $out;
		echo json_encode($output);
	}
	else if($action == "removeTA")
	{
        $c = $_REQUEST['c'];  
        $id = $_REQUEST['rid'];
        $sql = "delete from ta where studentId = $id and classId = $c";
        $res = $db->query($sql);
		$output["data"] = $sql;
		echo json_encode($output);
	}
	else if($action == "removeST")
	{
        $c = $_REQUEST['c'];  
        $id = $_REQUEST['rid'];
        $sql = "delete from student where studentId = $id and classId = $c";
        $res = $db->query($sql);
		$output["data"] = $sql;
		echo json_encode($output);
	}
	else if($action == "TA_selection")
	{
        $c = $_REQUEST['c'];  
        $sql = "select distinct id,fname,lname,userImg from person where id not in (select studentId from student where classId = $c) and id not in (select studentId from ta where classId = $c) and type = 0;";
        $res = $db->query($sql);
        $row = $res->fetchAll(PDO::FETCH_NUM);
		$output["data"] = $row;
		echo json_encode($output);
	}
	else if($action == "ST_selection")
	{
        $c = $_REQUEST['c'];  
        $sql = "select distinct id,fname,lname,userImg from person where id not in (select studentId from student where classId = $c) and id not in (select studentId from ta where classId = $c) and type = 0;";
        $res = $db->query($sql);
        $row = $res->fetchAll(PDO::FETCH_NUM);
		$output["data"] = $row;
		echo json_encode($output);
	}
	else if($action == "add_ST")
	{
        $c = $_REQUEST['c'];  
        $t = $_REQUEST['t'];
        $sql = "insert into student (studentId,classId) values ($t,$c)";
        $res = $db->query($sql);
		$output["data"] = $sql;
		echo json_encode($output);
	}
  }//end of if
  


?>