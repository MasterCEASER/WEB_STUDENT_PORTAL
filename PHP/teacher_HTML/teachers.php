<?php
session_start();
?>
<html>
    <head>
        <link href ="../css/teacher-info_css/teachers-info.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="../css/headr.css">
        <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
        <script src="jquery.min.js"></script>   
        <script>
            $(document).ready(function(){
     
		//alert("in page");
           
                
			var data = {"action": "getdata"};
			
			//object pass to $.ajax function to make an AJAX call.
			var settings= {
				type: "POST",
				dataType: "json",
				url: "teacher-info.php",
				data: data,
				success: function(response){
					console.log('Recieved from server:');
					console.log('Recieved from server:');
                    
                    console.log(response.data);
                    var arr = response.data;
                    var s = 4;
                    var l = Math.ceil(arr.length/s);
                    var j=0;
                    var arr2 = [];
                    for(var i=0; i<l; i++){
                        arr2[j] =  arr.splice(0,s);
                        j++;
                    }
                    var dum = $("<div>");
                    dum.attr("id","dum");
                    var ind = $("<ul class='pagination'>");
                    ind.attr("id","index");
                    var i=1;
                    for(var z in arr2){
                        var x = $("<div>");
                        x.attr("id",i);
                        var xx = arr2[z];
                        for(var zz in xx){
                            var dd = $("#hshow").css("display","").clone();
                            console.log(xx[zz]);
                            dd.find("h2").text(xx[zz]['name']);
                            dd.find("#show1").text(xx[zz]['intro']);
                            var img = xx[zz]['img'];
                            if(img == undefined || img == null || img == "" || img == " " ){
                                img = "image/defaultUser.jpg";
                            }
                            var zimg =  "../"+img;
                            console.log(zimg);
                            dd.find("img").attr('src',zimg);
                            xx[zz] = dd;
                        }
//                        console.log(arr2[z]);
                        x.append(arr2[z])
                        dum.append(x);
                        var a = $("<a class='page_a'>");
                        a.text(i);
                        var li = $("<li>");
                        li.append(a);
                        ind.append(li);
                        i++;
                        x.hide();
                    }
                    dum.insertAfter($("div#showf"));
                    $("<hr id='hrid' style='margin-top:10px'>").insertAfter(dum);
                    ind.insertAfter($("hr#hrid"));
                    ind.css("display","none");
                    $("div#showf").remove();
                    $("div#dum #1").show();
                    $("ul.pagination > li:nth-child(1)").addClass("active");
                $("a.page_a").each(function(){
                   $(this).click(function(){
                       var x = $(this).text();
                       if(x == 1){
                        $("#prev_btn").attr("disabled","true").addClass("disabled");
                       }else{
                           
                        $("#prev_btn").removeAttr("disabled").removeClass("disabled");
                       }
                       if(x == Number($("ul.pagination > li").length)){
                           
                        $("#next_btn").attr("disabled","true").addClass("disabled");
                       }else{
                        $("#next_btn").removeAttr("disabled").removeClass("disabled");
                           
                       }
                    $("ul.pagination > li").removeClass("active");
                    $("ul.pagination > li:nth-child("+x+")").addClass("active");
                    $("div#dum > *").hide();
                    var ss = "div#dum #" + x;      
                    $(ss).show();
                   })
                        }); 
                    
                ///////////////////////////////////////////
                $("#prev_btn").click(function(){
                var i = Number($("ul.pagination > li.active > a").text());
                if(i > 1){
                    i--;
                    $("ul.pagination > li.active").removeClass('active');
                    $("ul.pagination > li:nth-child("+i+")").addClass('active');
                    $("div#dum > *").hide();
                    var ss = "div#dum #" + i;      
                    $(ss).show();
                    if(i == 1){
                        $("#prev_btn").attr("disabled","true").addClass("disabled");
                    }else{
                        
                        $("#next_btn").removeAttr("disabled").removeClass("disabled");
                    }
                }
            });
            $("#next_btn").click(function(){
                var i = Number($("ul.pagination > li.active > a").text());
                var x = Number($("ul.pagination > li").length);
                if(i < x){
                    i++;
                    $("ul.pagination > li.active").removeClass('active');
                    $("ul.pagination > li:nth-child("+i+")").addClass('active');
                    $("div#dum > *").hide();
                    var ss = "div#dum #" + i;      
                    $(ss).show();
                    if(i == x){
                        $("#next_btn").attr("disabled","true").addClass("disabled");
                    }else{
                        
                        $("#prev_btn").removeAttr("disabled").removeClass("disabled");
                    }
                }
            });
                    
                    
                    
                    
               
                },
				error: function (err, type, httpStatus) {
					//alert('error has occured');
				}
			};
			
			$.ajax(settings);
			console.log('request sent');
                
            });
        </script>    
    </head>   
    <style>
        
    </style>
    <body>       
        <style>
            .tex{
                display:table;padding:2px;width:60%;margin-top:20px;box-shadow: 2px 2px 2px 2px gainsboro;
            }
            input[type=button]{
        
        font-size: 20px;
    box-shadow: 4px 3px 5px 1px;
    margin-right: 1%;
    }
        </style>
        <?php include('../header.php'); ?>
        <hr style="margin-top:20px;"> 
        <div id = "showf" style="padding-left:10px;">
            <div id = "hshow" class="tex">
                <h2 style="text-shadow: 2px 2px 5px gray;text-align: center;">  </h2>
                <div style="margin-left: 15px;">
                    <div style="display:table-cell;vertical-align:middle;padding-right: 15px;">
                            <img class = "ishow1 imgShow" width="110" height="150" src="../image/defaultUser.jpg">
                    </div>
                    
                    <div  style="display:table-cell;vertical-align: top;">
                        <h3>INTRODUCTION: </h3>
                        <span id = "show1"> </span>
                    </div>
                    
                </div>               
            </div>      
        </div>
        <center>
            <input type="button" id="prev_btn" value="PREV" disabled>
            <input type="button" id="next_btn" value="NEXT" >
        </center>
          <style>
              .imgShow{
                  width: 120px;
    height: 120px;
    margin-bottom: 20px;
              }
        </style>  
    </body>
</html>  