<?php
    include ('head.php');
    include ('../header.php');
    include ('classbodyhead.php');
?>

<style>
    textarea{        
    background: whitesmoke;
    border: 0px;
    resize: none;
    width: 100%;
    height: 100%;
        outline: none;
    overflow: auto;
    font-size: 15px;
    font-family: sans-serif;
    }
</style>
<ul id="sub-nav" class="sub_child_content" style="min-width: 220px;position: relative;left: 13px;">
                        <li class="li_active"><a href="ClassRooms_Info.php">Information </a></li>
                        <li><a href="ClassRooms_Announcements.php">Announcements</a></li>
                        <li><a href="ClassRooms_Files.php">Files</a></li>
                        <li><a href="ClassRooms_Posts.php">Posts</a></li>
                    </ul>
</div>
    <div class="sub_child_content sub_main_content" style="max-width:20px;">
        <h3>Description</h3><textarea>
<?php
        $u = $_SESSION['user'];
        $c = $_SESSION['course'];
        $sql = 'select description,courseOutline from classes where classId = '.$_SESSION['class'].';';
        $res = $db->query($sql);
        $row = $res->fetch(PDO::FETCH_NUM);
        echo $row[0];
        echo '</textarea><hr><h3>Course Outline</h3><textarea>';
        echo $row[1];
    ?>
        
                        </textarea></div>
<script>
    $("document").ready(function(){
        $("textarea").each(function(){
            $(this).attr("disabled","true");
            while($(this).outerHeight() < this.scrollHeight + parseFloat($(this).css("borderTopWidth")) + parseFloat($(this).css("borderBottomWidth"))) {
        $(this).height($(this).height()+1);
    };
    });
    });
</script>
        <?php
        include ('foot.php');
?>