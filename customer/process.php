<?php
session_start();
$error='';
if (isset($_POST['submit'])) {
	if(empty($_POST['user']) || empty($_POST['pass'])){
		echo  "<script> alert('You Missed Something'); window.location.href='../index.php'</script>";
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
        		header("Location: ../admin/admin_index.php");
        	}
        	else{	 
        		echo "<script> alert('Don\'t Try To Fool'); window.location.href='../index.php'</script>";
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
			header("location: ../customer/cust_index.php");
		}
		else echo "<script> alert('Wrong Credentials'); window.location.href='../index.php'</script>";
		
	   }
	   mysqli_close($conn);
	}
	# code...
}
?>

 
