<?php

session_start();

if( $_SESSION['user'] == null)
{
    
     header('Location: ../mp1.php');
}
?>
<html>
    <head>
        
        <link rel="stylesheet" type="text/css" href="../css/headr.css">
        <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
        <script src="../js/jquery-2.1.4.min.js"></script>
         <link href ="../css/home_css/home.css" rel="stylesheet" type="text/css" />
        
        
                
<script src="../jquery/home_jquery/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../jquery/home_jquery/jquery.easing.min.js"></script>
<script type="text/javascript" src="../jquery/home_jquery/jquery.easy-ticker.js"></script>
<style>
    .tickerBtnClass{
        
        font-size: 20px;
    box-shadow: 4px 3px 5px 1px;
    margin-right: 1%;
    }
        </style>
<script type="text/javascript">
$(document).ready(function(){
     
		
           
                
			var data = {"action": "getdata"};
			
			//object pass to $.ajax function to make an AJAX call.
			var settings= {
				type: "POST",
				dataType: "json",
				url: "home1.php",
				data: data,
				success: function(response) {
					console.log('Recieved from server:');
					console.log('Recieved from server:');
                    
                                        
                                    for(var key in response.data)
                                    {
                                        var row = response.data[key];
                                        var a = row.postDesc;
                                       var n = row.apostDesc;
                                                                           
                                        
                $('.display').append(" <li><span id = 'hufeed'> Univeristy Feed: </span> <a href='#'>  "+a.split("\n",1)+" </a> </br> <span style = 'font-color:black'> Posted By:"+row.postedby+" </span> </li>")
                                    
                                    }
				},
				error: function (err, type, httpStatus) {
					alert('error has occured');
				}
			};
			
			$.ajax(settings);
			console.log('request sent');
					
		
            var data = {"action": "getdata"};
			
			//object pass to $.ajax function to make an AJAX call.
			var settings= {
				type: "POST",
				dataType: "json",
				url: "home2.php",
				data: data,
				success: function(response) {
					console.log('Recieved from server:');
					console.log('Recieved from server:');
                    
                                        
                                    for(var key in response.data)
                                    {
                                        var row = response.data[key];
                                        
                                        var a = row.apostDesc;
                                        
                                        
                                      $('.display').append(" <li><span id = 'clfeed'> Class Feed: </span> <a href='#'>  "+a.split("\n",1)+" </a> </br> <span style = 'font-color:black'> Posted By:"+row.apostedby+" </span> </li>")
                                        
                                        
                                       
                                         
                                    
                                    }
				},
				error: function (err, type, httpStatus) {
					alert('error has occured');
				}
			};
			
			$.ajax(settings);
			console.log('request sent');
					
		
    

    
    
                 
                     
                     
                     
                     
            var data = {"action": "getdata"};
			
			//object pass to $.ajax function to make an AJAX call.
			var settings= {
				type: "POST",
				dataType: "json",
				url: "home3.php",
				data: data,
				success: function(response) {
					console.log('Recieved from server:');
					console.log('Recieved from server:');
                    var i = 0;
                    for(var key in response.data)
                        {
                            i++;
                                 
                        }
                    
                    $html =  $('.efirstfeed .descr').html(); 
                    
                    var row = response.data[0];
                    $('.efirstfeed .descr').html(""+$html+" <br> <Span id = 'hufeed'> SUBJECT: <a href='#'>  "+row.subject+" </a> <br> <br> <Span id = 'hufeed'>AnnouncedBy: </span> <Span id = 'clfeed'>"+row.announceby+"</span>");
                    
                      
                            var j = 1;
                             setInterval(function(){
                                 if(j < i )
                                 {
                                     row = response.data[j]; 
                                 }  
                                 else
                                 {
                                     j = 0;
                                 }
                                j++;        
                          
                            
                             $('.efirstfeed .descr').html(""+$html+" <br> <Span id = 'hufeed'> SUBJECT: <a href='#'>  "+row.subject+" </a> <br> <br> <Span id = 'hufeed'>AnnouncedBy: </span> <Span id = 'clfeed'>"+row.announceby+"</span>");
                                        
                            },100000);                  
                                 
                                               
                        
                    
                   
               
                                   
				},
				error: function (err, type, httpStatus) {
					alert('error has occured in class annoucements');
				}
			};
			
			$.ajax(settings);
			console.log('request sent'); // end of Class Annoucements
    
    
    
    
    
    
             var data = {"action": "getdata"};
			
			//object pass to $.ajax function to make an AJAX call.
			var settings= {
				type: "POST",
				dataType: "json",
				url: "home4.php",
				data: data,
				success: function(response) {
                   
                   
                if(  response.data[0] == undefined)
                {
                      $html =  $('.esecondfeed .descr').html();
                     $('.esecondfeed .descr').html(""+$html+" <br> <Span id = 'hufeed'> No Annoucements </span>");
                    return false;
                
                }
					console.log('Recieved from server:');
					console.log('Recieved from server:');
                    var b = 0;
                    for(var key in response.data)
                        {
                            b++;
                                 
                        }
                    
                    $html =  $('.esecondfeed .descr').html(); 
                    
                    var row = response.data[0];
                    $('.esecondfeed .descr').html(""+$html+" <br> <Span id = 'hufeed'> SUBJECT: <a href='#'>  "+row.subject+" </a> <br> <br> <Span id = 'hufeed'>AnnouncedBy: </span> <Span id = 'clfeed'>"+row.announceby+"</span>");
                    
                      
                            var n = 1;
                             setInterval(function(){
                                 if(n < b )
                                 {
                                     row = response.data[n]; 
                                 }  
                                 else
                                 {
                                     n = 0;
                                 }
                                n++;        
                          
                            
                             $('.esecondfeed .descr').html(""+$html+" <br> <Span id = 'hufeed'> SUBJECT: <a href='#'>  "+row.subject+" </a> <br> <br> <Span id = 'hufeed'>AnnouncedBy: </span> <Span id = 'clfeed'>"+row.announceby+"</span>");
                                        
                            },100000);                  
                                 
                                               
                        
                    
                   
               
                                   
				},
				error: function (err, type, httpStatus) {
					alert('error has occured university annoucements');
				}
			};
			
			$.ajax(settings);
			console.log('request sent');
                   
                   
     
                        
					
    

	var dd = $('.vticker').easyTicker({
		direction: 'up',
		easing: 'easeInOutBack',
		speed: 'slow',
		interval: 2000,
		height: 'auto',
		visible: 5,
		mousePause:60,
		controls: {
			up: '.up',
			down: '.down',
			toggle: '.toggle',
			stopText: 'Stop !!!'
		}
	}).data('easyTicker');
	
	$tr = "Class Feed";
    
	
    $('.ww').append("<span id = 'hufeed'> Univeristy Feed: </span> <a href='#'>  hisham Posted in CS group </a>")
	
	$('.vis').click(function(){
		dd.options['visible'] = 3;
		
	});
	
    
	$('.visall').click(function(){
		dd.stop();
		dd.options['visible'] = 0 ;
		dd.start();
	});
	$("div.unifeed > button").addClass("tickerBtnClass");
 
});
</script>

<style>
.vticker{
    margin-top  :10px; 
	
	width:99%;
    font-family: sans-serif;
    font-size:20px;
    font-weight: bold;
    color:darkred;
}
.vticker ul{
	padding: 0;
}
.vticker li{
	list-style: none;
	border-bottom: 5px solid brown;
	padding: 10px;
}
.et-run{
	background-color:red;
}
    #hufeed{
     color:black; 
    
    }
    
    #clfeed{
    
    color:coral;
    }
</style>
    </head>
    <body>
      
        <div id="Header">
            <div class="wrapper">
                <div id="container">
                    <div class="main_menu ">
                        <div class="nav-bar ">
                            <div class="container ">
                                <div><img class="img-thumbnail img-circle web_logo_img logo" alt="Image Ot.Found.." src="../images/PUCIT1.png"></div>
                                <a id="logo" href="index.html">pucit portal</a>
                                <ul>
                                    <div style="display:table">
                                        <li style="border-left:0px">
                                            <a href="../home/home.html" class="active">
                                                <i class="fa fa-home"></i>
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../teacher_HTML/teacher-info.html" >
                                                <i class="fa fa-users"></i>
                                                Teachers
                                            </a>
                                        </li>
                                        <li style="display:table-cell;algin:right">
                                            <a href="../Classrooms_HTML/classrommS/classroom_S.html" >
                                                <i class="fa fa-linkedin-square"></i>
                                                ClassRooms
                                            </a>
                                        </li>
                                        <li>
                                            <a href="GLOBAL%20POST.html" >
                                                <i class="fa fa-envelope-o"></i>
                                                Posts
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../Classrooms_HTML/contact/contactUs.html" >
                                                <i class="fa fa-phone"></i>
                                                Contact
                                            </a>
                                        </li>
                                    </div><!--
                                    <li><a href="#" class="active">Teacher</a></li>
                                    <li><a href="#" class="active">Class-Rooms</a></li>
                                    <li><a href="#" class="active">Posts</a></li>
                                    <li><a href="#" class="active">Contact</a></li>-->
                                </ul>
                                <div id="usr_img">
                                    <img class="user_logo_img" id="user-profile-img" alt="Image NOt FOund ..." src="../images/shuja.png">
                                    <div style="width:35px;">
                                        <div class="layer close" id="user-profile" style="">
                                            <ul>
                                                <li class="clearfix">
                                                    <a><i class="fa fa-user"></i>&nbsp; Hisham</a>
                                                </li>
                                                <li class="clearfix">
                                                    <a><i class="fa fa-cog"></i>&nbsp; Settings</a>
                                                </li>
                                                <li class="clearfix">
                                                    <a><i class="fa fa-sign-out"></i>&nbsp; SignOut</a>
                                                </li>
                                            </ul>
                                        </div>      <!--END OF USER DROPDOWN-->
                                        <script>
                                            $("img#user-profile-img").click(function(){
                                               var x = $("div#user-profile"); 
                                                if(x.hasClass("open")){
                                                    x.removeClass("open");
                                                    x.addClass("close");
                                                }else{
                                                    x.removeClass("close");
                                                    x.addClass("open");
                                                }
                                            });
                                            $("div#user-profile > ul > li:nth-child(2)").click(function(){
                                                alert("Settings");
                                               var x = $("div#user-profile"); 
                                                    x.removeClass("open");
                                                    x.addClass("close");
                                            })
                                            $("div#user-profile > ul > li:nth-child(3)").click(function(){
                                                alert("SignOUt");
                                               var x = $("div#user-profile"); 
                                                    x.removeClass("open");
                                                    x.addClass("close");
                                            })
                                        </script>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr style="margin-top:20px;">
        <div class = "relative">
            <div class = "efeed">
                <center>
                 
                    </center> 
                
                    <div class="efirstfeed">
                       
                                                  
                        
                         <div class="imgg">
                             <img src="../images/home_img/img2.gif" width="100%" height="100%">
                        </div>     
                          <div class="descr">
                              <center>
                                  <Span>
                                    CLASS ANNOUCEMENTS
                                  </span>      
                              </center>  
                        </div>       
                    </div>
                
                    <div class="esecondfeed">
                       
                                                  
                        
                         <div class="imgg">
                             <img src="../images/home_img/img2.gif" width="100%" height="100%">
                        </div>     
                          <div class="descr">
                              <center>
                                  <Span>
                                      UNIVERSITY ANNOUCEMENTS
                                  </span>      
                              </center>  
                        </div>       
                    </div>
            
                    <div class="ethirdfeed">
                       
                                                  
                        
                         <div class="imgg">
                             <img src="../images/home_img/img2.gif" width="100%" height="100%">
                        </div>     
                          <div class="descr">
                              <center>
                                  <Span>
                                      LITERAY SOCIETY
                                  </span>      
                              </center>  
                        </div>       
                    </div>
                    
                    
            </div> 
            
            <div class = "unifeed">
                
                
<button class="vis">SET VISIBLE 3</button>
<button class="visall">SET VISIBLE ALL</button>

<button class="up">UP</button>
<button class="down">DOWN</button>
<button class="toggle">TOGGLE</button>

<div class="vticker">
	<ul class = "display">
        
	</ul>
</div>
                
                 
            </div>
        </div>    
        
    </body>
</html>  