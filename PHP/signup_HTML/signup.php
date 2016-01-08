

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
        
    </head>
    <body>
        
        <div id="Header">
            <div class="wrapper">
                <div id="container">
                    <div class="main_menu inline">
                        <div class="nav-bar inline">
                            <div class="container inline">
                                <div>
                                    <img class="img-thumbnail img-circle web_logo_img logo" src="../image/PUCIT1.png">
                                </div>
                                <a id="logo" href="../home/home.php">PUCIT PORTAL</a>
                                <div id="usr_img">
                                    <img class="user_logo_img" src="../image/PUCIT1.png">
                                </div>
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
            </h1>
            </div>
        <?php include('signupform.php'); ?>
    
  </body>
</html>  