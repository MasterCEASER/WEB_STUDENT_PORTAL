<?php
    $host = $_SERVER['REQUEST_URI'];
$host = substr($host,0,strpos($host,'/PHP/')).'/PHP/';
?>
<script>
    <?php if(isset($_REQUEST['name'])==true)
{
        echo "localStorage['uname'] = '".$_REQUEST['name']."';"; 
    } 
    ?>
    <?php if(isset($_REQUEST['img'])==true){
        echo "localStorage['img'] = '".$_REQUEST['img']."';";
    }
    ?>;
</script>
        <div id="Header">
            <div class="wrapper">
                <div id="container">
                    <div class="main_menu ">
                        <div class="nav-bar ">
                            <div class="container ">
                                <div><img class="img-thumbnail img-circle web_logo_img logo" alt="Image Ot.Found.." src=<?php echo '"'.$host.'image/PUCIT1.png"' ?>></div>
                                <a id="logo" href=<?php echo '"'.$host.'"' ?>>PUCIT PORTAL</a>
                                <ul>
                                    <div style="display:table">
                                        <li style="border-left:0px">
                                            <a href=<?php echo '"'.$host.'home/"' ?> class="active">
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
                                            <a href=<?php echo '"'.$host.'post_HTML/GLOBAL_POST.php"' ?> >
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
                                    <img class="user_logo_img" id="user-profile-img" alt="Image NOt FOund ..." src=<?php echo '"'.$host.'image/defaultUser.jpg"' ?>>
                                    <div style="width:35px;">
                                        <div class="layer close" id="user-profile" style="">
                                            <ul>
                                                <li class="clearfix">
                                                    <a><i class="fa fa-user"></i>&nbsp; </a>
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
                                            var img = localStorage['img'];
                                            if(img != null && img != ""){
                                                
                                            var ui = $("#user-profile-img");
                                                ui.attr("src",<?php echo '"'.$host.'"' ?> + img);
                                                console.log(localStorage);
                                            }
                                            $("#user-profile-img");
                                            $("#user-profile > ul > li:nth-child(1) a").append(" "+ localStorage['uname']);
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
                                                var x = $("div#user-profile"); 
                                                x.removeClass("open");
                                                x.addClass("close");
                        location.pathname = location.pathname.substr(0,location.pathname.indexOf('/PHP/')+5) + "setting_html/settings.php";
                                            })
                                            $("div#user-profile > ul > li:nth-child(3)").click(function(){
                                                var x = $("div#user-profile"); 
                                                x.removeClass("open");
                                                x.addClass("close");
                                                
                        location.pathname = location.pathname.substr(0,location.pathname.indexOf('/PHP/')+5) + "signOut.php";
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
    <?php

//    echo "<pre>",print_r($_SESSION),"</pre>";    
?>