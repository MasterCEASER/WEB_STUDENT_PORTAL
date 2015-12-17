


<html>
    
 <?php
  include('../prac.php');?>
    <?php
session_start();
$_SESSION['user']=2;
?>
<head>
    <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" type="text/css" href="../../css/headr.css">
        <link rel="stylesheet" href="../../css/font-awesome/css/font-awesome.min.css">
        <script src="../../js/jquery-2.1.4.min.js"></script>
</head>
<body>
    
        <div id="Header">
            <div class="wrapper">
                <div id="container">
                    <div class="main_menu ">
                        <div class="nav-bar ">
                            <div class="container ">
                                <div><img class="img-thumbnail img-circle web_logo_img logo" alt="Image Ot.Found.." src="../../images/PUCIT1.png"></div>
                                <a id="logo" href="index.html">pucit portal</a>
                                <ul>
                                    <div style="display:table">
                                        <li style="border-left:0px">
                                            <a href="../../home/home.html" class="active">
                                                <i class="fa fa-home"></i>
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../../teacher_HTML/teacher-info.html" >
                                                <i class="fa fa-users"></i>
                                                Teachers
                                            </a>
                                        </li>
                                        <li style="display:table-cell;algin:right">
                                            <a href="../../Classrooms_HTML/classrommS/classroom_S.html" >
                                                <i class="fa fa-linkedin-square"></i>
                                                ClassRooms
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../../post_HTML/GLOBAL%20POST.html">
                                                <i class="fa fa-envelope-o"></i>
                                                Posts
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../../Classrooms_HTML/contact/contactUs.html" >
                                                <i class="fa fa-phone"></i>
                                                Contact
                                            </a>
                                        </li>
                                    </div><!--
                                    <li><a href="#" class="active">Teacher</a></li>
                                    <li><a href="#" class="active">Class-Rooms</a></li>
                                    <li><a href="#" class="active">Posts</a></li>
                                    <li><a href="#" class="active">Contact</a></li>-->
                                </ul>
                                <div id="usr_img">
                                    <img class="user_logo_img" id="user-profile-img" alt="Image NOt FOund ..." src="../../images/shuja.png">
                                    <div style="width:35px;">
                                        <div class="layer close" id="user-profile" style="">
                                            <ul>
                                                <li class="clearfix">
                                                    <a><i class="fa fa-user"></i>&nbsp; Hisham</a>
                                                </li>
                                                <li class="clearfix">
                                                    <a><i class="fa fa-cog"></i>&nbsp; Settings</a>
                                                </li>
                                                <li class="clearfix">
                                                    <a><i class="fa fa-sign-out"></i>&nbsp; SignOut</a>
                                                </li>
                                            </ul>
                                        </div>      <!--END OF USER DROPDOWN-->
                                        <script>
                                            $("img#user-profile-img").click(function(){
                                               var x = $("div#user-profile"); 
                                                if(x.hasClass("open")){
                                                    x.removeClass("open");
                                                    x.addClass("close");
                                                }else{
                                                    x.removeClass("close");
                                                    x.addClass("open");
                                                }
                                            });
                                            $("div#user-profile > ul > li:nth-child(2)").click(function(){
                                                alert("Settings");
                                               var x = $("div#user-profile"); 
                                                    x.removeClass("open");
                                                    x.addClass("close");
                                            })
                                            $("div#user-profile > ul > li:nth-child(3)").click(function(){
                                                alert("SignOUt");
                                               var x = $("div#user-profile"); 
                                                    x.removeClass("open");
                                                    x.addClass("close");
                                            })
                                        </script>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr style="margin-top:20px;">
    <div id="content">    
    <div id="classroomS-main" >    
        <div id="classroomS-Content">
            <div id="classroomS-mainContent"></div>
            <div id="classroomS-Content1">
                <div id="classroomS-Content1-b" class="two"><br>
                    <span style="font-size:16px;padding:2px;font-family:sans-serif; border-style:solid;display:table;box-shadow:8px 10px 15px 1px white;margin:10px;margin-bottom:50px;border-color:white;"><i>As Classroom's Student.</i> </span>
                </div>
                <div id="classroomS-Content1-a">
                    &nbsp;&nbsp;
                    <span style="font-size:26px;padding:2px;font-family:sans-serif; font-style: italic; font-weight: bold;">Class Room.</span>
                </div>
            </div>
                 
                    <?php
                            $aa = $_SESSION["user"];
                            $sql = "SElect c.courseName , c1.courseId ,c.description , p.fname, p.lname from courses c , person p ,classes c1 , student s where c1.classId = s.classId AND p.id=s.studentId";/*                    echo $sql."<br>";*/
    
                            $result = mysqli_query($conn,$sql);
                            $record_found=mysqli_num_rows($result); 
                            if($record_found > 0 )
                            {
                                while($row=mysqli_fetch_assoc($result))
                                    {
                                    
                                        echo    
                                    '
            <div id="classroomS-Content2 ">
                <div style="padding:10px;margin:10px;">
                    <div style="display:table;box-shadow:8px 10px 15px 1px white;margin:10px;margin-bottom:50px;border-color:white;">
                        <div style="display:table-cell;">
                               <a href="../ClassRooms_Announcements.html"> <img src="img1.gif"  /> </a>
                        </div>
                        <div style="display:table-cell;vertical-align:middle;">  
                                     <b>Class:</b> '.$row['courseName'].'<br>
                                            <b>Code:</b>'.$row['courseId'].'<br>
                                             <b>Credits:</b>'.$row['description'].'<br>
                                            <br>
                                                '.$row['fname'].' '.$row['lname'].' 
                        </div>
                    </div>  ';
                                             }
                                }
                                            ?>
                  
                    </div>       
                </div>
              
            </div>
        </div>
    </div>
</body>
    
    
  
</html>