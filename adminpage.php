<!doctype html>
<html>
<head>
     <title>ADMIN'S PAGE</title>
     <link rel="stylesheet" type=text/css href="style.css">
</head>
   <body>
      <div id="admin">
           <fieldset><legend>CHECK SALES</legend></fieldset>
           <form method="POST">
           <input id="button" type="submit" name="submit" value="Check Sales">
           </form>
      </div>
      <div id="show-sales">
      <?php 
      if (isset($_POST['submit'])) {
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