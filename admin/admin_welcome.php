<?php 
session_start();
?>

<!doctype html>
<html>
<head>
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
<div class="container-fluid">
      <?php
       include('admin_functions.php');
       nav3();
      ?>

   
      <div class="username" style="text-align:center;font-size:17px;color:black;font-weight:bold;" > <?php echo "Hey ";?><i class="fa fa-smile-o icon-large"></i> <span style="color:grey;"><?php echo $_SESSION['user']; ?></span></div>
     
      <div id="pageContent" >

       <div class="col-md-10 col-md-offset-2"> 
          
          
      
<?php 
   // $product_list="";
   $conn = mysqli_connect("localhost","root","");
   $db = mysqli_select_db($conn,'login');
   $sql= mysqli_query($conn,"SELECT * FROM product ");
   $product_count=mysqli_num_rows($sql);
   if($product_count > 0){
      while ($row=mysqli_fetch_array($sql)) {
        $product_list=array($id=$row["id"],
        $category=$row["category"],
        $sub_category=$row["sub_category"],
        $price=$row["price"],
        $details=$row["details"]);
       // $product_list =" $sub_category<br/> $price<br/> $details<br />";
        // echo "<br/>";echo "<br/>";
        ?>
        <div class="row" ">
        <div class="col-xs-12 col-md-12 col-lg-12 ">
        <div class="card" style="margin-top:30px;width:40%;">
        <img class="card-img-top" src="../images/menu-image-1.jpg" alt="image1" style="width:50%;">
         <div class="card-block">
           <p style="font-weight:bold;font-family:cursive;font-size:20px;text-align:center;margin-top:10px;color:grey;" class="card-text"> <?php echo $product_list[2]; ?>
           <p style="font-weight:bold;font-family:arial;text-align:center;" class="card-text"><i class="fa fa-inr"></i> <?php echo $product_list[3]; ?>
           <p style="font-weight:bold;font-family:arial;font-size:15px;font-family:cursive;margin-left:10px;" class="card-text"> <?php echo $product_list[4]; ?>
           <form id="form1" name="form1" action="admin_cart.php" method="POST">
             <input type="hidden" name="pid" id="pid" value="<?php echo $id; ?>" />
            <input style="margin-left:200px;margin-bottom:10px;font-style:arial;" type="submit" name="button" class="w3-btn w3-green" value="ADD TO FOOD CART"> 
            </form>
         </div>
        </div>
        </div>
        </div>
      
      <?php  
      }
   }
   else
     $product_list = "Nothing in the store";
?>



      
      
     

       <!-- <script type="text/javascript">
         "use strict";
         document.getElementById('frm').addEventListener('submit', estimateTotal);

         function estimateTotal(event){
          event.preventDefault();
         }
       </script> -->
</div>
  <div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1"> 
 <?php footer(); ?>
 </div> 
 </div>
</div>
</body>
</html>