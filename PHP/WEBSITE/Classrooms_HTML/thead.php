<?php
include('connectPDO.php');
session_start();
$_SESSION['user'] = 1;
$_SESSION['class'] = 2;
$u = $_SESSION['user'];
?>
<html>
    <head>        
        <link href="../css/style.css" type="text/css" rel="stylesheet"><link rel="stylesheet" type="text/css" href="../css/headr.css">
        <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
        <script src="../js/jquery-2.1.4.min.js"></script>
    </head>
    <body>
