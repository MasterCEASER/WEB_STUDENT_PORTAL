<?php

session_start();

if( $_SESSION['user'] == null)
{
    
     header('Location: ../mp1.php');
}
?> 

<?php 
 function connect()
 {
   $db = new PDO('mysql:host=localhost;dbname=pucit;', 'root', '');
    return $db;
 }
 function run($statement)
 {
     $db = connect();
     $query = $db->query($statement);
     return $query;
 }
 
 ?>