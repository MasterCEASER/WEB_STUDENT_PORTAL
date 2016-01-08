<?php

    include('connect/prac.php');
    session_start();
    if(isset($_SESSION['user'])===true){
        $aa = $_SESSION['user'];
                    $sql = "Select type from person where id = $aa;";
                    $result = mysqli_query($conn,$sql);
                    $record_found=mysqli_num_rows($result);
                    if($record_found == 1){
                        $row=mysqli_fetch_assoc($result);
                        $t = $row['type'];
                        if($t==true){
                            
                            
                            $_SESSION['p'] = 't';
                            header("Location:classes/Teacher.php");
                            
                        }elseif($t==false){
                            
                            $_SESSION['p'] = 's';
                            header("Location:classes/Student.php");                           
                        }else{
                            header("Location:index.php");
                        }
                    }else{
                            header("Location:index.php");            
                    }
    }else{
                            header("Location:index.php");
    }




?>