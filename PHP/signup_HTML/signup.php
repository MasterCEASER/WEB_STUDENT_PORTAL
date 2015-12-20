

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
                    $("#show").show();
                });
            };
        </script>    
        <style>
            .sett {
                z-index:2;
                background-color: lightgray;
                box-shadow: 15px 18px 30px -8px dimgrey;
                
    background-image: url('../image/bg.png');
            }
            .signup-page{
                
            }
            .signup-page table{
                    background-color: lightgray;
    font-size: 18px;
    box-shadow: 15px 18px 30px -8px #4c4c4c; 
            }
            li{
                font-family: sans-serif;
                font-size:14px; 
            }
            input,
            button{
                   box-shadow: 2px 2px 5px 3px grey;
    padding: 6px;     
            }
            
            button{
               height: 50px;
    width: 200px;
    color: blue;
    font-weight: bold;
    font-family: monospace;
    text-shadow: 2px 2px 8px grey;
    font-size: 37px; 
            }
            input {
                
    font-size: 18px;
    border: 0;
            }
        </style>
    </head>
    <body>
        
        <div id="Header">
            <div class="wrapper">
                <div id="container">
                    <div class="main_menu inline">
                        <div class="nav-bar inline">
                            <div class="container inline">
                                <div><img class="img-thumbnail img-circle web_logo_img logo" src="../image/PUCIT1.png"></div>
                                <a id="logo" href="../home/home.php">PUCIT PORTAL</a>
                                
                                   
                                <div id="usr_img"><img class="user_logo_img" src="../image/PUCIT1.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        
        <hr style="margin-top:20px;">
        <div class="sett">
            <h1 style="color:blue;text-align: center;text-shadow: 3px 3px 5px white;">
                SIGN UP FORM
            </h1><hr>
            <center>
                <div class="signup-page">
                    <form method="post" action="save2.php" enctype="multipart/form-data">

                        <table cellspacing="20px">
                            <tr>
                                <td>
                                    First Name
                                </td>
                                <td>
                                    <input type="text" name="fname" id="fname" maxlength="25" placeholder="Your First Name " size="25" pattern="[A-Z]{1}[a-z]{1,24}" title="First Capital Letter and then small letter" required="" autofocus="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Last Name
                                </td>
                                <td>
                                    <input type="text" name="lname" id="lname" maxlength="25" placeholder="Your Last Name " size="25" pattern="[A-Z]{1}[a-z]{1,24}" title="First Capital Letter and then small letter" required="" autofocus="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Email
                                </td>
                                <td>
                                    <input type="email" name="email" id="email" maxlength="25" placeholder="Email ID " size="25" required="" autofocus="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Password
                                </td>
                                <td>
                                    <input type="password" name="pass" id="pass" placeholder="at least of 8 letters " maxlength="25" size="25" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Password (UpperCase, LowerCase, Number/SpecialChar and min 8 Chars)" required="" autofocus="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Confirm Password
                                </td>
                                <td>
                                    <input type="password" name="cpass" id="cpass" placeholder="at least of 8 letters " maxlength="25" size="25" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Password (UpperCase, LowerCase, Number/SpecialChar and min 8 Chars)" required="" autofocus="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    BirthDate
                                </td>
                                <td colsize="25">
                                    <input type="date" placeholder="Enter Your BirthDate" name="birthday" min="1950-12-31" max="2005-12-31" size="30" required="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Sex
                                </td>
                                <td>
                                    <input list="Sex" name="sex" placeholder="Choose Your Sex " size="25" required="">
                                    <datalist id="Sex" required="">
                                        <option value="Male">
                                        </option><option value="Female">
                                    </option></datalist>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    You are ?:
                                </td>
                                <td>
                                    <input list="criteria" name="criteria" placeholder="Criteria" size="25" required="">
                                    <datalist id="criteria" required="">
                                        <option value="Student">
                                        </option><option value="Teacher">
                                    </option></datalist>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Introduction
                                </td>
                                <td>
                                    <textarea placeholder="Your introduction" name="intro" title="Your intro" rows="4" cols="50" autofocus="">                                </textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Image
                                </td>
                                <td>
                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                </td>
                            </tr>        
                            <tr>
                                <td>
                                </td>    
                                <td>
                                    <img data-src="" id="show" alt="200x200" data-holder-rendered="true" style="width: 200px; height: 200px; display: none;">
                                </td>
                            </tr>
                        </table>
                        <div style="">
                            <br> <br>  
                            <button type="submit" value="Submit" name="submit">SUBMIT</button> 
                            <button type="reset" value="Reset" name="reset"> RESET</button>
                        </div>
                    </form>
                </div> 
            </center>
            <hr>
            </div>
    
  </body>
</html>  