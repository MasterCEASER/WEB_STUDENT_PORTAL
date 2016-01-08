<?php

session_start();

if( $_SESSION['user'] == null)
{
    
     header('Location: ../index.php');
  
}
  
 $email = $_SESSION['email'];
  $type = $_SESSION['type'];
  
  $_SESSION['email'] = "";
  $_SESSION['type'] = "";
?>


<html>
    <head>
      
       
        <link rel="stylesheet" type="text/css" href="../css/main_page_css/headr.css">
        <link rel="stylesheet" type="text/css" href="../css/main_page_css/footer.css">
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Thanks</title>
<script type="text/javascript" src="../jquery/main_page_jquery/jquery-2.1.4.min.js">
</script>
<!--<script type="text/javascript" src="/js/common.js"></script>-->
<script type="text/javascript" src="../jquery/main_page_jquery/jquery.simplyscroll.min.js"></script>
<link rel="stylesheet" href="../css/thanks_css/jquery.simplyscroll.css" media="all" type="text/css">
        
        <script type="text/javascript">
(function($) {
	$(function() {
		$("#scroller").simplyScroll();
	});
})(jQuery);
</script>
        
         <style>
    .thanks{
      position:relative;
      width:50%;
      height:50%;
      top:0%;
      left:25%;
      background-color: lightgray;
      border:2px solid grey; 
    box-shadow: 20px 25px 250px -8px grey;
      
    }
    .thanks h1{
      
      font-family: sans-serif;
      font-size:34px; 
    
    
    }
             
    
    .thanks table{
     
     
      left:7%;
      position: absolute;
      font-family: sans-serif;
      font-size:25px;
    background-color: lightgray; 
        border-radius: 25px;
      border:2px solid black;
        padding:8px 
    
    }
           table{
            font-family: sans-serif;
      font-size:20px;
           
           
           }       
    .thanks input[type="text"] {
    font-size:25px
}
             h1{text-shadow: 5px 5px 10px grey;}
             button{
               
             }
             button{
    color: blue;
    font-size: 35px;
    z-index: +4;
    padding: 14px;
    text-shadow: 2px 3px 5px black;
    position: relative;
    left: 30%;
    top: -42px;
                 width: 500px;
    background-image: url('../image/bg.png');
    border: 0;
    border-bottom-left-radius: 40px;
    border-bottom-right-radius: 40px;
}
    
             .slide{
             
    position:relative;
      width:99%;
      height:20%;
      top:8%;
      left:0%;
      
     
             
             }
        </style></head>
  
  <body>
    
    <div id="Header">
            <div class="wrapper">
                <div id="container">
                    <div class="main_menu inline">
                        <div class="nav-bar inline">
                            <div class="container inline">
                                <div><img class="img-thumbnail img-circle web_logo_img logo" src="../image/PUCIT1.png"></div>
                                <a id="logo" href="../mp1.html">PUCIT Portal</a>
                                <ul class="inline">
                                   
                                    
                                </ul>
                                <div id="usr_img"><img class="user_logo_img" src="../image/PUCIT1.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        
    
    
    
    
            
    <br><br><br><a href=<?php echo '"../home/home.php?name='.$_REQUEST['name'].'&img='.$_REQUEST['img'].'"'; ?>><button><b> Next</b></button></a>

            <div class = "thanks">
     
       <b><h1><center> &nbsp &nbsp &nbsp Thanks For Signing Up</center></h1></b>
     
       <table cellpadding = 15 cellspacing = 8 >
        <tr> 
          <td>Email ID: </td> <td><input type = "text" name = "uname" readonly size = "20" value= "<?php echo $email ?>"  </td> <br> </tr>
       
         <tr><td>Your Identity: </td><td><input type = "text" name = "Signup" readonly  size = "20" value=" <?php echo $type ?> "</td></tr>
       </table>
    
    </div>
      
      <div class = "slide">
        
       <ul id="scroller">
    <li><img src="../image/main_page_img/a.jpg" width="290" height="200" alt="Firehouse"></li>
    <li><img src="../image/main_page_img/b.jpg" width="290" height="200" alt="Chloe nightclub"></li>
    <li><img src="../image/main_page_img/c.jpg" width="290" height="200" alt="Firehouse bar"></li>
    <li><img src="../image/main_page_img/d.jpg" width="290" height="200" alt="Firehouse chloe club fishtank"></li>
    <li><img src="../image/main_page_img/e.jpg" width="290" height="200" alt="Firehouse restaurant"></li>
    <li><img src="../image/main_page_img/f.jpg" width="290" height="200" alt="Firehouse"></li>
</ul>
      </div>
    
    </body>
</html>  