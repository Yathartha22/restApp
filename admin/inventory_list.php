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
<?php
  if (isset($_POST['submit1'])) {

    $conn = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($conn,'login');
    $productname=mysqli_real_escape_string($conn,$_POST['mel']);
    $productprice=mysqli_real_escape_string($conn ,$_POST['productprice']);
    $productdetails=mysqli_real_escape_string($conn ,$_POST['productdetails']);
    $productcategory=mysqli_real_escape_string($conn,$_POST['sel']);
    $sql=mysqli_query($conn,"SELECT id FROM product WHERE sub_category='$productname' ");
    $productmatch= mysqli_num_rows($sql);
    if ($productmatch>0) {
      echo "<script>alert('You are trying to add duplicate items'); window.location.href='inventory_list.php'</script>";
    }
    else{
    $sql2=mysqli_query($conn,"INSERT INTO product(category,sub_category, price, details) VALUES('$productcategory', '$productname', '$productprice', '$productdetails') ");
   }
  }
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Inventory List</title>
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
<div class="container-fluid">
   <?php
     include('admin_functions.php');
     nav3();
     ?> 
 <div class="row">
  <div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1"> 
   <div class="username" style="text-align:center;font-size:17px;color:black;font-weight:bold;" > <?php echo "Hey ";?><i class="fa fa-smile-o icon-large"></i> <span style="color:grey;"><?php echo $_SESSION['user']; ?></span></div>
    <div style="float:right;"><a style="color:black;font-weight:bold;font-family:arial;" href="inventory_list.php#inventoryForm">+ ADD NEW ITEMS</a></div> 
    <a name="inventoryForm" id="inventoryForm"></a>
    <h3>Inventory Form</h3>
    <form action="inventory_list.php" method="POST">
    <div class="container">
     <div class="table" style="margin-top:45px;">
     <table class="table table-hover">
     <tbody>
     <tr>
       <td>Category</td>
       <td>
        <div class="form-group" >
          <select class="form-control"  name="sel" id="sel" >
            <option>Indian Cuisine</option>
            <option>Chinese Cuisine</option>
            <option>Thai Cuisine</option>
          </select>
        </div>
       </td>
       </tr>
       <tr>
       <td>Sub Category</td>
       <td>
         <div class="form-group" ">
          <select class="form-control" name="mel" id="mel">
            <option>Roti</option>
            <option>Mix Veg</option>
            <option>Shahi Paneer</option>
            <option>Panner Pasanda</option>
            <option>Biryani</option>
            <option>Chicken Tikka</option>
            <option>Chicken Paneer</option> 
            <option>Chicken Butter masala</option>          
          </select>
        </div>
       </td>
       </tr>
       <tr>
        <td>Product Price</td>
       <td> 
       <div class="form-group">
        <input type="text" class="form-control" name="productprice" id="productprice" placeholder="Rs. ">
        </div>
       </td>
       </tr>
        <tr>
        <td>Product Details</td>
       <td> 
        <div class="form-group">
        <input type="text" class="form-control" name="productdetails" id="productdetails" placeholder="Item Description">
        </div>
       </td>
       </tr>
     </tbody>
     </table>
     </div>
     </div>
     
     <button type="submit" name="submit1" class="btn btn-primary" id style="float:right;">ADD ITEMS</button>
     </form>
    </div>
   </div>
   </div>
    <div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1"> 
 <?php footer(); ?>
 </div> 
</body>
</html>