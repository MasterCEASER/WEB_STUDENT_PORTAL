<?php
        include ('head.php');
        include ('../header.php');
        include ('classbodyhead.php');
if(isset($_SESSION['p']) == false){
    header("Location:../classController.php");   
}
else if($_SESSION['p'] == 't')
{
    header("Location:ClassRooms_Announcements_Teacher_TA.php");
}

        $u = $_SESSION['user'];
//        $c = $_SESSION['course'];
        $class = $_REQUEST['class'];
?>
<?php $c=$_REQUEST['class']; ?>
<ul id="sub-nav" class="sub_child_content" style="min-width: 220px;position: relative;left: 13px;">
                        <li><a href=<?php echo '"ClassRooms_Info.php?class='.$c.'"' ?> >Information </a></li>
                        <li class="li_active"><a href=<?php echo '"ClassRooms_Announcements.php?class='.$c.'"' ?> >Announcements</a></li>
                        <li><a href=<?php echo '"ClassRooms_Files.php?class='.$c.'"' ?>>Files</a></li>
                        <li><a href=<?php echo '"ClassRooms_Posts.php?class='.$c.'"' ?>>Posts</a></li>
                    </ul>
                    </div>
<div id="Announcements" class="sub_child_content sub_main_content" >
    <h3>Announcements</h3>
    <div class="post_wrapper">
        <?php
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