<?php
  if(isset($_POST['submit'])){
	$grand_total=$_POST['g_total'];
		
	
	$conn = mysqli_connect("localhost","root","");
     $db = mysqli_select_db($conn,'login');
     $sql2=mysqli_query($conn, "SELECT * FROM admins WHERE adminname='admin' ");
     if($sql2){
     	$row=mysqli_fetch_assoc($sql2);
        $sum= $row['sales'] + $grand_total;
     }
     
	$sql=mysqli_query($conn,"UPDATE admins SET sales= '$sum' WHERE adminname='admin' ");

 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Order Confirmation</title>
	    <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Your Cart</title>
       <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
       <link href="../w3css/w3.css" rel="stylesheet">
       <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="../style.css">
        <script src="../bootstrap/js/jquery.min.js"></script>
      <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
	  <div class="row">
	  	<div class="col-xs-12 col-xs-offset-3 col-md-12 col-xs-offset-3">
	  		<div class="card" style="width:50%;height:450px;">
	  			<div class="">
	  				<h4 style="background-color:black;">THANK YOU FOR YOUR ORDER</h4>
	  				 <h5 style="text-align:center; font-weight:bold;margin-top:50px;font-size:25px;">Order Number is: XXXXXXXXXXXXXXXXXX</h5>
	  				 <p style="text-align:center;margin-top:50px;font-weight:bold;font-size:25px;">Total Amount  <i class="fa fa-inr"></i> <?php echo $grand_total;?></p>
	  				<form>
	  				    <div class="col-xs-10 col-xs-offset-1 col-md-12 col-md-offset-8" style="margin-top:140px;">
	  					<input type="submit" name="submit" value="PROCEED TO PAY" class="w3-btn w3-green">
	  					</div>
	  					<div class="col-xs-10 col-xs-offset-0 col-md-12 col-md-offset-0 " style="margin-top:-38px;">
	  					<a href="cust_welcome.php" class="w3-btn w3-green"> << BACK TO MENU </a>
	  					</div>
	  				</form>

	  			</div>
	  		</div>
	  	</div>
	  </div>
</div>
</body>
</html>