

<html>
    <head>
        <link href ="../css/headr.css" rel="stylesheet" type="text/css" />
        
         <script src = "../jquery/home_jquery/jquery.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(Mainfunction);
            function Mainfunction(){
                
                $("#show").hide();
                
                $('#fileToUpload').change( function(event) {
													var tmppath = URL.createObjectURL(event.target.files[0]);
													$("#show").fadeIn("fast").attr('src',tmppath);
                        alert(tmppath);
                    $("#show").show();
				
			});
            };

        </script>    
         <style>
        .settings {
            
            position:relative;
            width:100%;
            height:75%;
            overflow: auto;
            left:0%;
            top:5%;
            z-index:2;
            background-color: lightgray;
            box-shadow: 15px 18px 30px -8px dimgrey;
            
	
}
    .Settings .signup-page{width:50%;height:100%;  position:absolute;left:35%;}
        .signup-page table , .extra-curricular table {border:3px solid #a1a1a1;padding-left:10%; margin-left:15%; border-radius:25px;background-color: lightgray; font-size:18px;
         box-shadow: 15px 18px 30px -8px blue  }
             .settings  .sideimages{
	             width:300px;
                 height:auto;
                 background-color:lightgray;
                 left:1%;
                 top:22%;
                 position: absolute;
                 border:3px solid gray;
                 z-index:102;
                 border-radius:25px;
                  box-shadow: 15px 18px 30px -8px blue;
                 padding: 10px 40px;
                }
        
        input {
                font-size:18px; 
	
            }
            li{
                padding-top:10px;
                font-family: sans-serif;
                font-size:14px; 
             } 
             button{height:50px; width:200px; border-radius: 15px; box-shadow: 4px 3px;font-style: oblique;color: blue;border:3px solid gray}
   
    </style>
    </head>
    
    
    <body>
        <div id="Header">
            <div class="wrapper">
                <div id="container">
                    <div class="main_menu inline">
                        <div class="nav-bar inline">
                            <div class="container inline">
                                <div><img class="img-thumbnail img-circle web_logo_img logo" src="../images/PUCIT1.png"></div>
                                <a id="logo" href="../mp1.html">PUCIT Portal</a>
                                <ul class="inline">
                                    
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

             <div class = "settings">
        <center>    
                <h1 style="color:blue"> <u> SIGN UP FORM </u>   </h1> </center> 
   
    <div class ="sideimages">
        <center> <h3 style="color:blue"> Rules and Regulations of the website </h3> </center>
            <ol>
                <li> you should not post any irrelative post to subjects or univeristy </li>
                 <li> you should not post any irrelative post to subjects or univeristy </li>
                 <li> you should not post any irrelative post to subjects or univeristy </li>
                 <li> you should not post any irrelative post to subjects or univeristy </li>
                 <li> you should not post any irrelative post to subjects or univeristy </li>
                 <li> you should not post any irrelative post to subjects or univeristy </li>
                <li> you should not post any irrelative post to subjects or univeristy </li>
                <li> you should not post any irrelative post to subjects or univeristy </li>
                <li> you should not post any irrelative post to subjects or univeristy </li>
                
            </ol>
        <br>
        <input type="checkbox"> <span><font style="color:blue"> I agree to these rules and regulations </font></span>
        </div>
    <div class = "signup-page">
        
            
        <center><b><font style="color:blue">PERSONAL INFO</font></b></center>
            
        
             <form method="post" action="save2.php"  enctype="multipart/form-data" >
     <table cellspacing = "20px"; >
        
        <tr>
        
           <td>
               
          First Name
            </td>
            <td>
            <input type="text" name="fname" id = "fname" maxlength = "25" placeholder = "Your First Name " size = "25" pattern="[A-Z]{1}[a-z]{1,24}" title = "First Capital Letter and then small letter" required autofocus>
            </td>
        </tr>
        <tr>
            <td>
            Last Name
            </td>
            <td>
            <input type="text" name="lname" id = "lname" maxlength = "25" placeholder = "Your Last Name " size = "25" pattern="[A-Z]{1}[a-z]{1,24}" title = "First Capital Letter and then small letter" required autofocus>
            </td>
        </tr>
        
        <tr>
            <td>
            Email
            </td>
            <td>
            <input type="email" name="email" id = "email" maxlength = "25" placeholder = "Email ID " size = "25" required autofocus>
            </td>
        </tr>
        
        
        <tr>
            <td>
            Password
            </td>
            <td>
            <input type="password" name="pass" id = "pass" placeholder = "at least of 8 letters " maxlength = "25" size = "25" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title = "Password (UpperCase, LowerCase, Number/SpecialChar and min 8 Chars)

" required autofocus>
            </td>
        </tr>
        
        <tr>
            <td>
            Confirm Password
            </td>
            <td>
            <input type="password" name="cpass" id = "cpass"placeholder = "at least of 8 letters " maxlength = "25" size = "25" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title = "Password (UpperCase, LowerCase, Number/SpecialChar and min 8 Chars)

" required autofocus>
            </td>
        </tr>
        
                <tr>
            <td>
            BirthDate
            </td>
            <td colsize = "25">
                <input type ="date" placeholder="Enter Your BirthDate" name="birthday" min = "1950-12-31" max = "2005-12-31" size = "30" required>
                    
           
            </td>
        
        </tr>
       
        <tr>
            <td>
            Sex
            </td>
            <td>
                <input list="Sex" name="sex"  placeholder="Choose Your Sex "size = "25" required>
                    <datalist id="Sex" required >
                        <option value="Male">
                        <option value="Female">
                     
                    </datalist>
            </td>
        </tr>
         
                  <tr>
             
             <td>
             You are ?:
            </td>
          <td>
                <input list="criteria" name="criteria"  placeholder="Criteria" size = "25" required>
                    <datalist id="criteria" required >
                        <option value="Student">
                        <option value="Teacher">
                        
                    </datalist>
            </td>
        </tr>
        
        <tr>
            <td>
            Introduction
            </td>
            <td>
                <textarea placeholder="Your introduction" name = "intro" title="Your intro"rows="4" cols="50" autofocus>

</textarea>

            </td>
        </tr>
         
         
         <tr>
            <td>
            Image
            </td>
            <td>
                                <input type="file"  name="fileToUpload" id = "fileToUpload" ></input>


            </td>
        </tr>
        
        <tr>
            <td>
            </td>    
            <td>
                    <img data-src="" id = "show"  alt="200x200"  data-holder-rendered="true" style="width: 200px; height: 200px;">
            </td>
            </tr>
        </table>
        
     
        
           <div style=" margin-left:40%; margin-top:0px;">
             <br> <br>  
               <button type="submit" value = "Submit" name = "submit" >SUBMIT</button> 
               <button type="reset" value = "Reset" name = "reset" > RESET</button>
              
            </div>
         </form>
        </div> 
        
        
            
       
    <a href = "thanks.html"> <button  value = "THANKS PAGE" name = "reset" > Go to Thanks page</button></a>
    </div>    
      

    </body>
</html>  