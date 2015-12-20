        
        
        
        <?php
        include ('thead.php');
        include ('../header.php');
        include ('classbodyhead_t.php');
        ?>
<?php $c=$_REQUEST['class']; ?>
<ul id="sub-nav" class="sub_child_content" style="min-width: 220px;position: relative;left: 13;">
                        <li><a href=<?php echo '"ClassRooms_Info_TA_Teacher.php?class='.$c.'"' ?> >Information </a></li>
                        <li class="li_active"><a href=<?php echo '"ClassRooms_Announcements_Teacher_TA.php?class='.$c.'"' ?>>Announcements</a></li>
                        <li><a href=<?php echo '"ClassRooms_Files_TA_Teacher.php?class='.$c.'"' ?>>Files</a></li>
                        <li><a href=<?php echo '"ClassRooms_Posts_Teacher_TA.php?class='.$c.'"' ?>>Posts</a></li>
                    </ul>
                    </div>
                    <div id="Announcements" class="sub_child_content sub_main_content" >
                        <h3>Announcements</h3>
                        
                        <div id="new_annouce" class="new_post">
                            <h4 style="display: inline;">New Announcements:</h4><hr>
                            <?php
                            if(isset($_REQUEST["Post"]) == true){
                                $s = $_REQUEST['ns'];
                                $a = $_REQUEST['na'];
                                $c = $_REQUEST['class'];
                                $sql = "insert into announcemnet(subject,description,classId) values ('$s','$a',$c);";
                                $res = $db->query($sql);
                            }
                            ?>
                            <form>
                                <div class="subject"><h4>Subject:</h4>
                                    <input type="hidden" name="class" value=<?php echo $c ?>>
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
                            $sql = 'Select * from announcemnet where classId='.$_REQUEST['class'].' order by time desc;';
                            $res = $db->query($sql);
                            while($row = $res->fetch(PDO::FETCH_ASSOC))
                            {
                                echo '<div class="post">
                <div class="post_header">
                    <div class="posted_by" style="text-shadow:2px 2px 1px white;">
                        &nbsp;&nbsp;&nbsp;
                        Subject: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <h6 style="display:inline;">'.$row['subject'].'</h6>
                    </div>
                    <div id="date-time">
                        <div class="time"> '.substr($row['time'],strpos($row['time'],' ')).' </div> <br> 
                        <div class="date"> '.substr($row['time'],0,strpos($row['time'],' ')).' </div>
                    </div>
                </div>
                <div class="detail">'.$row['description'].'</div>
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