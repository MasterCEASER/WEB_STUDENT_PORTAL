<html>
    <head>
        <link href ="../css/teacher-info_css/teachers-info.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="../css/headr.css">
        <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
        <script src="jquery.min.js"></script>   
        <script>
            $(document).ready(function(){
     
		/*alert("in page");*/
           
                
			var data = {"action": "getdata"};
			
			//object pass to $.ajax function to make an AJAX call.
			var settings= {
				type: "POST",
				dataType: "json",
				url: "teacher-info.php",
				data: data,
				success: function(response) {
					console.log('Recieved from server:');
					console.log('Recieved from server:');
                   
                    var len = response.data.length;
                    var pages = Math.ceil(len/4);
                    var k = 0;
                    var back = 0;
                   
                    if (pages > 1)
                    {
                        $("#show-pagination").append("<input type = 'button' value = 'Next' id = 'Next'><input type = 'button' value = 'Back' id = 'Back' >")
                    }
                    var inc = 1;
                    var checker = 0;
                    while(k < len && inc <= 4 )
                    {
                        var row = response.data[k];
                        
                        if( inc == 1)
                        {
                            /*alert("1");*/
                            $("#hshow1 h2").html(""+row.name+"");
                            $("#show1").html(""+row.intro+"");
                             /*alert("1");*/
                            $(".ishow1").attr("src","../signup_HTML/img/"+row.img+"");    
                        }
                        else
                            if(inc == 2)
                            {
                                /*alert("2");*/
                                $("#hshow2 h2").html(""+row.name+"");
                                $("#show2").html(""+row.intro+"");
                                 /*alert(row.img);*/
                                $(".ishow2").attr("src","../signup_HTML/img/"+row.img+"");    

                            }
                            else
                                if(inc == 3)
                                {
                                    /*alert("3");*/
                                    $("#hshow3 h2").html(""+row.name+"");
                                    $("#show3").html(""+row.intro+"");
                                    $(".ishow3").attr("src","../signup_HTML/img/"+row.img+"");    

                                }
                                else
                                    if(inc == 4)
                                    {
                                        /*alert("4");*/
                                        $("#hshow4 h2").html(""+row.name+"");
                                        $("#show4").html(""+row.intro+"");
                                        $(".ishow4").attr("src","../signup_HTML/img/"+row.img+"");    
    
                                    }
                                k++;
                                inc++;
                    }
                    inc = 1;
                    
                    $("#Next").click(function(){
                        if(k < len)
                        {
                           
                            checker++;
                             var inc = 1;
                            back = k;
                            if (checker == 2)
                           {
                               
                               /*alert(back);*/
                               checker = 1;
                           }
                    while(k < len && inc <= 4 )
                    {
                        var row = response.data[k];
                        if( inc == 1)
                        {
                            $("#hshow1 h2").html(""+row.name+"");
                            $("#show1").html(""+row.intro+"");
                            $(".ishow1").attr("src","../signup_HTML/img/"+row.img+"");    
                        }
                        else
                            if(inc == 2)
                            {
                                $("#hshow2 h2").html(""+row.name+"");
                                $("#show2").html(""+row.intro+"");
                                $(".ishow2").attr("src","../signup_HTML/img/"+row.img+"");    

                            }
                            else
                                if(inc == 3)
                                {
                                    $("#hshow3 h2").html(""+row.name+"");
                                    $("#show3").html(""+row.intro+"");
                                    $(".ishow3").attr("src","../signup_HTML/img/"+row.img+"");    

                                }
                                else
                                    if(inc == 4)
                                    {
                                        $("#hshow4 h2").html(""+row.name+"");
                                        $("#show4").html(""+row.intro+"");
                                        $(".ishow4").attr("src","../signup_HTML/img/"+row.img+"");    
    
                                    }
                                k++;
                                inc++;
                    }
                            
                        }
                           
                        }); // end of NEXT
                
                        $("#Back").click(function(){
                        if(k != 0)
                        {
                            k = back-4;
                            var inc = 1;
                    while(k < len && inc <= 4 )
                    {
                        var row = response.data[k];
                        if( inc == 1)
                        {
                            $("#hshow1 h2").html(""+row.name+"");
                            $("#show1").html(""+row.intro+"");
                            $(".ishow1").attr("src","../signup_HTML/img/"+row.img+"");    
                        }
                        else
                            if(inc == 2)
                            {
                                $("#hshow2 h2").html(""+row.name+"");
                                $("#show2").html(""+row.intro+"");
                               
                                $(".ishow2").attr("src","../signup_HTML/img/"+row.img+"");    

                            }
                            else
                                if(inc == 3)
                                {
                                    $("#hshow3 h2").html(""+row.name+"");
                                    $("#show3").html(""+row.intro+"");
                                    $(".ishow3").attr("src","../signup_HTML/img/"+row.img+"");    

                                }
                                else
                                    if(inc == 4)
                                    {
                                        $("#hshow4 h2").html(""+row.name+"");
                                        $("#show4").html(""+row.intro+"");
                                        $(".ishow4").attr("src","../signup_HTML/img/"+row.img+"");    
    
                                    }
                                k++;
                                inc++;
                        if (back != 0)
                            back--;
                    }
                        }
                                     
                        }); // end of Back
                    
                   
                    
                             
                                    
                                        
				},
				error: function (err, type, httpStatus) {
					alert('error has occured');
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
        <?php include('../header.php') ?> 
        <hr style="margin-top:20px;"> 
        <div style="padding-left:10px;">
            <div id = "hshow1"style="display:table;padding:2px;width:60%;margin-top:20px;box-shadow: 2px 2px 2px 2px gainsboro;">
                <h2 style="text-shadow: 2px 2px 5px gray;text-align: center;"> SHUJA UR REHMAN </h2>
                <div style="margin-left: 15px;">
                    <div style="display:table-cell;vertical-align:middle;padding-right: 15px;">
                            <img class = "ishow1" width="110" height="150" src="../images/shuja.png">
                    </div>
                    
                    <div  style="display:table-cell;vertical-align: top;">
                        <h3>INTRODUCTION: </h3>
                        <span id = "show1"> </span>
                    </div>
                    
                </div>               
            </div>
            <div id = "hshow2"style="display:table;padding:2px;width:60%;margin-top:20px;box-shadow: 2px 2px 2px 2px gainsboro;">
                <h2 style="text-shadow: 2px 2px 5px gray;text-align: center;"> SHUJA UR REHMAN </h2>
                <div style="margin-left: 15px;">
                    <div style="display:table-cell;vertical-align:middle;padding-right: 15px;">
                            <img class = "ishow2"  width="110" height="150" src="../images/shuja.png">
                    </div>
                    <div  style="display:table-cell;vertical-align: top;">
                        <h3>INTRODUCTION: </h3>
                        <span id = "show2"> </span>
                    </div>
                </div>               
            </div>
            <div id = "hshow3"style="display:table;padding:2px;width:60%;margin-top:20px;box-shadow: 2px 2px 2px 2px gainsboro;">
                <h2 style="text-shadow: 2px 2px 5px gray;text-align: center;"> SHUJA UR REHMAN </h2>
                <div style="margin-left: 15px;">
                    <div style="display:table-cell;vertical-align:middle;padding-right: 15px;">
                            <img class = "ishow3" width="110" height="150" src="../images/shuja.png">
                    </div>
                    <div  style="display:table-cell;vertical-align: top;">
                        <h3>INTRODUCTION: </h3>
                       <span id = "show3"> </span>
                    </div>
                </div>               
            </div>
            <div id = "hshow4"style="display:table;padding:2px;width:60%;margin-top:20px;box-shadow: 2px 2px 2px 2px gainsboro;">
                <h2 style="text-shadow: 2px 2px 5px gray;text-align: center;"> SHUJA UR REHMAN </h2>
                <div style="margin-left: 15px;">
                    <div style="display:table-cell;vertical-align:middle;padding-right: 15px;">
                            <img class = "ishow4" width="110" height="150" src="../images/shuja.png">
                    </div>
                    <div  style="display:table-cell;vertical-align: top;">
                        <h3>INTRODUCTION: </h3>
                        <span id = "show4"> </span>
                    </div>
                </div>               
            </div>
        </div>   
            
        <hr style="margin-top:20px;">
        
        <div id = "show-pagination">
        </div>    
    </body>
</html>  