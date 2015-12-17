<html>
    <head>        
        <link href="../css/style.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/headr.css">
        <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
        <script src="../js/jquery-2.1.4.min.js"></script>
    </head>
    <body>
        
        
        <div id="Header">
            <div class="wrapper">
                <div id="container">
                    <div class="main_menu ">
                        <div class="nav-bar ">
                            <div class="container ">
                                <div><img class="img-thumbnail img-circle web_logo_img logo" alt="Image Ot.Found.." src="../images/PUCIT1.png"></div>
                                <a id="logo" href="index.html">pucit portal</a>
                                <ul>
                                    <div style="display:table">
                                        <li style="border-left:0px">
                                            <a href="../home/home.html" class="active">
                                                <i class="fa fa-home"></i>
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../teacher_HTML/teacher-info.html" >
                                                <i class="fa fa-users"></i>
                                                Teachers
                                            </a>
                                        </li>
                                        <li style="display:table-cell;algin:right">
                                            <a href="../Classrooms_HTML/classrommS/classroom_S.html" >
                                                <i class="fa fa-linkedin-square"></i>
                                                ClassRooms
                                            </a>
                                        </li>
                                        <li>
                                            <a href="GLOBAL%20POST.html" >
                                                <i class="fa fa-envelope-o"></i>
                                                Posts
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../Classrooms_HTML/contact/contactUs.html" >
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
                                    <img class="user_logo_img" id="user-profile-img" alt="Image NOt FOund ..." src="../images/shuja.png">
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
        <div id="class-announcements-page">
            <div id="class-announcements-content">
                <h2>Class : <i>Web Engineering</i></h2>
                <div id="sub-content">
                    <!--<div id="sub-nav">
                        <div><a href="ClassRooms_Announcements.html">Announcements</a></div>
                        <div><a href="ClassRooms_Files.html">Files</a></div>
                        <div><a href="ClassRooms_Posts.html">Posts</a></div>
                    </div>-->
                    <div id="class-announcements-sidebar" class="sub_child_content" style="border: 0px solid black;">
                        <div id="class-logo-announcements-content">
                            <img class=""  src="../Images/class-logo.jpg" alt="Image Not Found...." >
                        </div>
                        <hr/><!--
                <div id="class-info-announcements-content" >
                    <h3 class="active">Description:</h3>
                    <div class="panel-info" id="description">
                        Provides an introduction to the discipline of Web Engineering. This course aims to introduce the methods and techniques used in Web-based system development.
                    </div>
                </div>-->
                    
                    <ul id="sub-nav"  class="sub_child_content">
                        <li><a href="ClassRooms_Info_TA_Teacher.html">Information </a></li>
                        <li><a href="ClassRooms_Announcements_Teacher_TA.html">Announcements</a></li>
                        <li><a href="ClassRooms_Files_TA_Teacher.html">Files</a></li>
                        <li><a href="ClassRooms_Posts_Teacher_TA.html">Posts</a></li>
                    </ul>
                    </div>
                    <div id="Files" class="sub_main_content sub_child_content">
                        <h3>Files</h3>
                        <div id="add_new_file">
                            <input type="button" value="Add New File">
                        </div>
                        <table cellpadding=15 border="1" style="width:80%;">
                            <tr><td>
                                <a href="#"></a>File 1 ........<br>
                                27-10-15  03:55
                            </td></tr>
                            <tr><td>
                                <a href="#"></a>File 2 ........<br>
                                27-10-15  03:55
                            </td></tr>
                            <tr><td>
                                <a href="#"></a>File 3 ........<br>
                                27-10-15  03:55
                            </td></tr>
                            <tr><td>
                                <a href="#"></a>File 4 ........<br>
                                27-10-15  03:55
                            </td></tr>
                            <tr><td>
                                <a href="#"></a>File 5 ........<br>
                                27-10-15  03:55
                            </td></tr>
                        </table>
                    </div>
                </div>
            </div>
            <!--<div id="class-announcements-sidebar">
                <div id="class-logo-announcements-content">
                    <img src="../Images/class-logo.jpg" alt="Image Not Found...." >
                </div>
                <div id="class-info-announcements-content">
                    <h3>Description:</h3>
                    <div id="description">
                        Provides an introduction to the discipline of Web Engineering. This course aims to introduce the methods and techniques used in Web-based system development.
                    </div>
                </div>
            </div>-->
        </div>
    </body>
</html>