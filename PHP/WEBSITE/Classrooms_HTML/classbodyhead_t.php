<hr style="margin-top:20px;">   
        
        <div id="class-announcements-page">
            <div id="class-announcements-content">
                <h2 style="min-width: 70%;display: inline-block;">Class : <i>
                    <?php
                    
        $sql = 'select c.courseName,c1.image from courses c,classes c1 where c.courseId = c1.courseId and classId ='.$_REQUEST['class'];
        $res = $db->query($sql);
        $row = $res->fetch(PDO::FETCH_ASSOC);
            echo $row['courseName'];
                    $img = '../'.$row['image'];
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
                        </div>
                        <hr/>
                        <script>
                            $("document").ready(function(){
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
                     