<?php
include('../connect/connectPDO.php');
session_start();
if(isset($_REQUEST['class']) == false){
    header("Location:../classroomController.php");
}
?>   
<html>
    <head>        
        <link href="../css/style.css" type="text/css" rel="stylesheet"><link rel="stylesheet" type="text/css" href="../css/headr.css">
        <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
        <script src="../js/jquery-2.1.4.min.js"></script>
    </head>
    <body>