<?php
    include ('thead.php');
    include ('../header.php');
    include ('classbodyhead_t.php');
?>
<style>
    textarea{        
    background: whitesmoke;
    border: 0px;
    resize: none;
    width: 100%;
    height: 100%;
    overflow: auto;
    font-size: 15px;
    font-family: sans-serif;
    }
</style>
<?php $c=$_REQUEST['class']; ?>
<ul id="sub-nav" class="sub_child_content" style="min-width: 220px;position: relative;left: 13;">
                        <li  class="li_active"><a href=<?php echo '"ClassRooms_Info_TA_Teacher.php?class='.$c.'"' ?> >Information </a></li>
                        <li><a href=<?php echo '"ClassRooms_Announcements_Teacher_TA.php?class='.$c.'"' ?>>Announcements</a></li>
                        <li><a href=<?php echo '"ClassRooms_Files_TA_Teacher.php?class='.$c.'"' ?>>Files</a></li>
                        <li><a href=<?php echo '"ClassRooms_Posts_Teacher_TA.php?class='.$c.'"' ?>>Posts</a></li>
                    </ul>
</div>
<div class="sub_child_content sub_main_content" >
    <div id='desc'>
    <h3>Description</h3>
    <textarea disabled=true>
    <?php
        $sql = 'select description,courseOutline from classes where classId = '.$_REQUEST['class'].';';
        $res = $db->query($sql);
        $row = $res->fetch(PDO::FETCH_NUM);
        echo $row[0];
        echo '</textarea><br><br><input type="button" class="btnClass" style="float:none;" id="e-desc" value="Edit Description"></div><hr><div id="outline"><h3>Course Outline</h3><textarea>'.$row[1].'</textarea><br><br><input type="button" class="btnClass" style="float:none;"  id="e-out" value="Edit Course Outline">';
    ?>
    </div>
</div></div></div></div>
<script>
    $("document").ready(function(){
        $("#e-desc").click(function(){
            var div = $(this).closest("div");
            var tta = div.find("textarea");
            var btn = $(this);
            btn.hide();
            var text = tta.val();
            tta.removeAttr("disabled")
            tta.css("background-color","white");
            tta.css("padding", "10px 15px 5px 10px").css("box-shadow","2px 2px 6px 2px grey");
            tta.keyup(function(){
                while($(this).outerHeight() < this.scrollHeight + parseFloat($(this).css("borderTopWidth")) + parseFloat($(this).css("borderBottomWidth"))) {
                    $(this).height($(this).height()+1);
                };
            });
            var save = $("<input type='button' class='btnClass' style='float:none;' value='Save' >");
            var cancel = $("<input type='button' class='btnClass' style='float:none;' value='Cancel' >");
            div.append(cancel);
            div.append(save);
            save.click(function(){
                var t = tta.val().trim();
                var data = {
                    "action" : "updateDesc",
                    "desc" : t
                }
                var settings = {
                    type : "POST",
                    dataType: "json",
                    url : "response1.php",
                    data : data,
                    success : function(respone){
                        console.log(respone);
                    },
                    error : function(err, type, httpStatus){
                        console.log(err +  "--" + type + "--"  + httpStatus);  
                    } 
                };
                $.ajax(settings);
                btn.show();
                tta.css("background-color","whitesmoke");
                tta.css("padding", "2px 0px 0px 2px").css("box-shadow","0px 0px 0px 0px");
                cancel.remove();
                save.remove();
            });
            cancel.click(function(){
                btn.show();
                tta.val(text);
                tta.css("background-color","whitesmoke");
                tta.css("padding", "2px 0px 0px 2px").css("box-shadow","0px 0px 0px 0px");
                cancel.remove();
                save.remove();
            });
        });
        $("textarea").each(function(){                    
            while($(this).outerHeight() < this.scrollHeight + parseFloat($(this).css("borderTopWidth")) + parseFloat($(this).css("borderBottomWidth"))) {
        $(this).height($(this).height()+1);
    };
                    $(this).height($(this).height()+15);
});
                $("#e-out").click(function(){
                    var div = $(this).closest("div");
                    
                    
                    var tta = div.find("textarea");
                    var btn = $(this);
                    btn.hide();
                    
                    var text = tta.val();
                    tta.removeAttr("disabled")
                    tta.css("background-color","white");
                    tta.css("padding", "10px 15px 5px 10px").css("box-shadow","2px 2px 6px 2px grey");
                    
                    tta.keyup(function(){
                    
                        while($(this).outerHeight() < this.scrollHeight + parseFloat($(this).css("borderTopWidth")) + parseFloat($(this).css("borderBottomWidth"))) {
        $(this).height($(this).height()+1);
                    $(this).height($(this).height()+15);
    };
});
                    var save = $("<input type='button' class='btnClass' value='Save' >");
                    var cancel = $("<input type='button' class='btnClass' value='Cancel' >");
                    div.append(cancel);
                    div.append(save);
                    save.click(function(){
                        var t = tta.val().trim();
                        
                        var data = {
                            "action" : "updateOut",
                            "out" : t
                        }
                        var settings = {
                            type : "POST",
                            dataType: "json",
                            url : "response1.php",
                            data : data,
                            success : function(respone){
                                console.log(respone);
                                
                            },
                            error : function(err, type, httpStatus){
                                console.log(err +  "--" + type + "--"  + httpStatus);  
                            } 
                        };
                        $.ajax(settings);
                        
                        btn.show();
                    tta.css("background-color","whitesmoke");
                    tta.css("padding", "2px 0px 0px 2px").css("box-shadow","0px 0px 0px 0px");
                        cancel.remove();
                        save.remove();
                        
                    });
                    cancel.click(function(){
                        btn.show();
                        tta.val(text);
                    tta.css("background-color","whitesmoke");
                    tta.css("padding", "2px 0px 0px 2px").css("box-shadow","0px 0px 0px 0px");
                        cancel.remove();
                        save.remove();
                    });
                });
            });
        </script>
    </body>
</html>