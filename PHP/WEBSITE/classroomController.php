<?php
    session_start();
    if(isset($_SESSION['user'])==true){
        if(isset($_REQUEST['class'])==true && isset($_REQUEST['type'])==true){
            $c = $_REQUEST['class'];
            $t = $_REQUEST['type'];
            if($t==0){
                header("Location:Classrooms_HTML/ClassRooms_Info.php?class=".$c);
            }elseif($t==1){
                header("Location:Classrooms_HTML/ClassRooms_Info_TA_Teacher.php?class=".$c);
            }            
        }else{
            header("Location:classesController.php");
        }
    }else{
        /*
            header to login page.......
        */
    }




?>