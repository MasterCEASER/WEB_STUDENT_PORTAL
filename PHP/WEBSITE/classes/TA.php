<?php
    include('../connect/prac.php');
    session_start();
?>       
<html>
<head>    
    <link rel="stylesheet" type="text/css" href="../css/newclass.css">        
    <link rel="stylesheet" type="text/css" href="../css/headr.css">
    <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
    <script src="../js/jquery-2.1.4.min.js"></script>
</head>
    <body>
        <?php include('../header.php'); ?>        
        <hr style="margin-top:20px;">
        <div id="content">  
            <div id="newclass-main">
                <div id="newclass-Content">
                    <div id="newclass-mainContent"></div>
                    <div class="divhide"></div>
                    <div id="newclass-Content1">
                        <div id="newclass-Content1-b">
                            CLASSROOMS                            
                        </div>                        
                        <div id="newclass-Content1-a"><br>
                            <a href="Student.php" class="link_c">ClassRooms As Student</a>
                            <a href="TA.php" class="link_c">ClassRooms As TA</a>
                        </div>
                    </div>
                    <br><hr><br>
            <div id="classroomS-Content2 ">
                <div style="background-color:lightgray;">
                     <?php
                    $aa = $_SESSION["user"];
                    $sql = "Select c1.classId,c.courseName ,c1.courseId,c.credits,c.description , p.fname, p.lname ,c1.image from courses c , person p , classes c1 , ta t where c1.classId = t.classId and c.courseId = c1.courseId and t.studentId=p.id and t.studentId = $aa"; 
                    $result = mysqli_query($conn,$sql);
                    $record_found=mysqli_num_rows($result); 
                    if($record_found > 0 )
                    {
                        while($row=mysqli_fetch_assoc($result))
                        {
                            
                            $row['image'] = '../'.$row['image'];
                            if((empty($row['image']) == true) || (file_exists($row['image']) == false))
                            {
                                $row['image'] = '../image/default.jpg';
                            }
                            echo    '<div class="class_table">
                                        <div style="display:table-cell;">
                                            <img class="class_img" src="'.$row['image'].'">
                                        </div>
                                        <div style="display:table-cell;vertical-align:middle;padding-left: 60px;">  
                                            <a href="../classroomController.php?type=1&class='.$row['classId'].'">
                                                <h2 style="text-align: center;">'.$row['courseName'].'</h2>                                
                                            </a>
                                            <ul>
                                                <li>Course-Code : '.$row['courseId'].'</li>
                                                <li>Credit_Hrs : '.$row['credits'].'</li>
                                                <li>Name : '.$row['fname'].'</li>
                                                <li>Fahter Name : '.$row['lname'].'</li>
                                            </ul>
                                        </div>
                                    </div>';
                        }
                    }
                    ?>
                    <hr><div id="newclass-Content2"></div>
                </div>
            </div>
        </div>
    </body>
</html>