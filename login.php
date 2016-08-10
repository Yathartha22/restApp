<!doctype html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Log In</title>
   <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link rel ="stylesheet" type="text/css" href="style.css">
   <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
 </head>
 <body>
   <?php include('functions.php');
   nav();
    ?>
<div class="form-style-8" style="margin-top:60px">
  <h2>Login to your account</h2>
  <form action="process.php" method="POST">
    <input type="text" name="user" id="user" placeholder="UserName" required="" autofocus="" />
    <input type="password" name="pass" id="pass" required="" placeholder="Password"/>
    <input type="email" name="email" placeholder="Email">
    <input  id="submit" type="submit" name="submit" value="Log In">

  </form>
</div>
  
 </body>
</html>