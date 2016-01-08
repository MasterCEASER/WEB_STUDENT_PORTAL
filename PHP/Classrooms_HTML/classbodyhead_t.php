<?php
if(isset($_REQUEST['UploadImg']) === true){
    $file = $_FILES['file'];
    $classs=$_REQUEST['class'];
    if($file["name"] != ""){
        $sql = "SELECT image from classes where classId = $classs";
        $row = $db->query($sql);
        
        $res = $row->fetch(PDO::FETCH_NUM);
        if(empty($res[0]) == false && file_exists("../image/".$res[0])){
            unlink("../image/".$res[0]);
        }
        $dest =  substr(md5(time()),0,10) . '.'.strtolower(end(explode('.',$_FILES["file"]["name"])));
        move_uploaded_file($file['tmp_name'],"../image/".$dest);
        $qur = "update classes set image = '$dest'  where classId = '$classs' ";
	   $db->query($qur);
    }
}
                        ?>

<hr style="margin-top:20px;">   
        
        <div id="class-announcements-page">
            <div id="class-announcements-content">
                <h2 style="min-width: 70%;display: inline-block;">Class : <i>
                    <?php
                    
        $sql = 'select c.courseName,c1.image from courses c,classes c1 where c.courseId = c1.courseId and classId ='.$_REQUEST['class'];
        $res = $db->query($sql);
        $row = $res->fetch(PDO::FETCH_ASSOC);
            echo $row['courseName'];
                    
                    $img = $row['image'];
                    if(empty($img) == true){
                        $img = 'default.jpg';
                    }
                    $img = '../image/'.$img;
                    if((empty($img) == true) || (file_exists($img) == false))
                    {
                        $img = '../image/default.jpg';
                    }
                    ?>
                    </i></h2>
                <style>
                    .ta__cl{
                        float: none;
                        display: inline;background-color: #3a3a3a;color: gainsboro;padding: 10px;
                        border: 0;
                        margin-right: 0;
                    }
                    .txtCon{
                        
                                height: 40px;
                                position: relative;
                                z-index: 400;
                                left: 4px;
                                width: 220;
                                bottom: 44px;
                                text-align: center;
                                font-size: 22px;
                                background: rgba(0,0,0,0.5);
                                color: white;
                                cursor: pointer;
                                text-shadow: 2px 2px 2px lightgrey;
                    }
                </style>
                
                
                <?php 
                $sql = "Select type from person where id = ".$_SESSION['user'];//echo $sql;
    $res = $db->query($sql);
    $row = $res->fetch(PDO::FETCH_ASSOC);
        $t = $row['type'];
        if($t==1){
                include('classTA.php'); 
        }
                ?>
                <div id="sub-content">
                    <div id="class-announcements-sidebar" class="sub_child_content" style="border: 0px solid black;">
                        <div id="class-logo-announcements-content">
                            <img src=<?php echo $img; ?> alt="Image Not Found...." >
                            <div class="txtCon">Change Image</div>
                        </div>
                        <hr/>
                        <script>
                            $("document").ready(function(){
                                var ch = $("#class-logo-announcements-content");
                                ch.find("div").slideUp();
                                ch.mouseenter(function(){
                                    ch.find("div").slideDown();
                                }).mouseleave(function(){
                                    ch.find("div").slideUp();
                                });
                                ch.find("div").click(function(){
                                    var dd = $("#ta_dia");
                                    var form = $("<form method='post' enctype='multipart/form-data'>");
                                    var inp = $("<input type=hidden name='class' >");
                                    inp.attr("value","<?php echo $_REQUEST['class'] ?>");
                                    form.append(inp);
                                    
                                    form.append("<br><h2>Change Class Image</h2><hr>");    
                                    var file = $("<input class='btnClass' type='file' name='file'>");
                                    file.appendTo(form);
                                    
                                    var img = $("<img >");
                                    img.attr("src",$("#class-logo-announcements-content > img").attr("src"));
                                    img.css("max-height","120px");
                                    img.css("max-width","120px");
                                    img.css("margin-bottom" ,"-35px");
                                    img.css("position" ,"relative");
                                    img.css("left" ,"57%");
                                    form.append(img);
                                    form.append("<br><br><br><hr>");
                                    inp = $("<input type=submit class='btnClass' name='UploadImg' disabled value='Upload' >")
                                    
                                    file.change(function(event){
                                        
                        var f = $(this);
                        x = f.val().substr(f.val().lastIndexOf("."));
                        console.log(x);
                        console.log(f);
                        if(!(x == ".jpg" ||x == ".jpeg" ||x == ".png" )){
                            f.val("");
                            inp.attr("disabled","true");
                            img.fadeIn("fast").attr('src',$("#class-logo-announcements-content > img").attr("src"));
                        }else{
                            inp.removeAttr("disabled");
                            var tmppath = URL.createObjectURL(event.target.files[0]);
                            img.fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));
                        }
                    });
                                    
                                    var cancel = $("<input type=button class='btnClass' name='cancel' value='Cancel' >")
                                    form.append(cancel);
                                    form.append(inp);
                                    dd.append(form);
                                    dd.css("height","400px");
                                    dd.slideDown(500);
                                    $("#divoverlay").show();
                                    cancel.click(function(){
                                        
                            $("#divoverlay").hide();
                            $("#ta_dia *").remove();
                            $("#ta_dia").slideUp(500);
                                    });
                                    
                                });
                                $("#sub-content #sub-nav > li a").css("text-decoration","none");
                                $("#sub-content #sub-nav > li").hover(function(){
                                    $(this).css("margin-bottom", "8px").css("text-shadow","2px 2px 2px gray").css("zoom","150%");
                                    $(this).css("background-color","#E4E4E4").css("margin-top", "8px");
                                    $("#sub-content #sub-nav > li.li_active").hover($(this).css("transform" ,"rotate(0deg)"));
                                    
                                }).mouseleave(function(){
                                    $(this).css("text-shadow","").css("margin-bottom", "3px").css("zoom","100%").css("margin-top", "0px");
                                    $(this).css("background-color","#F5F5F5");
                                    $("#sub-content #sub-nav > li.li_active").css("margin-top", "14px");
                                    $("#sub-content #sub-nav > li.li_active").css("transform" ,"rotate(4deg)");
                                });
                            })
                        </script>
                     