<?php
    include ('head.php');
    include ('../header.php');
    include ('classbodyhead.php');

if(isset($_SESSION['p']) == false || isset($_REQUEST['class']) == false){
    header("Location:../classController.php");   
}
else if($_SESSION['p'] == 't')
{
    header("Location:ClassRooms_Info_Teacher_TA.php");
}
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
<?php $c=$_REQUEST['class']; ?>
<ul id="sub-nav" class="sub_child_content" style="min-width: 220px;position: relative;left: 13px;">
                        <li class="li_active"><a href=<?php echo '"ClassRooms_Info.php?class='.$c.'"' ?> >Information </a></li>
                        <li><a href=<?php echo '"ClassRooms_Announcements.php?class='.$c.'"' ?> >Announcements</a></li>
                        <li><a href=<?php echo '"ClassRooms_Files.php?class='.$c.'"' ?>>Files</a></li>
                        <li><a href=<?php echo '"ClassRooms_Posts.php?class='.$c.'"' ?>>Posts</a></li>
                    </ul>
</div>
    <div class="sub_child_content sub_main_content" style="max-width:20px;">
        <h3>Description</h3><textarea>
<?php
        $u = $_SESSION['user'];
        $sql = 'select description,courseOutline from classes where classId = '.$_REQUEST['class'].';';
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