<?php
$error='';
if (isset($_POST['submit'])) {
	if(empty($_POST['user']) || empty($_POST['pass'])){
		echo  "You missed something";
	}
	else{
		$user = $_POST['user'];
		$pass = $_POST['pass'];
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
        		echo "Don't try to fool";
        	}
        }
        else
        {
		$conn = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($conn,"login");
		$query = mysqli_query($conn,"SELECT * FROM user WHERE username= '$user' AND password='$pass'");
		$rows = mysqli_num_rows($query);
		if($rows==1){
			header("Location: welcome.php");
		}
		else{
			echo "Username or password invalid";
		}
		
	   }
	   mysqli_close($conn);
	}
	# code...
}
?>