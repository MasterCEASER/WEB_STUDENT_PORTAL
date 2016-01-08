<?php


if( isset($_SESSION['user']) === false)
{
    
     header('Location: ../index.php');
}
?>

<?php include('connect.php'); 
    $user = $_SESSION['user'];
    $fname = $_REQUEST["fname"];
    if(!$fname){
        $fname="";
    }
    $lname = $_REQUEST["lname"];
    if(!$lname){
        $lname="";
    }
    $pass = $_REQUEST["pass"];
    if(!$pass){
        $pass="";
    }
    $intro = $_REQUEST["intro"];       
	if(!$intro){
        $intro ="";
    }
    $file = $_FILES["fileToUpload"];
    if($file["name"] == ""){
    $qur = "update person set fname = '$fname' , lname = '$lname' ,  Password = '$pass' , intro = '$intro' where id = '$user' ";
	   $query = run($qur);
        
          header('Location:settings.php?name='.$fname.' '.$lname);
    }else{
        $sql = "SELECT userImg from person where id = $user";
        $row = run($sql);
        
        $res = $row->fetch(PDO::FETCH_NUM);
            unlink("../".$res[0]);
        $dest = "image/" . substr(md5(time()),0,10) . '.'.strtolower(end(explode('.',$_FILES["file"]["name"])));
        move_uploaded_file($file['tmp_name'],"../".$dest);
        $qur = "update person set fname = '$fname' , lname = '$lname' ,  Password = '$pass' , intro = '$intro', userImg = '$dest'  where id = '$user' ";
	   $query = run($qur);
        
    }
	   echo "$qur";
 echo "<h1> DATA SAVED </h1>";
        
	  
       
          header('Location:settings.php?name='.$fname.' '.$lname.'&img='.$dest);
	  
 

?>