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
      <link href="../w3css/w3.css" rel="stylesheet">
     <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"> 
     <link rel="stylesheet" type="text/css" href="../style.css">
      <script src="../bootstrap/js/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>
   <body>
       <?php
        include('admin_functions.php');
        nav3();
        ?>
        <div class="username" style="text-align:center;font-size:17px;color:black;font-weight:bold;" > <?php echo "Hey ";?><i class="fa fa-smile-o icon-large"></i> <span style="color:grey;"><?php echo $_SESSION['user']; ?></span></div>
           
       </div>
      <div id="show-sales">
      <?php 
      	$conn2 =mysqli_connect("localhost","root",'');
      	$db2 = mysqli_select_db($conn2,'login');
      	$query2=mysqli_query($conn2,"SELECT * FROM admins where adminname='admin' ");
        if($query2){
        	$row2=mysqli_fetch_assoc($query2);
          $total_sales = $row2['sales'];
        }

        ?>
          
            <div class="row">
             <div class="col-xs-12 col-xs-offset-3 col-md-12 col-xs-offset-1">
             <div class="container-fluid">
              <div class="card" style="width:100%;height:300px;">
               <div class="">
                <h4 style="background-color:black;height:50px;">TOTAL SALES</h4>
                <p style="margin-top:30px;font-weight:bold;font-family:arial;font-size:25px;text-align:center;"><i class="fa fa-inr"></i> <?php echo $total_sales; ?></p>
               </div>
               </div>
             </div>

            </div>
            </div>

     </div>
        <div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1"> 
 <?php footer(); ?>
 </div>
    
   </body>

</html>