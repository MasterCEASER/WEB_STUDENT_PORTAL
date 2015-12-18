
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
                                            <a href="/PHP_PRO/PHP/WEBSITE/classesController.php" >
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
        