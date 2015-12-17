<html>
       
 <?php
  include('../prac.php');?>
    <?php
session_start();
$_SESSION['user']=2;
?>
<head>    
    <link rel="stylesheet" type="text/css" href="newclass.css">        <link rel="stylesheet" type="text/css" href="../../css/headr.css">
        <link rel="stylesheet" href="../../css/font-awesome/css/font-awesome.min.css">
        <script src="../../js/jquery-2.1.4.min.js"></script>
      <script type="text/javascript">
        $(document).ready(MainFunction);

        function MainFunction() {

            
            $('#btn').click(function (event) {
                ShowDialog();
                //To stop actual/default functionality of the link
                event.preventDefault();
                return false;
            });

            $('#lnkClose').click(function (e) {
                ClearField();
                HideDialog();
                e.preventDefault();
            });

            $('#btnOK').click(function (e) {

               
                ClearField();
                HideDialog();
                
            });


        } //End of MainFunction

          function ClearField() {
            $("#txtName").val('');
            $("#txtName1").val('');
            $("#txtName2").val('');
            
        }
        function ShowDialog() {

            $('#divoverlay').show();
            $('#modal_dialog').slideDown(600);
        }
        function HideDialog() {
            $('#divoverlay').hide();
            $('#modal_dialog').slideUp(600);
        }

    </script>
    <?php

            
                            if (isset ($_REQUEST['ok'])==true)
                            {
                            
                                   
                                    $b = $_SESSION['user'];
                                    $name1=$_SESSION['co'];
                                    $des=$_REQUEST["des"];
                                    $outline=$_REQUEST["course"];
                                    $img=$_FILES["image"];
                                    $file_n = $img["name"];
                               
                                if(empty($name1) || empty($des)|| empty($outline) || empty($img) )
                                {
                                        echo "Fill complete form";
                                }
                                else
                                {
                                    if(empty($file_n) == false){
                                        $file_n= round(microtime(true)).".jpg";
                                        move_uploaded_file($_FILES["image"]["tmp_name"], "image//".$file_n);
                                    }
                                      $a ="Select courseId from courses where courseName='$name1'";
                                $sqla="insert into classes(teacherId,courseId,description,courseOutline)                                                                                      values($b,($a),'$des','$outline')";
                                    if (mysqli_query($conn, $sqla) == true) 
                                    {
                                        $last_id = mysqli_insert_id($conn);
                                        $result["data"] = $last_id;
                                    } 
                                    else {
                                            $result["data"] = "Error: ". mysqli_error($conn);
                                        }
                            
                                }
                            }
                            $aa = $_SESSION["user"];
                            $sql = "Select c1.courseName , c.description , c.courseOutline from classes c , courses c1 where c.courseId=c1.courseId  AND c.teacherId='$aa'"; 
                                echo $sql."<br>";
    
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
                        <input type="hidden" name="image" value="'.$row['Image'].'">
                        </div>
                        <div style="display:table-cell;vertical-align:middle;">  
                                     <b>Class:</b> '.$row['courseName'].'<br>
                                            <b>Code:</b>'.$row['description'].'<br>
                                             <b>Credits:</b>'.$row['courseOutline'].'<br>
                                            <br>
                                              
                        </div>
                    </div>  ';
                                             }
                                }
                                            ?>
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
            <div id="newclass-main">
                <div id="newclass-Content">
                    <div id="newclass-mainContent"></div>
                    <div class="divhide"></div>
                    <div id="newclass-Content1">
                        <div id="newclass-Content1-b">
                            &nbsp;&nbsp;
                            <span style="font-size:26px;padding:2px;font-family:sans-serif;">
                                <i><b>Class Room.</b></i> 
                            </span>
                        </div>
                        <div id="newclass-Content1-a"><br>
                            <input type="button" id="btn" value="Add new class"></input>
                            &nbsp;&nbsp;<br>
                            <div id="divoverlay" class="overlay"></div>
                            <div id="modal_dialog" class="web_dialog">
                                <table style="width: 100%; border: 0px;" cellpadding="3" cellspacing="0">
                                    <tr>
                                        <td class="dialog_title">
                                            Add New Class
                                        </td>
                                        <td class="dialog_title align_right">
                                            <a id="lnkClose" href="#">close</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="content">
                                                <select name="co">
                                                    <option value ="1"> OS </option>
                                                     <option value ="2"> CN </option>
                                                     <option value ="3"> CC </option>
                                                     <option value ="4"> SOCIO </option>
                                                     <option value ="5"> WEB </option>
                                                     <option value ="6"> PF </option>
                                                     <option value ="7"> DM </option>
                                                     <option value ="8"> CAL </option>
                                                
                                                
                                                </select><br>
                                                Description : <input id="txtName" type="text" name="des" /><br>
                                                Course Outline: <input id="txtName1" type="text" name="course" /><br>
                                                <input type="file" name="img"  name="image"/><br>
                                                <button id="btnOK" value="OK">OK</button>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <br><br><br>
                    </div>
                    <div id="newclass-Content2">
 
                       
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>