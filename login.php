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
   <div id="big_wrapper">
   <div class="top-heading">
       <h1 style="margin-top:10px; font-weight:bold;">REST<span style="color:grey">APP</span></h1>
       </div>
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
       <div>  
       <ul class="nav navbar-nav">
         <li><a style="font-weight: bold;" href="index.php">HOME</a></li>
         <li><a style="font-weight: bold;" href="#">MENU</a></li>
         <li style="float:right"><a style="font-weight: bold;" href="#">ABOUT</a></li>
         <li><a style="font-weight: bold;" href="#">BLOG</a></li>
       </ul>
       <ul class="nav navbar-nav navbar-right">
         <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
         
       </ul>
       </div>
      </div>
     </nav>
     
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