
        <?php
            include ('thead.php');
            include ('../header.php');
            include ('classbodyhead_t.php');
        ?>
<style>
    
</style><?php
   
if(isset($_REQUEST["Upload"]) == true){
    $file = $_FILES["file"];
    $name = $file['name'];
    $tmp = $file['tmp_name'];
    $path = "data/".substr(md5(time()),0,10);
    move_uploaded_file($tmp,"../".$path);
    $sql = "insert into files (classId,file,path) values(".$_REQUEST['class'].",'$name','$path')";
    $db->query($sql);
}
?>
<?php $c=$_REQUEST['class']; ?>
<ul id="sub-nav" class="sub_child_content" style="min-width: 220px;position: relative;left: 13;">
                        <li><a href=<?php echo '"ClassRooms_Info_TA_Teacher.php?class='.$c.'"' ?> >Information </a></li>
                        <li><a href=<?php echo '"ClassRooms_Announcements_Teacher_TA.php?class='.$c.'"' ?>>Announcements</a></li>
                        <li class="li_active"><a href=<?php echo '"ClassRooms_Files_TA_Teacher.php?class='.$c.'"' ?>>Files</a></li>
                        <li><a href=<?php echo '"ClassRooms_Posts_Teacher_TA.php?class='.$c.'"' ?>>Posts</a></li>
                    </ul>
                    </div>
                    <div id="Files" class="sub_main_content sub_child_content">
                        <h3>Files</h3><input type="button" id="Add" value="Add New File" class="btnClass">
                        <table cellpadding=15 style="width:80%;">
                            <?php 
                            $sql = 'select path,DATE_FORMAT(uploadTime,"%d-%m-%y %H:%i:%s") as ut,file from files where classId = '.$_REQUEST['class'].' order by uploadTime desc;';
        $res = $db->query($sql);
        while($row = $res->fetch(PDO::FETCH_ASSOC))
        {
                                    echo '<tr><td><div style="box-shadow: 5px 8px 25px -1px black;padding-left: 5px;padding-top: 1px;border: 2px solid grey;display: inline-block;width: 1000px;">
                                    <div style="width:79%;float:left;">
                                <p style="font-size: 20px;"><a href="#">'.$row['file'].'</a><br></p>
                                <p style="color:grey;"><i>'.$row['ut'].'</i></p>
                                </div><div style="width:19%;float:right;">
                                <form action="download.php">
                                <input type="hidden" name="class" value='.$c.'>
                                <input type="hidden" name="file_dwn" value="../'.$row['path'].'">
                                <input type="hidden" name="file_name" value="'.$row['file'].'">
                                <input type="hidden" name="redirect" value="ClassRooms_Files_TA_Teacher.php">
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
        <script>
            
        $(document).ready(function(){
            $("input#Add").click(function(){                
                $('#divoverlay').show();
                $('#modal_dialog').slideDown(500);
            })
            $("input#cancel").click(function(){                
                $('#modal_dialog').slideUp(500);
                $('#divoverlay').hide();
            })
            $("input#file").change(function(){
                var x = $("input#file").val()
                if(x != ""){
                    $("input#upload").removeAttr("disabled");
                }else{
                    $("input#upload").attr("disabled","true");
                }
            })
        });
        </script>
        <div id="divoverlay" class="overlay"></div>
        <div id="modal_dialog" class="web_dialog">
            <div><form method="post" enctype="multipart/form-data">
                <h3 class="dialog_header">UPLOAD NEW FILE</h3>
                <input type="file" id="file" name="file" class="btnClass" style="padding: 5px;margin-bottom: 50px;margin-top: 40px;"><br>
                                    <input type="hidden" name="class" value=<?php echo $c ?>>
                <input type="submit" name="Upload" id="upload" disabled value="Upload" style="float:left;margin-left: 125px;" class="btnClass">
                <input type="button" id="cancel" value="Cancel" class="btnClass" style="margin-right: 150px;">
            </form></div>
        </div>

    </body>
</html>