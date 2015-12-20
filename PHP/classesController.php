<?php

    include('connect/prac.php');
    session_start();
    if(isset($_SESSION['user'])==true){
        
                    $aa = $_SESSION["user"];
                    $sql = "Select type from person where id = $aa;";
                    $result = mysqli_query($conn,$sql);
                    $record_found=mysqli_num_rows($result);
                    if($record_found == 1){
                        $row=mysqli_fetch_assoc($result);
                        $t = $row['type'];
                        if($t==1){
                            header("Location:classes/Teacher.php");
                        }elseif($t==0){
                            header("Location:classes/Student.php");                           
                        }else{
                            header("Location:mp1.php");
                        }
                    }else{
                            header("Location:mp1.php");            
                    }
    }else{
                            header("Location:mp1.php");
    }




?>