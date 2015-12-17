
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
    move_uploaded_file($tmp,$path);
    $sql = "insert into files (classId,file,path) values(".$_SESSION['class'].",'$name','$path')";
    $db->query($sql);
}
?>
<ul id="sub-nav" class="sub_child_content" style="min-width: 220px;position: relative;left: 13;">
                        <li><a href="ClassRooms_Info_TA_Teacher.php">Information </a></li>
                        <li><a href="ClassRooms_Announcements_Teacher_TA.php">Announcements</a></li>
                        <li class="li_active"><a href="ClassRooms_Files_TA_Teacher.php">Files</a></li>
                        <li><a href="ClassRooms_Posts_Teacher_TA.php">Posts</a></li>
                    </ul>
                    </div>
                    <div id="Files" class="sub_main_content sub_child_content">
                        <h3>Files</h3><input type="button" id="Add" value="Add New File" class="btnClass">
                        <table cellpadding=15 style="width:80%;">
                            <?php 
                            $sql = 'select path,DATE_FORMAT(uploadTime,"%d-%m-%y %H:%i:%s") as ut,file from files where classId = '.$_SESSION['class'].' order by uploadTime desc;';
        $res = $db->query($sql);
        while($row = $res->fetch(PDO::FETCH_ASSOC))
        {
                                    echo '<tr><td><div style="box-shadow: 5px 8px 25px -1px black;padding-left: 5px;padding-top: 1px;border: 2px solid grey;display: inline-block;width: 1000px;">
                                    <div style="width:79%;float:left;">
                                <p style="font-size: 20px;"><a href="#">'.$row['file'].'</a><br></p>
                                <p style="color:grey;"><i>'.$row['ut'].'</i></p>
                                </div><div style="width:19%;float:right;">
                                <form action="download.php">
                                <input type="hidden" name="file_dwn" value="'.$row['path'].'">
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
        <style>
            .overlay
        {
            position: fixed;
            display: none;
            width: 100%;
            height: 100%;
            left: 0;
            right: 0;
            bottom: 0;
            top: 0;
            z-index: 101;
            background-color: #000000;
            opacity: .15;
            filter: alpha(opacity=15);
            -moz-opacity: .15;
        }
        .web_dialog
        {
            left: 45%;
            top: 35%;
            width: 500px;
            height: 300px;
            background-color: White;
            border-color: Black;            
            border: 2px solid black;
            box-shadow: 5px 5px 8px 6px gray;
            z-index: 102;
            display: none;
            position: fixed;
            margin-left: -100px;
            margin-top: -100px;
        }
        </style>
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
                <h3 style="padding: 4px;text-shadow: 3px 3px 4px grey;box-shadow: 2px 2px 2px 2px;display: inline;position: relative;left: 163px;top: 15px;">UPLOAD NEW FILE</h3>
                <input type="file" id="file" name="file" class="btnClass" style="padding: 5px;margin-bottom: 50px;margin-top: 40px;"><br>
                <input type="submit" name="Upload" id="upload" disabled value="Upload" style="float:left;margin-left: 125px;" class="btnClass">
                <input type="button" id="cancel" value="Cancel" class="btnClass" style="margin-right: 150px;">
            </form></div>
        </div>

    </body>
</html>