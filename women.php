Almost out of storage … If you run out, you can't create or edit files, send or receive email on Gmail, or back up to Google Photos.
<?php  include('connect.php');
session_start();
 $subj = ! empty($_SESSION['uid']) ? $_SESSION['uid'] : ' ';
		 $_SESSION['uid']= $subj; 
 $uid= $_SESSION['uid'];
 //include('AESEnc.php');
 $subj1 = ! empty($_SESSION['name']) ? $_SESSION['name'] : ' ';
		 $_SESSION['name']= $subj1; 
$uname1= $_SESSION['name'];

if($uname1==' ')
{
	
}
else
{
//$Pass = "steganography";
 //$uname=fnDecrypt($uname1,$Pass);
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; 

?>
<html>
<title>Cloth Shopping</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>
.w3-sidenav a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;color:white;}
.pagination {
  
    padding-left: 20px;
    margin-bottom: 20px;
}
.page {
    display: inline-block;
    padding: 10px 15px;
    margin-right: 4px;
    border-radius: 13px;
    border: solid 1px #c0c0c0;
    background: #e9e9e9;
    box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);
    font-size: .875em;
    font-weight: bold;
    text-decoration: none;
    color: blue;
    text-shadow: 0px 1px 0px rgba(255,255,255, 1);
}

.page:hover, .page.gradient:hover {
    background: #fefefe;
    background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#FEFEFE), to(#f0f0f0));
    background: -moz-linear-gradient(0% 0% 270deg,#FEFEFE, #f0f0f0);
}

.page.active {
    border: none;
    background: #616161;
    box-shadow: inset 0px 0px 8px rgba(0,0,0, .5), 0px 1px 0px rgba(255,255,255, .8);
    color: #f0f0f0;
    text-shadow: 0px 0px 3px rgba(0,0,0, .5);
}

.page.gradient {
    background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f8f8f8), to(#e9e9e9));
    background: -moz-linear-gradient(0% 0% 270deg,#f8f8f8, #e9e9e9);
}

</style>
<body class="w3-content" style="max-width:1200px" bgcolor='black'>
<form method='post'>
<!-- Sidenav/menu -->
<nav class="w3-sidenav w3-collapse w3-top" style="z-index:3;width:250px;background-color:black" id="mySidenav">
  <div class="w3-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-closebtn w3-hover-text-red"></i>
    <a href='home.php'><h3 class="w3-wide"><b>LOGO</b></h3></a>
  </div>
    
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold;">
  <button type="submit" class="w3-btn w3-padding w3-red w3-margin-bottom" name='jeans' style='width:100px'>Jeans</button><br>
  <button type="submit" class="w3-btn w3-padding w3-red w3-margin-bottom" name='tops' style='width:100px'>Tops</button><br>
  <button type="submit" class="w3-btn w3-padding w3-red w3-margin-bottom" name='dresses' style='width:100px'>Dresses</button><br> 
  
  </div>


</nav>
<?php


if(isset($_POST['jeans']))
{
	
	 $_SESSION['category']='Jeans';
	 $category=$_SESSION['category'];
	 	echo "<script>location.replace('women.php')</script>";
}
if(isset($_POST['tops']))
{

    $_SESSION['category']='Top';
	$category=$_SESSION['category'];
	echo "<script>location.replace('women.php')</script>";
}

if(isset($_POST['dresses']))
{
	
    $_SESSION['category']='Dress';
	$category=$_SESSION['category'];
		echo "<script>location.replace('women.php')</script>";
}



?>
<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-black w3-xlarge w3-padding-24">
  <span class="w3-left w3-wide">LOGO</span>
  <a href="javascript:void(0)" class="w3-right w3-opennav" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-left">
	<?php 
 if(empty($_SESSION['category']))
{
	
}
else
{
	echo $_SESSION['category'];
}

?>
</p>
    <p class="w3-right"> 
	<ul class="w3-right">
      <li href='payment.php' class="w3-hide-small w3-dropdown-hover">
	 <a href='payment.php'>
	  <i class="fa fa-shopping-cart w3-margin-right">
	
	  <span class="w3-badge w3-right w3-small w3-red">
	    
	  <?php
	   $no="select count(pid) as number from temp where uid='$uid'";
	$num=$con->query($no);
	$rows=$num->fetch_assoc();
	echo $rows['number'];
	?>
	  </span></i></a></li>
	 <li class="w3-hide-small w3-dropdown-hover">
	  <?php
  if($uname1!=' ')
  {
	  echo "<h6>Hello $uname1</h6>";
  }
	  ?>
	
	
    <a href="#" class="w3-padding-large " title="my account"><i class="fa fa-user"></i></a>   
<div class="w3-dropdown-content w3-white w3-card-4" style='font-size:12px'>
	<?php
	
	  if($uname1!=' ')
	  {
		  ?>
		   <a href="Logout.php">Logout</a>
		
		<?php  
	  }
	 else{
		 
		 ?>
		 
		   <a href="#" id="href_login">Login</a>
		   <?php
		 
	 }
	
	?>
	
	
    
      
     
     
    </div>
  </li>
  </ul>
 
    </p>
	
  </header>

  <!-- Image header -->
 

  <div class="w3-container w3-text-grey" id="jeans">
  <?php
  if(empty($_SESSION['category']))
{
}
 else
{   
     $no="select count(pid) as number from product where category='".$_SESSION['category']."'";
	$num=$con->query($no);
	$rows=$num->fetch_assoc();
    echo "<p style='color:white'>".$rows['number']." Items</p>";
}
?>
  </div>

  <!-- Product grid -->
  

  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
  <?php

   if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
     $start_from = ($page-1) * 8; 
if (empty($_SESSION['category']))
{
	echo"<div >
     <img src='images/new1.jpg' style='width:90%;height:550px';>
	 </div>
	 ";
}
else
{
  $sel="select * from product where category='".$_SESSION['category']."' ORDER BY pid ASC LIMIT $start_from,8";
  $rel=$con->query($sel);
  if(mysqli_num_rows($rel)==0)
  {
	  echo "<script>alert('No data found')</script>";
  }
  else
  {
	  while($data=mysqli_fetch_array($rel))
		  {
			  echo"
    <div class='w3-quarter'>
     <a href='product.php?pid=".$data['pid']."'><img src='images/".$data['img']."' style='width:70%';>
      <p>".$data['name']."<br><b>Rs. ".$data['price']."</b></p></a>
    </div>
   ";
		  }
		  
  }

  ?>
   </div>
   <center>
   <div class='page'>
     <?php 
                               $sql = "SELECT COUNT(pid) FROM product where category='".$_SESSION['category']."'"; 
                               $rs_result = $con->query($sql); 
                               $row = mysqli_fetch_row($rs_result); 
                               $total_records = $row[0]; 
                               $total_pages = ceil($total_records /8); 

                               for ($i=1; $i<=$total_pages; $i++) 
							    { 
                                  echo "
		
		                        <a class='page' href='women.php?page=".$i."'>".$i."</a>
		
		                            "; 
                                }; 
}
                            ?>
							</div>
							   </center>
							   <br><br>
  <!-- Login section -->
  <div class="w3-container w3-black w3-padding-32" id='login' style='width:100%;display:none;'>
  <center>
    <h1>Sign In</h1>
    <p>Login to your account with valid email id and password</p>
    <p><input class="w3-input w3-border" type="text" name='uname' placeholder="Enter Username" style="width:40%"></p>
	<p><input class="w3-input w3-border" type="password" name='password' placeholder="Enter Password" style="width:40%"></p>
    <button type="submit" id="btn_login" name='login' class="w3-btn w3-padding w3-red w3-margin-bottom">Login</button>
	<br>
	
	New Customer?<br><br>
	 <a href='reg.php'><button type="button" class="w3-btn w3-padding w3-orange w3-margin-bottom">Register here</button></a>
    </center>
  </div>
  
  <div class="w3-container w3-black w3-padding-32" id='div_Otp' style='width:100%; display:none;'>
  <center>
   
	 <p><input class="w3-input w3-border" type="text" id="txtbx_otp" name='otp_txtbx' placeholder="Enter OTP" style="width:40%;"></p><br>
	 <button type="submit" name='btn_subotp' id="subotp" class="w3-btn w3-padding w3-red w3-margin-bottom">Submit</button><br>
	
	
    </center>
  </div>
  
  <!-- Footer -->
  
 
  <!-- End page content -->


<!-- Newsletter Modal -->

 </div>
 <?php
 
if(isset($_POST['btn_subotp']))
{
	$otp_txtbx=$_POST['otp_txtbx'];
	
	$select = "select uid,name from users where otp='".$otp_txtbx."'";
	$rel=$con->query($select);
	if($data=mysqli_fetch_array($rel))
	{
		$_SESSION['uid']=$data['uid'];
		$_SESSION['name'] = $data['name'];
		//$uname= $_SESSION['name'];
		echo "<script>window.location.href='women.php'</script>";
		
	}
	else{
		echo '<script>alert("OTP is Invalid!");</script>';
	}	
	
}
 
 
 
 
 
 if(isset($_POST['login']))
{
       $uname=$_POST['uname'];
	   $pass=$_POST['password'];
	   
	   
				   //$key = "steganography";
				   //$uname1 = fnEncrypt($uname, $key);
				   
				   //$pass1= fnEncrypt($pass, $key);
	

	if(empty($uname)||empty($pass))
	 {
		 echo "<script>alert('Please Fill Username and password fields');</script>";
	 }
	 else{
		 
		 $select = "select password from users where username='$uname'";
		 $rel=$con->query($select);
		 if($data=mysqli_fetch_array($rel))
		 {
			$hashpword=$data['password'];
			
			if (password_verify($pass, $hashpword)) {
				//echo '<script>alert("Password is valid!");</script>';
				
				 $sel1="select username,password,uid,name,email from users where username='$uname' and password='$hashpword'";
				
				 $result1=$con->query($sel1);
			
				if($row=mysqli_fetch_array($result1))
				{
              
		           //$_SESSION['uid']=$row['uid'];
				   //$uid= $_SESSION['uid'];
				   //$_SESSION['name']=$row['name'];
				   //$uname= $_SESSION['name'];
				   
				   $email = $row['email'];
				   
				   $n=6;
				   $generator = "1357902468"; 
				   $otp = "";

					for ($i = 1; $i <= $n; $i++) { 
						$otp .= substr($generator, (rand()%(strlen($generator))), 1); 
					} 
					
					$upd = "Update Users set otp='".$otp."' where uid='".$row['uid']."'";

					if(mysqli_query($con,$upd)){
												
					}
					else
					{						
					}


				   require 'Exception.php';
				   require 'PHPMailer.php';
				   require 'SMTP.php';
											
										  
			$body="<h2 style='font-size:18px;'>Hello ".$row['name'].",</h2></br>
			<h3 style='font-size:17px; font-weight:bold;'>Welcome To Sql Injection Prevention System </h3></br>	
			<h3 style='font-size:17px; font-weight:normal;'>Kindly Check Your OTP</h3></br>
			<h3 style='font-size:17px; font-weight:bold;'>".$otp."</h3></br>				
			<h4 style='font-size:16px; font-weight:normal;'>Regards,</h4></br>
			<h4>Sql Injection Prevention System</h4></br>";
							 
			$mail = new PHPMailer(); 
			$mail->IsSMTP(); // send via SMTP
			//IsSMTP(); // send via SMTP
												
			$mail->SMTPOptions = array(
								'ssl' => array(
									'verify_peer' => false,
									'verify_peer_name' => false,
									'allow_self_signed' => true
								)
							);
							$mail->SMTPAuth = true; // turn on SMTP authentication
							$mail->Host = "smtp.gmail.com"; 
							$mail->Port=587;
							//$mail->Host="localhost";
							$mail->Username = ""; // SMTP username(Your email id)
							$mail->Password = ""; // SMTP password(Your password)
							$webmaster_email = ""; //Reply to this email ID(Your email id)
							$email=$email; // Recipients email ID
							$name=$row['name']; // Recipient's name
							$mail->From = $webmaster_email;
							$mail->FromName = "Sql Injection Prevention System";
							$mail->AddAddress($email,$name);
							$mail->AddReplyTo($webmaster_email,"Sql Injection Prevention System");
							$mail->WordWrap = 50; // set word wrap
							//$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
							//$mail->AddAttachment("/tmp/image.jpg", "new.jpg"); // attachment
							$mail->IsHTML(true); // send as HTML
							$mail->Subject = "OTP";
							$mail->Body = $body ; //HTML Body
							$mail->AltBody = "OTP"; //Text Body
							if(!$mail->Send())
							{
								echo "Mailer Error: " . $mail->ErrorInfo;
							}
							else
							{
								echo "<script>alert('Kindly Check Your Email');</script>";
								//echo "<script>window.location.href='women.php'</script>";
								
								echo "<script>document.getElementById('div_Otp').style.display = 'block';</script>";
								
								echo "<script> document.getElementById('login').style.display = 'none';</script>";
								
							}	
				   
				}
				else
				{
					echo "<script>alert('Invalid username or password');</script>";
				}				
				
			} else {
				echo '<script>alert("Password is Invalid!");</script>';
			}
					
		 }
		 else{
			 echo "<script>alert('Invalid username');</script>";
		 }
	 
		 
	  
		}
   
   		   
	 
}
?>
              
</form>
</body>
</html>
<footer class="w3-container w3-theme-d5">
  <p align='right'> <a href="#" target="_blank">Cloth Online Shopping</a></p>
</footer>


<script type="text/javascript">

$(document).ready(function(){
  $("#href_login").click(function(){
    $("#login").show();
	//return false;
  });
});

</script>