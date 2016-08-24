<?php 
session_start();
?>

<!doctype html>
<html>
<head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Welcome</title>
     <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
     <div class="col-xs-0 col-md-10 col-lg-10 col-xs-offset-2 col-md-offset-5 col-lg-offset-5">
      <div class="username"> <?php echo "Welcome "; echo $_SESSION['user']; ?></div>
     </div>
      <div id="pageContent" class="container-fluid">

       <div class="col-md-10 col-md-offset-2"> 
          
          
      
<?php 
   $product_list="";
   $conn = mysqli_connect("localhost","root","");
   $db = mysqli_select_db($conn,'login');
   $sql= mysqli_query($conn,"SELECT * FROM product ");
   $product_count=mysqli_num_rows($sql);
   if($product_count > 0){
      while ($row=mysqli_fetch_array($sql)) {
        $id=$row["id"];
        $category=$row["category"];
        $sub_category=$row["sub_category"];
        $price=$row["price"];
        $details=$row["details"];
        $product_list ="$id - $category<br/> $sub_category<br/> $price<br/> $details<br />";
        
        echo "<br/>";echo "<br/>";
        echo $product_list;
        echo "<br/>";echo "<br/>";
        ?>
      <form id="form1" name="form1" action="admin_cart.php" method="POST">
      <input type="hidden" name="pid" id="pid" value="<?php echo $id; ?>" />
      <input type="submit" name="button" id="button" value="ADD TO FOOD CART"> 
     </form>
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

      

     
     
  <footer>
      <div class="footer">
        <p>CopyRight@2016 RestApp</p>
      </div>
    </footer>
    </div>
</div>
</body>
</html>