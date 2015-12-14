<?php
        include ('head.php');
        include ('../header.php');
        include ('classbodyhead.php');
?>
<div id="Announcements" class="sub_child_content sub_main_content" >
    <h3>Announcements</h3>
    <div class="post_wrapper">
        <?php
        $u = $_SESSION['user'];
        $c = $_SESSION['course'];
        $sql = 'Select * from announcemnet where (teacherId,courseId)=(select teacherId,courseId from student where  studentId='.$u.' and courseId='.$c.');';
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
<?php  
        include ('foot.php');
?>