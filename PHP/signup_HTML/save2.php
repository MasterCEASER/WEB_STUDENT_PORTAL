<?php 
session_start();
?>



<?php 
include('connect.php');

      $fname = $_POST["fname"];
      $lname = $_POST["lname"];
      $pass = $_POST["pass"];
    $intro = $_POST["intro"];
    $intro = addslashes($intro);
      $email = $_POST["email"];
      $identity = $_POST["criteria"];
      $birthday = $_POST["birthday"];
      $sex = $_POST["sex"];
      
      
            $sql = "SELECT * FROM person Where email = '$email'";
			$query_result = mysqli_query($conn, $sql);
			
           if(mysqli_num_rows($query_result) > 0  )
           {
               echo "<script src = '../jquery/home_jquery/jquery.min.js' type='text/javascript'></script>";
                   echo "<script> $(document).ready(Mainfunction);
            function Mainfunction(){
            
                alert('Sorry!! You can not add more than 1 account with the same email');
                window.location.replace('thanks.php');
            };
</script>";

             echo "You can not add more than 1 account with the same Email";
               
           }
           else
           {
              if($identity == "Student")
              {
                $identity = 0;
              }
              else
              {
                $identity = 1;
              }
                
               
           $new_name = "";    
               if($_FILES["fileToUpload"]["name"] != ""){
                //Here 'userpic' is name of your 'file control'
	//explore will break the name by using '.' delimeter.
	$temp = explode(".", $_FILES["fileToUpload"]["name"]);
	
	//Create a unique name by using time and append the actual extension
	$new_name = round(microtime(true));
	
	//save file into "img" folder with the name stored '$new_name' variable
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "..//image//".$new_name);

	//store image name in database
               $new_name = 'image/'.$new_name;
               
               };
            $sql = "INSERT INTO person (lname,fname,email,Password,birthdate,type,userimg,intro,sex)
			VALUES ('$lname','$fname', '$email', '$pass','$birthday','$identity','$new_name','$intro','$sex')";
		
		



		if (mysqli_query($conn, $sql) === TRUE) {
			$last_id = mysqli_insert_id($conn);
          
            $sql = "SELECT * FROM person Where email = '$email'";
			$query_result = mysqli_query($conn, $sql);
            $results = array();
            $recordsFound = mysqli_num_rows($query_result);
			if ($recordsFound > 0) {			
				while($row = mysqli_fetch_assoc($query_result)) {
					
					$results['userid'] = $row['id'];
				}
			} 
            $name = $fname . ' ' . $lname;
            $_SESSION['user'] = $results['userid'];
            $_SESSION['email'] = $email;
            $_SESSION['type'] = $_POST['criteria'];
          echo "email is ".$_SESSION['email'];  
            
          header('Location: thanks.php?name='.$name.'&img='.$new_name);
			echo"query saved";
		} else {
			echo "Error: ". mysqli_error($conn);
		}
		
			
           }

            
  
                  
  



?>