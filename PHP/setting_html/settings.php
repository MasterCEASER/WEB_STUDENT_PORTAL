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
        <script type="text/javascript" src="../jquery/main_page_jquery/jquery-2.1.4.min.js"></script>
        <script>
           $(document).ready(function(){
               
               var id = $("#id").val();
               $("#id").hide();
               var data = {"action": "getdata"};
			
			//object pass to $.ajax function to make an AJAX call.
			var settings= {
				type: "POST",
				dataType: "json",
				url: "getdata.php?id=<?php echo $_SESSION['user']; ?>",
				data: data,
				success: function(response) {
					console.log('Recieved from server:');
					console.log(response.data);
                    var row = response.data[0];
                    $("#fname").attr("value",row.first);
                    $("#lname").attr("value",row.second);
                    $("#pass").attr("value",row.pass);
                    $("#cpass").closest("tr").remove();
                    $("#birthday").closest("tr").remove();
                    $("#sex").closest("tr").remove();
                    $("#criteria").closest("tr").remove();
                    $("#email").attr("value",row.email);
                    $("#email").attr("disabled","true");
                    $("img#imgfile").attr("src",row.image);
                    $("#intro").val(row.intro);
                    $("div.signup-page > form").attr("action","save.php");
                    $("#reset").text("CANCEL").click(function(){
                        location.reload();
                    });
                    $("#submit").text("UPDATE");
                },
				error: function (err, type, httpStatus) {
					////alert('error has occured');
				}
			};
			$.ajax(settings);
           });
        </script>        

    </head>
    
    
    <body>
        <?php include('../header.php'); ?>
        <hr style="margin-top:20px;">
        <center>  <h1> Settings </h1> </center>
        <?php include('../signup_HTML/signupform.php'); ?>
    </body>
</html>  