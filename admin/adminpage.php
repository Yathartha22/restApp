<?php 
session_start();
if (isset($_POST['submit'])) {
  if(empty($_POST['user']) || empty($_POST['pass'])){
    echo  "<script> alert('You Missed Something'); window.location.href='../index.php'</script>";
   }
          $_SESSION['user']=$_POST['user'];
          $_SESSION['pass']=$_POST['pass'];
          $conn = mysqli_connect("localhost","root","");
          $db = mysqli_select_db($conn,'login');
          $query = mysqli_query($conn,"SELECT * FROM admins WHERE adminname = '$user' AND adminpass = '$pass' ");
          $rows = mysqli_num_rows($query);
          if($rows==1){
            header("Location: ../admin/adminpage.php");
          }
          else{  
            echo "<script> alert('Don\'t Try To Fool'); window.location.href='../index.php'</script>";
          }
}
?>

<!doctype html>
<html>
<head>
     <title>ADMIN'S PAGE</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Welcome</title>
     <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="../style.css">
      <script src="../bootstrap/js/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>
   <body>
       <?php
        include('admin_functions.php');
        nav3();
        ?>
        <div class="username" style="text-align:center; margin-bottom: 15px; " > <?php echo "Welcome "; echo $_SESSION['user']; ?></div>
      <div id="admin">
           <fieldset><legend>CHECK SALES</legend>
           <form method="POST">
           <input id="button" type="submit" name="submit1" value="Check Sales">
           </form>
           </fieldset>
      </div>
      <div id="show-sales">
      <?php 
      if (isset($_POST['submit1'])) {
      	$conn =mysqli_connect("localhost","root",'');
      	$db = mysqli_select_db($conn,'login');
      	$query=mysqli_query($conn,"SELECT * FROM admins where adminname='admin'");
        if($query){
        	$row=mysqli_fetch_assoc($query);
        	echo $row['sales'];
        }
      }
      ?>
      </div>
   </body>
</html>