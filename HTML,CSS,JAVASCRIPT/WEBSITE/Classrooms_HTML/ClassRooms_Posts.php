
        <?php
            include ('head.php');
            include ('../header.php');
            include ('classbodyhead.php');
        $u = $_SESSION['user'];
        $c = $_SESSION['course'];
        $t = $_SESSION['teacher'];
        ?>
                    <div id="Posts" class="sub_main_content sub_child_content" >
                        <h3>Posts</h3>
                        <div id="new_post" class="new_post">
                            <h4>New Posts</h4><hr>
                            <?php
                            if(isset($_REQUEST["Post"]) == true){
                                $d = $_REQUEST['pt'];
                                $sql = "insert into post(postedBy,postDesc,courseId,teacherId) values ($u,'$d',$c,$t);";
                                $res = $db->query($sql);
                            }
                            ?>
                            <form>
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
        $sql = 'select concat(fname," ",lname) as name,postDesc,files,postTime from post,person where postedBy=person.id and courseId = '.$c.' and teacherId = '.$t.' order by postTime desc;';
        $res = $db->query($sql);
        while($row = $res->fetch(PDO::FETCH_NUM))
        {
                        echo    '<div class="post">
                                <div class="post_header">
                                    <div class="post_img_div">
                                        <img class="img-thumbnail img-circle" src="../Images/PUCIT1.png" style="">
                                    </div>
                                    <div class="posted_by">'.$row[0].'</div>
                                    <div id="date-time">
                        <div class="time"> '.substr($row[3],strpos($row[3],' ')).' </div> <br> 
                        <div class="date"> '.substr($row[3],0,strpos($row[3],' ')).' </div>
                                    </div>
                                </div>
                                <hr style="margin-left: 50;">
                                <div class="post_data"> 
                                    <p class="post_data_content"> 
                                        <b>Posts: </b> 
                                        <cite>'.$row[1].'
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