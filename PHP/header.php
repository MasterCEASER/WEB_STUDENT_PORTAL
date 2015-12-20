<?php
    $host = $_SERVER['REQUEST_URI'];
$host = substr($host,0,strpos($host,'/PHP/')).'/PHP/';
?>
        <div id="Header">
            <div class="wrapper">
                <div id="container">
                    <div class="main_menu ">
                        <div class="nav-bar ">
                            <div class="container ">
                                <div><img class="img-thumbnail img-circle web_logo_img logo" alt="Image Ot.Found.." src=<?php echo '"'.$host.'image/PUCIT1.png"' ?>></div>
                                <a id="logo" href=<?php echo '"'.$host.'mp1.php"' ?>>pucit portal</a>
                                <ul>
                                    <div style="display:table">
                                        <li style="border-left:0px">
                                            <a href=<?php echo '"'.$host.'home/home.php"' ?> class="active">
                                                <i class="fa fa-home"></i>
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href=<?php echo '"'.$host.'teacher_HTML/teachers.php"' ?>>
                                                <i class="fa fa-users"></i>
                                                Teachers
                                            </a>
                                        </li>
                                        <li style="display:table-cell;algin:right">
                                            <a href=<?php echo '"'.$host.'classesController.php"' ?>>
                                                <i class="fa fa-linkedin-square"></i>
                                                ClassRooms
                                            </a>
                                        </li>
                                        <li>
                                            <a href=<?php echo '"'.$host.'____"' ?> >
                                                <i class="fa fa-envelope-o"></i>
                                                Posts
                                            </a>
                                        </li>
                                        <li>
                                            <a href=<?php echo '"'.$host.'contact/contactUs.php"' ?>>
                                                <i class="fa fa-phone"></i>
                                                Contact
                                            </a>
                                        </li>
                                    </div>
                                </ul>
                                <div id="usr_img">
                                    <img class="user_logo_img" id="user-profile-img" alt="Image NOt FOund ..." src=<?php echo '"'.$host.'image/shuja.png"' ?>">
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
                                                var x = $("div#user-profile"); 
                                                x.removeClass("open");
                                                x.addClass("close");
                                                
                        location.pathname = location.pathname.substr(0,location.pathname.lastIndexOf('/')+1) + "addjob.php";
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
        