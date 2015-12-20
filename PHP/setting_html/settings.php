<?php
session_start();
$user = $_SESSION['user'];
echo "<input type = 'text' id = 'id' value = '$user' >";
?>
<html>
    <head>
        <link href ="../css/headr.css" rel="stylesheet" type="text/css" />
         <link href ="../css/settings_css/settings.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
        <script type="text/javascript" src="../jquery/main_page_jquery/jquery-2.1.4.min.js">
        </script>
        
        <script>
           $(document).ready(function(){
               
               var id = $("#id").val();
               $("#id").hide();
               var data = {"action": "getdata"};
			
			//object pass to $.ajax function to make an AJAX call.
			var settings= {
				type: "POST",
				dataType: "json",
				url: "getdata.php?id="+id+"",
				data: data,
				success: function(response) {
					console.log('Recieved from server:');
					console.log('Recieved from server:');
                    var row = response.data[0];
                    $("#fname").attr("value",row.first);
                    $("#lname").attr("value",row.second);
                    $("#pass").attr("value",row.pass);
                    $("#email").attr("value",row.email);
                    $("#intro").attr("value",row.intro);
                                     
                                        
                                        
                                       
                                       
                                    
                                    
				},
				error: function (err, type, httpStatus) {
					////alert('error has occured');
				}
			};
			
			$.ajax(settings);
			console.log('request sent');
					
               
               //alert("hello");
           $("#change").click(function(){
           
               //alert("btn clock");
            $("input").attr("readonly",false);
           
           
           
           });
           
           
           
           
           
           });
        </script>        

    </head>
    
    
    <body>
        <?php include('../header.php'); ?>
        <hr style="margin-top:20px;">
        <center>  <h1> Settings </h1> </center>
        <div class = "settings">
        
        <br>
        
        <input type = "button"  id = "change" style="color:darkred ; background-color:white ; font-size:20px;" value = "Click here to Edit Your Settings">
        
        <center>
            <div class="maintable">
                <FIELDSET><LEGEND><strong>Personalia:</strong></LEGEND>
                    <form action="save.php" method="post">
                    <table  CELLSPACING="5" CELLPADDING="15">
                        <tr>
                            <td>
                                First Name
                            </td>
                                
                            <td>
                                <input type="text" name="fname"  id = "fname" maxlength = "25" placeholder = "Your First Name " size = "25" pattern="[A-Z]{1}[a-z]{1,24}" title = "First Capital Letter and then small letter" required autofocus readonly>
                            </td>
                        </tr>
                        
                        <tr>
                                
                            <td>
                                Last Name
                            </td>
                                
                            <td>
                               <input type="text" name="lname" id = "lname" maxlength = "25" placeholder = "Your Last Name " size = "25" pattern="[A-Z]{1}[a-z]{1,24}" title = "First Capital Letter and then small letter" required autofocus readonly>
                            </td>
                            
                        </tr>        
                        
                        <tr>
                                
                            <td>
                                Password
                            </td>
                                
                            <td>
                                 <input type="password" name="pass" id = "pass" placeholder = "at least of 8 letters " maxlength = "25" size = "25" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title = "Password (UpperCase, LowerCase, Number/SpecialChar and min 8 Chars)

" required autofocus readonly>
                            </td>
                            
                        </tr>        
                        
                       
 
                        
                        <tr>
                                
                            <td>
                                Email
                            </td>
                                
                            <td>
                                <input type="email" name="email" id= "email" maxlength = "25" placeholder = "Email ID " size = "25" required autofocus readonly>
                            </td>
                            
                        </tr>        
 
                        <tr>
                                
                            <td>
                                Introduction
                            </td>
                                
                            <td>
                                <INPUT TYPE="textarea" NAME="intro" id = "intro"  rows = "50"  cols = "25" readonly >
                            </td>
                            
                        </tr>        
 
                                                              
                        <tr>
                                
                            <td>
                                
                            </td>
                                
                            <td>
                                <INPUT TYPE="submit" name = "submit" id = "sv" value = "Save" >
                                 
                                    <INPUT TYPE="Submit"  id = "cancel" value = "Cancel">
                            </td>
                            
                        </tr>      

                </TABLE>
                        </form>        
            </FIELDSET>
            </div>    
        </center>
            </div>
            
            
      

    </body>
</html>  