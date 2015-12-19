 

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