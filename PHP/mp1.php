 <?php include('home/connect.php'); 
session_start();
 $error = "";

if(isset($_REQUEST["submit"]) == true)
 {
 
    
   $uname = $_REQUEST["email"];
   
   $pswd = $_REQUEST["pass"];
   
   if (empty($uname) || empty($pswd)) {
	$error =   "Username or Password is invalid";
   }
   else{
       
	   $sql =  "SELECT * FROM person where email='$uname' and Password='$pswd';" ;
		
	   $query = run($sql);
	   
	  
        $count = 0;
       $userid = "";
       $type = "";
       while($row = $query->fetch(PDO::FETCH_ASSOC))
       {
           $count++;
           $userid = $row["id"];
           $type = $row["type"];
       }
      
          
	   if($count > 0)
	   {
            echo "user name valid";
		    //$_SESSION['username']=$uname;
            $_SESSION['user'] = $userid;
            //$_SESSION['type'] = $type;
           // echo $_SESSION['userid'];
		    header('Location:home/home.php');
	   }
	   else {
		 $error = "Invalid User Name/Password";
	   }
   }//end of else
   
 }//end of if(isset

?>

<html>
    <head>        
       
        <link rel="stylesheet" type="text/css" href="css/main_page_css/headr.css">
        <link rel="stylesheet" type="text/css" href="css/main_page_css/footer.css">
        
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<script type="text/javascript" src="jquery/main_page_jquery/jquery-2.1.4.min.js">
</script>
<!--<script type="text/javascript" src="/js/common.js"></script>-->
<script type="text/javascript" src="jquery/main_page_jquery/jquery.simplyscroll.min.js"></script>
<link rel="stylesheet" href="css/main_page_css/jquery.simplyscroll.css" media="all" type="text/css">
<script type="text/javascript">
(function($) {
	$(function() {
		$("#scroller").simplyScroll();
	});
})(jQuery);
    
   
</script>
        
      <style>
                #signup{height:50px; width:200px; border-radius: 15px; box-shadow: 4px 3px;font-style: oblique;color: blue}
a:link {color:blue;}    
ul a:visited {color:lightgray;} 
a:hover {color:blue;} 
div.div1{border:2px ;padding:10px 40px;background:lightgray ; display:none;width:auto;border-radius:25px; color:blue;}
          
    ul.img-list {
        border:2px solid grey; 
        background-color: lightgray;
         box-shadow: 0px 12px 30px -8px dimgrey;
  list-style-type: none;
  margin-top: 1%;
  padding: 0;
  text-align: center;
}

ul.img-list li {
  display: inline-block;
  height: 100px;
  margin: 0 1em 1em 0;
  position: relative;
  width: 200px;
}  
span.text-content {
  background: rgba(0,0,0,0.5);
  color: white;
  cursor: pointer;
  display: table;
  height: 100px;
  left: 0;
  position: absolute;
  top: 0;
  width: 200px;
}

span.text-content span {
  display: table-cell;
  text-align: center;
  vertical-align: middle;
}
span.text-content {
  background: rgba(0,0,0,0.5);
  color: white;
  cursor: pointer;
  display: table;
  height: 100px;
  left: 0;
  position: absolute;
  top: 0;
  width: 200px;
  opacity: 0;
}

ul.img-list li:hover span.text-content {
  opacity: 1;
}
span.text-content {
  background: rgba(0,0,0,0.5);
  color: white;
  cursor: pointer;
  display: table;
  height: 104px;
  left: 0;
  position: absolute;
  top: 0;
  width: 100px;
  opacity: 0;
  -webkit-transition: opacity 500ms;
  -moz-transition: opacity 500ms;
  -o-transition: opacity 500ms;
  transition: opacity 500ms;
}
</style>

<script>
$(document).ready(function() {
    
    $("#a").click(function() {
        $(".div1").show();
        var newImg = '<img src='+ $(this).attr("src") + '></img>';
                 $('#ladiv')
                    .html($(newImg)
                    .animate({ height: '300', width: '450' }, 1500)
                          );
       $("#my-div").html("This is the VC lawn which is located in Allama Iqbal Old campus.");

       });
    $("#b").click(function() {
        $(".div1").show();
        var newImg = '<img src='+ $(this).attr("src") + '></img>';
                 $('#ladiv')
                    .html($(newImg)
                    .animate({ height: '300', width: '450' }, 1500));
        $("#my-div").html("This is the front view of Allama Iqbal Old campus.");

       });
    $("#c").click(function() {
        $(".div1").show();
        var newImg = '<img src='+ $(this).attr("src") + '></img>';
                  $('#ladiv')
                    .html($(newImg)
                    .animate({ height: '300', width: '450' }, 1500));
        $("#my-div").html("This is the VC lawn which is located in Quaid-e-Azam New campus.");

       });
    $("#d").click(function() {
        $(".div1").show();
            var newImg = '<img src='+ $(this).attr("src") + '></img>';
                  $('#ladiv')
                    .html($(newImg)
                    .animate({ height: '300', width: '450' }, 1500));
        $("#my-div").html("This is the Computer Lab of Allama Iqbal Old campus.");

       });
    $("#e").click(function() {
        $(".div1").show();
            var newImg = '<img src='+ $(this).attr("src") + '></img>';
                      $('#ladiv')
                    .html($(newImg)
                    .animate({ height: '300', width: '450' }, 1500));
        $("#my-div").html("This is the Library of Allama Iqbal Old campus.");

               });
    $("#f").click(function() {
        $(".div1").show();
            var newImg = '<img src='+ $(this).attr("src") + '></img>';
                 $('#ladiv')
                    .html($(newImg)
                    .animate({ height: '300', width: '450' }, 1500));
        $("#my-div").html("This is the Computer lab of Allama Iqbal Old campus.");

       });
});
</script>

    </head>
    <body>
        <div id="Header">
            <div class="wrapper">
                <div id="container">
                    <div class="main_menu inline">
                        <div class="nav-bar inline">
                            <div class="container inline">
                                <div><img class="img-thumbnail img-circle web_logo_img logo" src="images/PUCIT1.png"></div>
                                <a id="logo" href="home/home.php">PUCIT Portal</a>
                                
                              <ul class="inline">
                                  <form method="post"> <li> <input type="email" name="email" maxlength = "25" placeholder = "Email ID " size = "25" required autofocus>   </li>
                                     
                                    <li><input type="password" name="pass" placeholder = "Enter Your Password" maxlength = "25" size = "25" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title = "Password (UpperCase, LowerCase, Number/SpecialChar and min 8 Chars)

" required autofocus></li>
                                    <li> <button type="submit" value = "Submit" name = "submit" >LOG IN</button></li>
                                       <li> <span style="color:red"><?php echo $error ?></span></li>
                                     
                                  </form></ul> 
                                   
                                <div id="usr_img"><img class="user_logo_img" src="images/PUCIT1.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        
    

    
        <br><br>  <a href = "signup_HTML/"><button id = "signup"><b>SIGN UP</b></button> </a>
<ul class="img-list">
  <li>
    <a href="#">
      <img src="images/main_page_img/a.jpg" id="a" border=4px width="200" height="100" />
      <center><span class="text-content"><span>PUCIT-Allama Iqbal-Old Campus VC lawn</span></span></center>
    </a>
  </li>
 <li>
    <a href="#">
      <img src="images/main_page_img/b.jpg" id="b" border=4px width="200" height="100" />
      <span class="text-content"><span>PUCIT-Allama Iqbal Old Campus-Front view</span></span>
    </a>
  </li>
 <li>
    <a href="#">
      <img src="images/main_page_img/c.jpg" id="c" border=4px width="200" height="100" />
      <span class="text-content"><span>PUCIT-Quaid e Azam New Campus-Front view</span></span>
    </a>
  </li>
     <li>
    <a href="#">
      <img src="images/main_page_img/d.jpg" id="d" border=4px width="200" height="100" />
      <span class="text-content" ><span>PUCIT-Allama Iqbal Old Campus-Computer Lab</span></span>
    </a>
  </li>
 <li>
    <a href="#">
      <img src="images/main_page_img/e.jpg"id="e" border=4px width="200" height="100" />
      <span class="text-content"><span>PUCIT-Allama Iqbal Old Campus-Library</span></span>
    </a>
  </li>
     <li>
    <a href="#">
      <img src="images/main_page_img/f.jpg" id="f" border=4px  width="200" height="100" />
      <span class="text-content"><span>PUCIT- Quaid e Azam New Campus-Computer lab</span></span>
    </a>
  </li>
</ul>
   
    <center><div id="ladiv"></div>
        <div class="div1" id="my-div"></div></center>
  
        
        <ul id="scroller">
    <li><img src="images/main_page_img/a.jpg" width="290" height="200" alt="Firehouse"></li>
    <li><img src="images/main_page_img/b.jpg" width="290" height="200" alt="Chloe nightclub"></li>
    <li><img src="images/main_page_img/c.jpg" width="290" height="200" alt="Firehouse bar"></li>
    <li><img src="images/main_page_img/d.jpg" width="290" height="200" alt="Firehouse chloe club fishtank"></li>
    <li><img src="images/main_page_img/e.jpg" width="290" height="200" alt="Firehouse restaurant"></li>
    <li><img src="images/main_page_img/f.jpg" width="290" height="200" alt="Firehouse"></li>
</ul>

         <div id ="footer">
            <div class ="rights">
                ALL RIGHTS ARE RESERVED
            </div>
          
            <div class ="txt">
                This is only for PUCIT USERS
            </div>
          
            <div class ="search">
                
                <form method ="post" action="mp1.php"> 
                    <table cellpadding="0px" cellspacing="0px"> 
                        <tr> 
                            <td style="border-style:solid none solid solid;border-                                  color:#4B7B9F;border-width:1px;">
                            <input type="text" placeholder="Search here"                                         style="width:300px; border:0px solid; height:17px;                                      padding:0px 3px; position:relative;"> 
                                </td>
                            <td style="border-style:solid;border-                                                       color:#4B7B9F;border-width:1px;"> 
                                        <input type="submit" value="" style="border-                                            style: none; background:                                                    url('images/main_page_img/searchbutton3.gif') no-repeat; width: 25px;                                    height: 20px;">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
          
            <div class ="contents" >
                
                <a href="#"  style="color:blue; text-decoration:none"> Contact
                </a>
                <br >
                
                <a href="#"  style="color:blue ; text-decoration:none"> Find us
                </a>
                <br>
                
                <a href="#"  style="color:blue; text-decoration:none"> See Terms and Conditions
                </a>
                <br>
                            <a href= "#"> 
                                <div class = "pic">
                                    
                                </div>
                            </a>    
                
            </div>
        </div>
     </body>
</html> 



  
 