
        <?php
            include ('head.php');
            include ('../header.php');
        ?>
<div id="class-announcements-page">
            <div id="class-announcements-content">
                <h2> GLOBAL POSTS</h2>
                <div id="sub-content">                    
                <div id="class-announcements-sidebar" class="sub_child_content" style="">
                <div id="class-logo-announcements-content">
                    <img class="img-thumbnail "  src="../image/PUCIT1.png" alt="Image Not Found...." >
                </div>
                <hr/>
                <div id="class-info-announcements-content" >
                    <h3 class="active">Description:</h3>
                    <div class="panel-info" id="description">
                        An Emerging Computer Science Department By Punjab Univesity
                        <h2> Offering Degrees </h2>
                        <ul>
                            <li> BSCS </li>
                            <li> BSSE </li>
                            <li> BSIT </li>
                            <li> MCS </li>
                            <li> M-Phil </li>
                            <li> PHD </li>
                        </ul>
                            
                    </div>
                </div>
            </div>
                    <div id="Posts" class="sub_main_content sub_child_content" >
                        <h3>Posts</h3>
                        <div id="new_post" class="new_post">
                            <h4>New Posts</h4><hr>
                            <?php
                            if(isset($_REQUEST["Post"]) == true){
                                $u = $_SESSION['user'];
                                $d = $_REQUEST['pt'];
                                $d = addslashes($d);
                                $sql = "insert into post(postedBy,postDesc,global) values ($u,'$d',1);";
                                $res = $db->query($sql);
                            }
                            ?>
                            <form method="post">
                                <textarea  id="new_post_text" name="pt" class="new_text"  placeholder="Write ............"></textarea>
                                <hr>
                                <div class="" id="btn_div" >
                                    <input class="btn" type="submit" class="" value="Post" name="Post">
                                    <input class="btn" type="button" value="Cancel">
                                </div>
                            </form>
                        </div>
                        <div id="old_posts" class="post_wrapper">
                            <?php
        $sql = 'select concat(fname," ",lname) as name,postDesc,postTime,userImg image from post,person where postedBy=person.id  and global = 1 order by postTime desc;';
        $res = $db->query($sql);
        while($row = $res->fetch(PDO::FETCH_ASSOC))
        {$img = $row["image"];
                    if($img == "" || (file_exists("../".$img) == false))
                    {
                        $img = 'image/defaultUser.jpg';
                    }
                    $img = '../'.$img;
                        echo    '<div class="post">
                                <div class="post_header">
                                    <div class="post_img_div">
                                        <img class="img-thumbnail img-circle" src="'.$img.'" style="">
                                    </div>
                                    <div class="posted_by">'.$row['name'].'</div>
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