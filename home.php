Almost out of storage … If you run out, you can't create or edit files, send or receive email on Gmail, or back up to Google Photos.
<html>
<title>Cloth Shopping</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>


<body class="w3-theme-l5">
<form method='post'>
<!-- Navbar -->
<div class="w3-top">
 <ul class="w3-navbar w3-theme-d2 w3-left-align w3-large">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  </li>
  <li><a href="home.php" class="w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Home</a></li>
  <li class="w3-hide-small"><a href="#about" class="w3-padding-large w3-hover-white" title="About">About us</a></li>
  <li class="w3-hide-small"><a href="#product" class="w3-padding-large w3-hover-white" title="Product">Products</a></li>

  <li class="w3-hide-small"><a href="#contact" class="w3-padding-large w3-hover-white" title="contact">Contact</a></li>
  
<li class="w3-hide-small w3-right"><a href="Logout.php" class="w3-padding-large w3-hover-white" title="My Account">Logout</a></li>
 </ul>
</div>
<br><br>
 <div class="w3-display-container w3-container">
    <img src="images/banner2.jpg" alt="Jeans" style="width:100%;height:500px">
    <div class="w3-display-topleft w3-padding-xxlarge w3-text-white">
     
    </div>
  </div>
 
  <div id="about" class="container text-center" align='center' style="height:300px">
 <br> <br>
  <h3>ABOUT US</h3>
  <p><em>Clothes Shopping</em></p>
  <p>You are at the right place! Here you can fill all your shopping dreams !!!
  <br>
  online fashion retailer offering thousands of styles across womenswear and menswear<br> so that you stay ahead of the trends.</p>
  
 
</div>

<center>
<br><br>
<div class="w3-row-padding w3-padding-16 w3-center" id="product" style='width:80%;'>
   
    <div >
	<br><br>
      <a href="women.php" title="womens"><img src="images/womens.jpg" style="width:90%;height:50%"></a>
      <h3>Womens Clothing</h3>
      <p>All types of womens clothing like jeans,tops,dresses available.</p>
    </div>
   
   <br><br>
  </div>
  

  </center>
  <center>
  <div class="w3-padding-64 w3-black w3-small w3-center" id="contact" style="width:100%">
  <center>
   <div class="w3-row-padding w3-light-grey w3-center" style="width:60%;align:center;height:320px" >
      <div class="w3-col s6">
        <h4>Contact</h4>
        <p>Questions? Go ahead.</p>
       
          <p><input class="w3-input w3-border txtOnly" type="text" name='name' placeholder="Name" name="Name" required></p>
          <p><input class="w3-input w3-border" type="email" name='email' placeholder="Email" name="Email" required></p>
          <p><input class="w3-input w3-border" type="text" name='sub' placeholder="Subject" name="Subject" required></p>
          <p><input class="w3-input w3-border" type="text" name='msg' placeholder="Message" name="Message" required></p>
          <button type="submit" name='send' class="w3-btn-block w3-padding w3-black">Send</button>
 
      </div>

     
      <div class="w3-col s6 w3-justify">
        <h4>Store</h4>
        <p><i class="fa fa-fw fa-map-marker"></i> Company Name</p>
        <p><i class="fa fa-fw fa-phone"></i> 0044123123</p>
        <p><i class="fa fa-fw fa-envelope"></i> ex@mail.com</p>
        <h4>We accept</h4>
       <p><i class="fa fa-fw fa-credit-card"></i>Debit Card</p>
        <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
        <br>
        <i class="fa fa-facebook-official w3-xlarge w3-hover-text-indigo"></i>
        <i class="fa fa-instagram w3-xlarge w3-hover-text-purple"></i>
        <i class="fa fa-twitter w3-xlarge w3-hover-text-light-blue"></i>
        <i class="fa fa-pinterest w3-xlarge w3-hover-text-red"></i>
        <i class="fa fa-flickr w3-xlarge w3-hover-text-blue"></i>
      </div>
    </div>
	</center>
	</div>
	</center>
	<?php
	if(isset($_POST['send']))
 {
	 include('connect.php');
	 $name=$_POST['name'];
	 $email=$_POST['email'];
	 $sub=$_POST['sub'];
	 $msg=$_POST['msg'];
	 $sql="Insert into contact values ('$name','$email','$sub','$msg')";
				if(mysqli_query($con,$sql))
	  {
		  echo "<script>alert('Message sended succesfully');</script>";
		 
 
	  }
 }
 
 ?>
 </form>
	<footer class="w3-container w3-theme-d5">
  <p align='right'> <a href="#" target="_blank">Cloth Online Shopping</a></p>
</footer>


<script type="text/javascript">

$(document).ready(function () {
	
$( ".txtOnly" ).keypress(function(e) {
    var key = e.keyCode;
    if (key >= 48 && key <= 57) {
        e.preventDefault();
    }
 });
	
	
}); 

	
</script>	