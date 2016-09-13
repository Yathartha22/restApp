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
	
</div>
</body>
</html>