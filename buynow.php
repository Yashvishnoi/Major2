<?php
   session_start();
  include('connect.php');
  $subj = ! empty($_SESSION['uid']) ? $_SESSION['uid'] : ' ';
		 $_SESSION['uid']= $subj; 
 $uid= $_SESSION['uid'];
  $pid=$_GET['pid'];
  
  $subj1 = ! empty($_SESSION['name']) ? $_SESSION['name'] : ' ';
		 $_SESSION['name']= $subj1; 
 $uname1= $_SESSION['name'];
 include('AESEnc.php');
 $Pass = "steganography";
 $uname=fnDecrypt($uname1,$Pass);
 
?>
<html>
<title>Cloth Shopping</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-sidenav a {font-family: "Roboto", sans-serif}
body,h1,h2,h4,h6,.w3-wide {font-family: "Montserrat", sans-serif;color:black;}
h5,h3{font-family: "Montserrat", sans-serif;color:white;}
</style>

<body class="w3-content" style="max-width:1300px" >
<form method='post'>