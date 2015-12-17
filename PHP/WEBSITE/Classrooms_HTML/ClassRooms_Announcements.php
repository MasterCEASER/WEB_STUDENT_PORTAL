<?php
        include ('head.php');
        include ('../header.php');
        include ('classbodyhead.php');
?>
<ul id="sub-nav" class="sub_child_content" style="min-width: 220px;position: relative;left: 13px;">
                        <li><a href="ClassRooms_Info.php">Information </a></li>
                        <li class="li_active"><a href="ClassRooms_Announcements.php">Announcements</a></li>
                        <li><a href="ClassRooms_Files.php">Files</a></li>
                        <li><a href="ClassRooms_Posts.php">Posts</a></li>
                    </ul>
                    </div>
<div id="Announcements" class="sub_child_content sub_main_content" >
    <h3>Announcements</h3>
    <div class="post_wrapper">
        <?php
        $u = $_SESSION['user'];
        $c = $_SESSION['course'];
        $class = $_SESSION['class'];
        $sql = 'Select * from announcemnet where classId = '.$class.';';
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
<?php  
        include ('foot.php');
?>