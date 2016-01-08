
        <?php
            include ('thead.php');
            include ('../header.php');
            include ('classbodyhead_t.php');
        ?>
<?php $c=$_REQUEST['class']; ?>
<ul id="sub-nav" class="sub_child_content" style="min-width: 220px;position: relative;left: 13;">
                        <li><a href=<?php echo '"ClassRooms_Info_TA_Teacher.php?class='.$c.'"' ?> >Information </a></li>
                        <li><a href=<?php echo '"ClassRooms_Announcements_Teacher_TA.php?class='.$c.'"' ?>>Announcements</a></li>
                        <li><a href=<?php echo '"ClassRooms_Files_TA_Teacher.php?class='.$c.'"' ?>>Files</a></li>
                        <li class="li_active"><a href=<?php echo '"ClassRooms_Posts_Teacher_TA.php?class='.$c.'"' ?>>Posts</a></li>
                    </ul>
                    </div>
                    <div id="Posts" class="sub_main_content sub_child_content" >
                        <h3>Posts</h3>
                        <div id="new_post" class="new_post">
                            <h4>New Posts</h4><hr>
                            <?php
                            if(isset($_REQUEST["Post"]) == true){
                                $d = $_REQUEST['pt'];
                                $d = addslashes($d);
                                $class = $_REQUEST['class'];
                                $u = $_SESSION['user'];
                                
                                $sql = "insert into post(postedBy,postDesc,classId) values ($u,'$d',$class);";
                                
                                $res = $db->query($sql);
                            }
                            ?>
                            <form>
                                <textarea  id="new_post_text" name="pt" class="new_text"  placeholder="Write ............"></textarea>
                                <hr>
                                <div class="" id="btn_div" >
                                    <input type="hidden" name="class" value=<?php echo $c ?>>
                                    <input class="btn" type="submit" class="" value="Post" name="Post">
                                    <input class="btn" type="button" value="Cancel">
                                </div>
                            </form>
                        </div>
                        <div id="old_posts" class="post_wrapper">
                            <?php
        $sql = 'select fname,lname,postDesc,postTime,userImg image from post,person where person.id=postedBy and classId = '.$_REQUEST['class'].' order by postTime desc;';
        $res = $db->query($sql);
        while($row = $res->fetch(PDO::FETCH_ASSOC))
        {
                    $img = $row["image"];
                    $img = '../'.$img;
                    if((empty($img) == true) || (file_exists($img) == false))
                    {
                        $img = '../image/defaultUser.jpg';
                    }
                    
                        echo    '<div class="post">
                                <div class="post_header">
                                    <div class="post_img_div">
                                        <img class="img-thumbnail img-circle" src="'.$img.'" style="">
                                    </div>
                                    <div class="posted_by">'.$row['fname'] .' '. $row['lname'] .'</div>
                                    <div id="date-time">
                        <div class="time"> '.substr($row['postTime'],strpos($row['postTime'],' ')).' </div> <br> 
                        <div class="date"> '.substr($row['postTime'],0,strpos($row['postTime'],' ')).' </div>
                                    </div>
                                </div>
                                <hr style="margin-left: 50;">
                                <div class="post_data"> 
                                    <p class="post_data_content"> 
                                        <b>Posts: </b> 
                                        <cite>'.$row['postDesc'].'
                                        </cite>
                                    </p>
                                    <div id="post_comments">
                                    </div>
                                </div>
                            </div>';
        }
                            ?>
                        </div>
                    </div>
                </div>
            </div> 
            
        </div>
   </body>
</html>