<div style="display: inline;">
<?php
    $sql = "Select type from person where id = ".$_SESSION['user'];//echo $sql;
    $res = $db->query($sql);
    $row = $res->fetch(PDO::FETCH_ASSOC);
        $t = $row['type'];
        if($t==1){
            $sql = "select count(*) as c from ta where classId = ".$_REQUEST['class'];
            $res = $db->query($sql);
            $row = $res->fetch(PDO::FETCH_ASSOC);
            $count = $row['c'];
            echo '<div style="display: inline;" id="'.$count.'">
            <input class="btnClass ta__cl" type="button" id="add_ta" value="Add TA" style="border-top-left-radius: 25px;border-bottom-left-radius: 25px;">
            <input class="btnClass ta__cl" type="button" id="view_ta" value="View TA" style="">
            <input class="btnClass ta__cl" type="button" id="remove_ta" value="Remove TA" style="border-top-right-radius: 25px;border-bottom-right-radius: 25px;">
            </div>';
            
            $sql = "select count(*) as c from student where classId = ".$_REQUEST['class'];
            $res = $db->query($sql);
            $row = $res->fetch(PDO::FETCH_ASSOC);
            $count = $row['c'];
            echo '<div style="display: inline;float:right;" id="'.$count.'">
                <input class="btnClass ta__cl" type="button" id="add_st" value="Add Student" style="border-top-left-radius: 25px;border-bottom-left-radius: 25px;">
                <input class="btnClass ta__cl" type="button" id="view_st" value="View Students" style="">
                <input class="btnClass ta__cl" type="button" id="remove_st" value="Remove Students" style="border-top-right-radius: 25px;border-bottom-right-radius: 25px;">
            </div>
            <br><br><br><br><br>';
        }

?>
            </div>
                <div id="divoverlay" class="overlay"></div>
                <div id="ta_dia" class="web_dialog">                    
                </div>
                <script>
                    $("document").ready(function(){
                        
                        $("#divoverlay").click(function(){
                            $(this).hide();
                            $("#ta_dia *").remove();
                            $("#ta_dia").slideUp(500).css("height","300px");
                        });
                        $("#add_ta").click(function(){
                            var c = $(this).closest("div").attr("id");
                            if(c >= 2){
                                alert("You cant add more TA..");
                            }else{
                                var m = $("#ta_dia");
                                var add = $("<input class='btnClass' type='button' value='Add'>");
                                var cancel = $("<input class='btnClass' type='button' value='Cancel'>");
                                var sel = $("<select style='float:none;margin-left:25%;' class='btnClass'>");
                                
                                var data = {
                                    action : "TA_selection",
                                    c : <?php echo $_REQUEST['class']; ?>
                                };
                                var settings = {
                                    type : "POST",
                                    dataType: "json",
                                    url : "response1.php",
                                    data : data,
                                    success : function(respone){
                                        for(var x in respone.data){
                                            var opt = $("<option>");
                                            opt.html(respone.data[x][0] + " - " + respone.data[x][1] + " " + respone.data[x][2]);
                                            sel.append(opt);
                                        }
                                    },
                                    error : function(err, type, httpStatus){
                                        console.log(err +  "--" + type + "--"  + httpStatus);  
                                    } 
                                };
                                $.ajax(settings);
                                var h3 = $("<h3 class='dialog_header1'>");
                                h3.text("Add New TA");
                                m.append(h3);
                                m.append("<br>");
                                m.append(sel);
                                m.append("<br><br><hr>");
                                m.append(cancel);
                                m.append(add);
                                $("#divoverlay").show();
                                m.css("height","300px");
                                m.slideDown(500);
                        cancel.click(function(){
                            $("#divoverlay").hide();
                            $("#ta_dia *").remove();
                            $("#ta_dia").slideUp(500);
                        });
                        add.click(function(){
                            var x = sel.val();
                            x = parseInt(x.substr(0,x.indexOf('-')));
                            
                           var data = {
                                    action : "add_TA",
                                    c : <?php echo $_REQUEST['class'] ?>,
                                    t : x
                                };
                                var settings = {
                                    type : "POST",
                                    dataType: "json",
                                    url : "response1.php",
                                    data : data,
                                    success : function(respone){
                                        console.log(respone.data);
                                        var d = $("#add_ta").closest("div");
                                        var id = parseInt(d.attr("id"));
                                        id = id  + 1;
                                        d.attr("id",id);
                                    },
                                    error : function(err, type, httpStatus){
                                        console.log(err +  "--" + type + "--"  + httpStatus);  
                                    } 
                                };
                                $.ajax(settings); 
                            
                            $("#divoverlay").hide();
                            $("#ta_dia *").remove();
                            $("#ta_dia").slideUp(500);
                        });
                            }
                        });
                        $("#view_ta").click(function(){
                            var c = $(this).closest("div").attr("id");
                            if(c == 0){
                                alert("No TA in class.");
                            }else{
                                var m = $("#ta_dia");
                                var data = {
                                    action : "viewTA",
                                    c : <?php echo $_REQUEST['class'] ?>
                                };
                                var settings = {
                                    type : "POST",
                                    dataType: "json",
                                    url : "response1.php",
                                    data : data,
                                    success : function(respone){
                                        for(var x in respone.data){
                                            var div = $("<div>");
                                            var name = $("<h3>");
                                            name.text(respone.data[x]['fname'].toUpperCase() + " " + respone.data[x]['lname'].toUpperCase());
                                            var i = $("<img>");
                                            i.attr("src",respone.data[x]['userImg']);
                                            i.css("width","120px");
                                            i.css("height","130px");
                                            div.html(i);
                                            div.append(name);
                                            console.log(respone.data);
                                            m.append(div);
                                        }
                                    },
                                    error : function(err, type, httpStatus){
                                        console.log(err +  "--" + type + "--"  + httpStatus);  
                                    } 
                                };
                                $.ajax(settings);
                                m.css("height","300px");
                                m.slideDown(500);
                                $("#divoverlay").show();
                                    }
                                });
                        $("#remove_ta").click(function(){
                            var c = $(this).closest("div").attr("id");
                            if(c == 0){
                                alert("No TA in class.");
                            }else{
                                var m = $("#ta_dia");
                                var data = {
                                    action : "viewTA",
                                    c : <?php echo $_REQUEST['class'] ?>
                                };
                                var settings = {
                                    type : "POST",
                                    dataType: "json",
                                    url : "response1.php",
                                    data : data,
                                    success : function(respone){
                                        for(var x in respone.data){
                                            var div = $("<div>");
                                            var name = $("<h3>");
                                            name.text(respone.data[x]['fname'].toUpperCase() + " " + respone.data[x]['lname'].toUpperCase());
                                            var i = $("<img>");
                                            i.attr("src",respone.data[x]['userImg']);
                                            i.css("width","120px");
                                            i.css("height","130px");
                                            var remove = $("<input type='button'>");
                                            remove.attr("id",respone.data[x]['studentId']);
                                            remove.attr("value","Remove");
                                            remove.addClass("btnClass");
                                            div.html(i);
                                            div.append(name);
                                            div.append(remove);
                                            console.log(respone.data);
                                            m.append(div);
                                            remove.click(function(){
                                                var mainDiv = $("#remove_ta").closest("div");
                                                var v = mainDiv.attr("id");
                                                mainDiv.removeClass(v);
                                                v = parseInt(v) - 1;
                                                mainDiv.attr("id",v);
                                                if(mainDiv.attr("id") == 0){
                                                    $("#divoverlay").hide();
                                                    $("#ta_dia *").remove();
                                                    $("#ta_dia").slideUp(500);
                                                }
                                                var td = $(this).attr("id");
                                                var rdata = {
                                                    action : "removeTA",
                                                    rid : td, 
                                                    c : <?php echo $_REQUEST['class'] ?>
                                                };
                                                var rsettings = {
                                                    type : "POST",
                                                    dataType: "json",
                                                    url : "response1.php",
                                                    data : rdata,
                                                    success : function(respone){
                                                        console.log(respone);
                                                    
                                                    },
                                                    error : function(err, type, httpStatus){
                                                        console.log(err +  "--" + type + "--"  + httpStatus);  
                                                    }
                                                };
                                                $.ajax(rsettings);
                                                $(this).closest("div").remove();
                                        });
                                    }
                                },
                                error : function(err, type, httpStatus){
                                        console.log(err +  "--" + type + "--"  + httpStatus);  
                                    } 
                                };
                                $.ajax(settings);
                                m.css("height","300px");
                                m.slideDown(500);
                                $("#divoverlay").show();
                            }
                        })});
                    
                        $("#view_st").click(function(){
                            var c = $(this).closest("div").attr("id");
                            if(c == 0){
                                alert("No Student in class.");
                            }else{
                                var m = $("#ta_dia");
                                var data = {
                                    action : "viewST",
                                    c : <?php echo $_REQUEST['class'] ?>
                                };
                                var settings = {
                                    type : "POST",
                                    dataType: "json",
                                    url : "response1.php",
                                    data : data,
                                    success : function(respone){
                                        for(var x in respone.data){
                                            var div = $("<div>");
                                            var name = $("<h3>");
                                            name.text(respone.data[x]['fname'].toUpperCase() + " " + respone.data[x]['lname'].toUpperCase());
                                            var i = $("<img>");
                                            i.attr("src",respone.data[x]['userImg']);
                                            i.css("width","120px");
                                            i.css("height","130px");
                                            div.html(i);
                                            div.append(name);
                                            console.log(respone.data);
                                            m.append(div);
                                        }
                                    },
                                    error : function(err, type, httpStatus){
                                        console.log(err +  "--" + type + "--"  + httpStatus);  
                                    } 
                                };
                                $.ajax(settings);
                                m.css("height","520px");
                                m.slideDown(500);
                                $("#divoverlay").show();
                                    }
                                });
                        $("#remove_st").click(function(){
                            var c = $(this).closest("div").attr("id");
                            if(c == 0){
                                alert("No Student in class.");
                            }else{
                                var m = $("#ta_dia");
                                var data = {
                                    action : "viewST",
                                    c : <?php echo $_REQUEST['class'] ?>
                                };
                                var settings = {
                                    type : "POST",
                                    dataType: "json",
                                    url : "response1.php",
                                    data : data,
                                    success : function(respone){
                                        for(var x in respone.data){
                                            var div = $("<div>");
                                            var name = $("<h3>");
                                            name.text(respone.data[x]['fname'].toUpperCase() + " " + respone.data[x]['lname'].toUpperCase());
                                            var i = $("<img>");
                                            i.attr("src",respone.data[x]['userImg']);
                                            i.css("width","120px");
                                            i.css("height","130px");
                                            var remove = $("<input type='button'>");
                                            remove.attr("id",respone.data[x]['studentId']);
                                            remove.attr("value","Remove");
                                            remove.addClass("btnClass");
                                            div.html(i);
                                            div.append(name);
                                            div.append(remove);
                                            console.log(respone.data);
                                            m.append(div);
                                            remove.click(function(){
                                                var mainDiv = $("#remove_st").closest("div");
                                                var v = mainDiv.attr("id");
                                                mainDiv.removeClass(v);
                                                v = parseInt(v) - 1;
                                                mainDiv.attr("id",v);
                                                if(mainDiv.attr("id") == 0){
                                                    $("#divoverlay").hide();
                                                    $("#ta_dia *").remove();
                                                    $("#ta_dia").slideUp(500);
                                                }
                                                var td = $(this).attr("id");
                                                var rdata = {
                                                    action : "removeST",
                                                    rid : td, 
                                                    c : <?php echo $_REQUEST['class'] ?>
                                                };
                                                var rsettings = {
                                                    type : "POST",
                                                    dataType: "json",
                                                    url : "response1.php",
                                                    data : rdata,
                                                    success : function(respone){
                                                        console.log(respone);
                                                    },
                                                    error : function(err, type, httpStatus){
                                                        console.log(err +  "--" + type + "--"  + httpStatus);  
                                                    }
                                                };
                                                $.ajax(rsettings);
                                                $(this).closest("div").remove();
                                        });
                                    }
                                },
                                error : function(err, type, httpStatus){
                                        console.log(err +  "--" + type + "--"  + httpStatus);  
                                    } 
                                };
                                $.ajax(settings);
                                m.css("height","560px");
                                m.slideDown(500);
                                $("#divoverlay").show();
                            }
                        });
                        $("#add_st").click(function(){
                            var c = $(this).closest("div").attr("id");
                            if(c >= 60){
                                alert("You cant add more Student..");
                            }else{
                                var m = $("#ta_dia");
                                var add = $("<input class='btnClass' type='button' value='Add'>");
                                var cancel = $("<input class='btnClass' type='button' value='Cancel'>");
                                var sel = $("<select style='float:none;margin-left:25%;' class='btnClass'>");
                                
                                var data = {
                                    action : "ST_selection",
                                    c : <?php echo $_REQUEST['class']; ?>
                                };
                                var settings = {
                                    type : "POST",
                                    dataType: "json",
                                    url : "response1.php",
                                    data : data,
                                    success : function(respone){
                                        for(var x in respone.data){
                                            var opt = $("<option>");
                                            opt.html(respone.data[x][0] + " - " + respone.data[x][1] + " " + respone.data[x][2]);
                                            sel.append(opt);
                                        }
                                    },
                                    error : function(err, type, httpStatus){
                                        console.log(err +  "--" + type + "--"  + httpStatus);  
                                    } 
                                };
                                $.ajax(settings);
                                var h3 = $("<h3 class='dialog_header1'>");
                                h3.text("Add New Student");
                                m.append(h3);
                                m.append("<br>");
                                m.append(sel);
                                m.append("<br><br><hr>");
                                m.append(cancel);
                                m.append(add);
                                $("#divoverlay").show();
                                m.css("height","300px");
                                m.slideDown(500);
                        cancel.click(function(){
                            $("#divoverlay").hide();
                            $("#ta_dia *").remove();
                            $("#ta_dia").slideUp(500);
                        });
                        add.click(function(){
                            var x = sel.val();
                            x = parseInt(x.substr(0,x.indexOf('-')));
                            
                           var data = {
                                    action : "add_ST",
                                    c : <?php echo $_REQUEST['class'] ?>,
                                    t : x
                                };
                                var settings = {
                                    type : "POST",
                                    dataType: "json",
                                    url : "response1.php",
                                    data : data,
                                    success : function(respone){
                                        console.log(respone.data);
                                        var d = $("#remove_st").closest("div");
                                        var id = parseInt(d.attr("id"));
                                        id = id  + 1;
                                        d.attr("id",id);
                                    },
                                    error : function(err, type, httpStatus){
                                        console.log(err +  "--" + type + "--"  + httpStatus);  
                                    } 
                                };
                                $.ajax(settings); 
                            
                            $("#divoverlay").hide();
                            $("#ta_dia *").remove();
                            $("#ta_dia").slideUp(500);
                        });
                            }
                        });
                </script>