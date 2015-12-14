
            <?php
        include ('thead.php');
        include ('../header.php');
        include ('classbodyhead_t.php');
    ?>
                    <div class="sub_child_content sub_main_content" >
                        <div id='desc'>
                        <input type="button" id="e-desc" value="Edit Description">
                        <h3>Description</h3><p>
                    <?php
                        $sql = 'select c.description,t.courseOutline from courses c,teacher t where c.courseId = t.courseId and teacherId = '.$u.' and t.courseId = '.$c.'; ';
$res = $db->query($sql);
$row = $res->fetch(PDO::FETCH_NUM);
    echo $row[0];
    echo '</p></div><hr><div id="outline"><input type="button" id="e-out" value="Edit Course Outline"><h3>Course Outline</h3><p>';
    echo $row[1];
                        ?>
                            </p> 
                            </div>
                    </div>
                </div>
            </div>
            
        </div>
        <script>
            $("document").ready(function(){
                $("#e-desc").click(function(){
                    var div = $(this).closest("div");
                    var p = div.find("p");
                    var h3 = div.find("h3");
                    var ta = $("<textarea style='width:"+p.css("width")+";height:"+p.css("height")+"'>")
                    ta.keyup(function(e) {
                        while($(this).outerHeight() < this.scrollHeight + parseFloat($(this).css("borderTopWidth")) + parseFloat($(this).css("borderBottomWidth"))) {
        $(this).height($(this).height()+1);
    };
});
                    var t = p.html().trim();
                        t = t.split('<br>').join('\n\r');
                    ta.val(t);
                    ta.css("overflow","hidden");
                    var save = $("<input type='button' value='Save' >");
                    var cancel = $("<input type='button' value='Cancel' >");
                    var div2 = $("<div id='ed-desc'>");
                    var hh = h3.clone();
                    div2.html(hh);
                    div2.append(ta);
                    div2.append("<br><br>");
                    div2.append(save);
                    div2.append(cancel);
                    div2.insertAfter(div);
                    div.hide();
                    save.click(function(){
                        var t = div2.find("textarea").val();
                        t = t.split('\n').join('<br>');
                        div.find("p").html(t);
                        div2.remove();
                        div.show();
                        
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
                        
                        
                    });
                    cancel.click(function(){
                        div2.remove();
                        div.show();
                    });
                });
                $("#e-out").click(function(){
                    var div = $(this).closest("div");
                    var p = div.find("p");
                    var h3 = div.find("h3");
                    var ta = $("<textarea style='width:"+p.css("width")+";height:"+p.css("height")+"'>")
                    ta.keyup(function(e) {
                        while($(this).outerHeight() < this.scrollHeight + parseFloat($(this).css("borderTopWidth")) + parseFloat($(this).css("borderBottomWidth"))) {
        $(this).height($(this).height()+1);
    };
});
                    var t = p.html().trim();
                        t = t.split('<br>').join('\n');
                    ta.val(t);
                    ta.css("overflow","hidden");
                    var save = $("<input type='button' value='Save' >");
                    var cancel = $("<input type='button' value='Cancel' >");
                    var div2 = $("<div id='ed-out'>");
                    var hh = h3.clone();
                    div2.html(hh);
                    div2.append(ta);
                    div2.append("<br><br>");
                    div2.append(save);
                    div2.append(cancel);
                    div2.insertAfter(div);
                    div.hide();
                    save.click(function(){
                        var t = div2.find("textarea").val();
                        t = t.split('\n').join('<br>');
                        div.find("p").html(t);
                        div2.remove();
                        div.show();
                        
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
                        
                        
                    });
                    cancel.click(function(){
                        div2.remove();
                        div.show();
                    });
                });
            });
        </script>
    </body>
</html>