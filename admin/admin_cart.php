<?php
session_start();
 ?>
<?php

$error='';
if (isset($_POST['submit'])) {
	if(empty($_POST['user']) || empty($_POST['pass'])){
		echo  "<script> alert('You Missed Something'); window.location.href='index.php'</script>";
	}
	else{
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$_SESSION['user']=$user;
		$_SESSION['pass']=$pass;

        if($user == "admin")
        {
        	$conn = mysqli_connect("localhost","root","");
        	$db = mysqli_select_db($conn,'login');
        	$query = mysqli_query($conn,"SELECT * FROM admins WHERE adminname = '$user' AND adminpass = '$pass' ");
        	$rows = mysqli_num_rows($query);
        	if($rows==1){
        		header("Location: adminpage.php");
        	}
        	else{	 
        		echo "<script> alert('Don\'t Try To Fool'); window.location.href='index.php'</script>";
        	}
        }
        else
        {
		$conn = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($conn,"login");
		$query = mysqli_query($conn,"SELECT * FROM user WHERE username= '$user' AND password='$pass'");
		$rows = mysqli_num_rows($query);
		if($rows==1){
			echo $user;
			header("location: ../cust_welcome.php");
		}
		else echo "<script> alert('Wrong Credentials'); window.location.href='index.php'</script>";
		
	   }
	   mysqli_close($conn);
	}
	
}
?>
<?php
  if (isset($_POST['index_to_remove'])&& $_POST['index_to_remove'] !="" ) {
  	$key_to_remove= $_POST['index_to_remove'];
  	if (count($_SESSION['cart_array'])<=1) {
  		unset($_SESSION['cart_array']);
  	}
  	else{
  		unset($_SESSION["cart_array"]["$key_to_remove"]);
  		sort($_SESSION['cart_array']);
  	}
  }
  ?>

<?php 
  if (isset($_POST['pid'])) {
  	$pid=$_POST['pid'];
  	$wasFound=false;
  	$i=0;

  	if(!isset($_SESSION["cart_array"])|| count($_SESSION["cart_array"])<1){
  		$_SESSION["cart_array"]= array(0 => array("item_id"=>$pid, "quantity"=>1));
  	}
  	else{
  		foreach ($_SESSION["cart_array"] as $each_item) {
  			$i++;
  		    while (list($key,$value)=each($each_item)) {
  		    	if ($key=="item_id" && $value==$pid) {
  		    		array_splice($_SESSION["cart_array"], $i-1, 1, array(array("item_id"=>$pid, "quantity"=>$each_item['quantity']+1)) );
  		    		$wasFound=true;
  		    	}
  		    	
  		    }
  		}
  		if ($wasFound==false) {
  			array_push($_SESSION["cart_array"], array("item_id"=>$pid, "quantity"=>1) );
  		}

  	}
  }
?>
<?php
   if (isset($_GET['cmd']) && $_GET['cmd']=="emptycart") {
   	unset($_SESSION["cart_array"]);
   }
 ?>
 <?php 
   $cartOutput="";
   if (!isset($_SESSION["cart_array"])|| count($_SESSION["cart_array"])<1 ) {
   	$cartOutput="<h2>YOUR CART IS EMPTY </h2>";
   	$grand_total=0;
   }
   else{
   	$i=0;
   	$grand_total=0;
   foreach ($_SESSION["cart_array"] as $each_item) {
   	
   	$item_id=$each_item['item_id'];
   	$conn = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($conn,"login");
   	$sql=mysqli_query($conn, "SELECT * FROM product WHERE  id='$item_id'");
   	while ($row= mysqli_fetch_array($sql)) {
   		$product_name= $row['sub_category'];
   		$price=$row['price'];
   	}
    $per_price=$price;
   	$price=$price* $each_item['quantity'];
   	$grand_total+= $price;
   	$cartOutput .= "<tr>";
   	$cartOutput .="<td>" .$each_item['item_id']. "</td>";
   	$cartOutput .="<td>" .$each_item['quantity']. "</td>";
   	$cartOutput .= "<td>Rs. " .$per_price. "</td>";
   	$cartOutput .="<td>" .$product_name. "</td>";
   	$cartOutput .="<td>Rs. " .$price. "</td>";
   	$cartOutput .= '<td> <form action="admin_cart.php" method="POST"><input name="deletBtn '.$item_id.'" type="submit" value="X" /><input name="index_to_remove" type="hidden" value=' .$i. ' /></form></td>';
    $cartOutput .= "</tr>";
    $i++;
   }
}
  ?>
<!doctype html>
<html>
<head>
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
    <?php 
           include('admin_functions.php');
           nav3();
     ?>

  <div class="row">
  <div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1">  
   <div class="username" style="text-align:center;font-size:17px;color:black;font-weight:bold;" > <?php echo "Hey ";?><i class="fa fa-smile-o icon-large"></i> <span style="color:grey;"><?php echo $_SESSION['user']; ?></span></div>  
     <div style="float:right"><a href="cust_cart.php?cmd=emptycart">CLICK HERE TO EMPTY YOUR CART</a></div>
     <!--  -->
     <br /><br />
<?php if (!(!isset($_SESSION["cart_array"])|| count($_SESSION["cart_array"])<1 )){ ?>     
<div style="margin-top:30px" class="table">
 <table class="table table-hover table-striped">
  <thead>
   <tr>
    <th>#</th>
    <th>Quantity</th>
    <th>Price </th>
    <th>Item Name</th>
    <th>Total Price</th>
    <th>Remove Item</th>
   </tr>
  </thead>

  <tbody style="font-weight:bold;font-family:cursive;">
   <?php  echo $cartOutput; ?>
  </tbody>
  
 </table>
 </div>
 <div class="container-fluid">
  <div class="row">
   <div class="col-xs-12 col-xs-offset-1 col-md-12 col-md-offset-9">
  <div style="margin-top:10px;font-weight:bold;"> <p>Grand Total <i class="fa fa-inr"></i><?php echo " " .$grand_total; "</h6>"?></p>
 </div>
 </div>
 </div>
 <div class="row">
 <div class="col-xs-12 col-xs-offset-1 col-md-12 col-md-offset-9">
 <form action="#" method="POST">
 <input type="submit" class="w3-btn w3-black" value="Place Order"  >
 </form>
 </div>
 </div>
 </div>
 </div>
 </div>
 <?php
}
else echo "<h2>YOUR FOOD CART IS EMPTY</h2>";
?>  
 <div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1"> 
 <?php footer(); ?>
 </div> 
 
    </div>
  </div>
  </div>

  </body>

</html>