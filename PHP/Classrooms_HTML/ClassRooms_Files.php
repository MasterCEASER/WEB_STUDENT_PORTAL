
        <?php
            include ('head.php');
            include ('../header.php');
            include ('classbodyhead.php');
     
if(isset($_SESSION['p']) == false){
    header("Location:../classController.php");   
}
else if($_SESSION['p'] == 't')
{
    header("Location:ClassRooms_Files_Teacher_TA.php");
}       
        ?>
<?php $c=$_REQUEST['class']; ?>
<ul id="sub-nav" class="sub_child_content" style="min-width: 220px;position: relative;left: 13px;">
                        <li><a href=<?php echo '"ClassRooms_Info.php?class='.$c.'"' ?> >Information </a></li>
                        <li><a href=<?php echo '"ClassRooms_Announcements.php?class='.$c.'"' ?> >Announcements</a></li>
                        <li class="li_active"><a href=<?php echo '"ClassRooms_Files.php?class='.$c.'"' ?>>Files</a></li>
                        <li><a href=<?php echo '"ClassRooms_Posts.php?class='.$c.'"' ?>>Posts</a></li>
                    </ul>
                    </div>
                    <div id="Announcements" class="sub_main_content sub_child_content">
                        <h3>Files</h3>
                        <table cellpadding=15 style="width:100%;">
                            <?php 
                            $sql = 'select path,DATE_FORMAT(uploadTime,"%d-%m-%y %H:%i:%s") as ut,file from files where classId = '.$_REQUEST['class'].' order by uploadTime desc;';
        $res = $db->query($sql);
        while($row = $res->fetch(PDO::FETCH_ASSOC))
        {
                                    echo '<tr><td><div style="box-shadow: 5px 8px 25px -1px black;padding-left: 5px;padding-top: 1px;border: 2px solid grey;display: inline-block;width: 1000px;">
                                    <div style="width:79%;float:left;">
                                <p style="font-size: 20px;"><a>'.$row['file'].'</a><br></p>
                                <p style="color:grey;"><i>'.$row['ut'].'</i></p>
                                </div><div style="width:19%;float:right;">
                                <form action="download.php">
                                <input type="hidden" name="class" value='.$c.'>
                                <input type="hidden" name="file_dwn" value="../'.$row['path'].'">
                                <input type="hidden" name="file_name" value="'.$row['file'].'">
                                <input type="hidden" name="redirect" value="ClassRooms_Files.php">
                                <input type="submit" name="dwn" value="Download" class="btnClass" style="position: relative;top: 39px;">
                                </form></div>
                            </div></td></tr>';
                                }
                            ?>
                            
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </body>
</html>