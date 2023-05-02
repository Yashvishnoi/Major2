<?php
   session_start();
  include('connect.php');
  include('AESEnc.php');
 $subj1 = ! empty($_SESSION['name']) ? $_SESSION['name'] : ' ';
		 $_SESSION['name']= $subj1; 
 $uname1= $_SESSION['name'];
  if($uname1==' ')
{
	
}
else
{
$Pass = "steganography";
 $uname=fnDecrypt($uname1,$Pass);
}
  
  $subj = ! empty($_SESSION['uid']) ? $_SESSION['uid'] : ' ';
		 $_SESSION['uid']= $subj; 
 $uid= $_SESSION['uid'];
  
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

 <header class="w3-container w3-xlarge">
    <p class="w3-left">
	<a href='home.php'>Logo</a>
</p>
    <p class="w3-right">
	<ul class="w3-right">
      <li class="w3-hide-small w3-dropdown-hover"><i class="fa fa-shopping-cart w3-margin-right">
	 <span class="w3-badge w3-right w3-small w3-red">
	 <?php
	 $no="select count(pid) as number from temp where uid='$uid'";
	$num=$con->query($no);
	$rows=$num->fetch_assoc();
	echo $rows['number'];
	 ?>
	 </span></i></li>
	 <li class="w3-hide-small w3-dropdown-hover">
	 	  <?php
  if($uname1!=' ')
  {
	  echo "<h6>Hello $uname</h6>";
  }
	  ?>
    <a href="#" class="w3-padding-large " title="Notifications"><i class="fa fa-user"></i></a> 
    <div class="w3-dropdown-content w3-white w3-card-4" style='font-size:12px'>
      <a href="#login">Login</a>
      <a href="Logout.php">Logout</a>
     
    </div>
  </li>
  </ul>
    </p>
	
  </header>
  
  
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
  <?php
  $sel="select * from temp where uid='$uid'";
  $rel=$con->query($sel);
  if(mysqli_num_rows($rel)==0)
  {
	 echo"
	  <table width='70%' height='300px' align='center' border='0'>
	<tr align='center'>
	<td>
	<h2>Your Cart is empty start shopping</h2>
	</td>
	</tr>
	</table>";
  }
  else
  {
	  while($data=mysqli_fetch_array($rel))
		  {
			  $pid=$data['pid'];
			  $sq="select * from product where pid='$pid'";
			  $rq=$con->query($sq);
			  while($data1=mysqli_fetch_array($rq))
		  {
			   echo"
   
	<table width='70%' align='center' border='0'>
	<tr>
	<td width='15%'> <img src='images/".$data1['img']."' style='width:60px';></td>
	<td width='25%'> ".$data['name']."</td>
	 <td width='15%'>Rs.".$data['price']." </td>
	<td width='15%'><a href='remove.php?pid=".$pid."'><button type='button' name='remove' class='w3-btn w3-padding w3-red w3-margin-bottom'>Remove</button></a></td>
	 </tr>
	 <tr>
	 <td colspan='4'>
	 <hr  style='align:center'></td>
	  </tr>
	 
	  
    ";
	
		  }
  }
  echo"
  <tr>
  <td colspan='4' align='center'>
  <button type='submit' name='proceed' class='w3-btn w3-padding w3-orange w3-margin-bottom'>Proceed to Payment</button>
  </td>
  </tr>";
  }
  ?>
  
</table> 
 </div>
 <center>
 <div class="w3-row-padding w3-padding-16 w3-center" id='payment' style='display:none'>

 <table width='70%' style='height:300px' align='center' border='0' bgcolor='black'>
    <tr align='center'>
	<td><h3>
	Payment Details</h3>
	</td>
	</tr>
	<tr align='center'>
	<td>
	<input class="w3-input w3-border" name='name' type="text" placeholder="Enter Name on Card" pattern="[a-zA-Z' ']*$" title="Please Enter Characters Only" style="width:60%">
	<br></td>
	</tr>
	<tr align='center'>
	<td>
	<input class="w3-input w3-border" name='card' type="text" placeholder="Enter Credit/Debit Card No" pattern="[0-9]{16}" title="Please Enter valid Credit card No" style="width:60%">
	<br></td>
	</tr>
	<tr align='center'>
	<td>
	<input class="w3-input w3-border" name='cvv' type="text" placeholder="Enter CVV No." pattern="[0-9]{3}" title="Enter 3 Digit CVV NO" style="width:60%">
	<br></td>
	</tr>
	<tr align='center'>
	<td>
	<?php
	$sql1="select sum(price) as total from temp where uid='$uid'";
	$res = $con->query($sql1);
	$row = $res->fetch_assoc();
	
	echo " <h5>Total Amount: ".$row['total']." </h5>";
	?><br></td>
	</tr>
	<tr align='center'>
	<td>
	 <button type='submit' name='done' class='w3-btn w3-padding w3-red w3-margin-bottom'>Done</button>
	<br></td>
	</tr>
	</table>
 </div>
 </center>
 
  <?php
	if(isset($_POST['proceed']))
	{
		echo "<script>document.getElementById('payment').style.display='block';</script>";
	}
		?>
 
 <?php
 if(isset($_POST['done']))
 {
	 $name1=$_POST['name'];
	 $card1=$_POST['card'];
	 $cvv1=$_POST['cvv'];
	 if(empty($name1)||empty($card1)||empty($cvv1))
	 {
		 echo "<script>alert(\"Fill all fields of payment details!!!\")</script>";
	 }
	 else
	 {
	
      $sSecretKey='steganography';
     $name=fnEncrypt($name1, $sSecretKey);
     $card=fnEncrypt($card1, $sSecretKey);
	 $cvv=fnEncrypt($cvv1, $sSecretKey);
	 

	
	 
	 $sql10="select name from temp where uid='$uid'";
	 $res10=$con->query($sql10);
	  $nm1="";
     while($row10=$res10->fetch_assoc())
    {
	$variableName = $row10['name'];
	$nm1.=$row10['name'].", \n";
    }
	 $ui=fnEncrypt($uid,$sSecretKey);
	 
	 
	 $stmt=$con->prepare("Insert into payment(uid,name,card,cvv,products,total) values (?,?,?,?,?,?)");
 $stmt->bind_param("ssssss", $uidd1,$namee1,$cardd1,$cvvv1,$products1,$total1);
 
  $uidd1=$ui;
  $namee1=$name;
  $cardd1=$card;
  $cvvv1=$cvv;
  $products1=$nm1;
  $total1=$row['total'];
  
$stmt->execute();
$stmt->close();
	 
	$sql1="Delete from temp where uid='$uid'";
	if(mysqli_query($con,$sql1))
 {
	 echo "<script>alert(\"Payment Done!!!\")</script>";
	echo "<script>location.replace('women.php')</script>" ;
 }
 
 }
 }
 ?>
 </form>
 </body>
 </html>
 <br>
 <br>
<footer class="w3-container w3-theme-d5" style='background-color:
#545454;width:100%'>
  <p align='right' style='color:white'> <a href="#" target="_blank">Cloth Online Shopping</a></p>
</footer>
