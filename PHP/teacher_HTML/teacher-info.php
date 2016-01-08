<?php include('connect.php');
session_start();
$query = run("select intro,fname,userimg from person where type = 1;");    
$output = array();
$arr = array();
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