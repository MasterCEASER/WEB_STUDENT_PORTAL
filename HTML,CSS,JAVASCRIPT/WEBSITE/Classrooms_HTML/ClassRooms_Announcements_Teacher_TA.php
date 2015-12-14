        
        
        
        <?php
        include ('thead.php');
        include ('../header.php');
        include ('classbodyhead_t.php');
        ?>
                    <div id="Announcements" class="sub_child_content sub_main_content" >
                        <h3>Announcements</h3>
                        
                        <div id="new_annouce" class="new_post">
                            <h4 style="display: inline;">New Announcements:</h4><hr>
                            <?php
                            if(isset($_REQUEST["Post"]) == true){
                                $s = $_REQUEST['ns'];
                                $a = $_REQUEST['na'];
                                $sql = "insert into announcemnet(subject,description,courseId,teacherId) values ('$s','$a',$c,$u);";
                                $res = $db->query($sql);
                            }
                            ?>
                            <form>
                                <div class="subject"><h4>Subject:</h4>
                                    <input type="text" name="ns">
                                </div>
                                <hr/>
                                <textarea id="new_announce_text" name='na' class="new_text" placeholder="Write Here . . . . "></textarea>
                                <hr>
                                <div class="" id="btn_div" >
                                    <input class="btn" type="submit" class="" value="Post" name="Post">
                                    <input class="btn" type="button" value="Cancel">
                                </div>
                            </form>
                        </div>
                        <div class="post_wrapper">
                            <?php 
                            $sql = 'Select * from announcemnet where teacherId='.$u.' and courseId='.$c.' order by time desc;';
                            $res = $db->query($sql);
                            while($row = $res->fetch(PDO::FETCH_NUM))
                            {
                                echo '<div class="post">
                                <div class="post_header">
                                <div class="posted_by" style="text-shadow:2px 2px 1px white;">
                                &nbsp;&nbsp;&nbsp;
                                Subject: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <h6 style="display:inline;">'.$row[1].'</h6>
                                </div>
                                <div id="date-time">
                                <div class="time"> '.substr($row[3],strpos($row[3],' ')).' </div> <br> 
                                <div class="date"> '.substr($row[3],0,strpos($row[3],' ')).' </div>
                                </div>
                                </div>
                                <div class="detail">'.$row[2].'</div>
                                </div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                
            </div>
<!--

            <div id="class-announcements-sidebar">
                <div id="class-logo-announcements-content">
                    <img src="../Images/class-logo.jpg" alt="Image Not Found...." >
                </div>
                <div id="class-info-announcements-content">
                    <h3>Description:</h3>
                    <div id="description">
                        Provides an introduction to the discipline of Web Engineering. This course aims to introduce the methods and techniques used in Web-based system development.
                    </div>
                </div>
            </div>
-->
        
        </div>
      
    </body>
</html>