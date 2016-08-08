<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="big_wrapper">
     <div id="nav">
     <div class="top-heading">
      <h1 style="margin-top:-20px">RESTAPP</h1>
     </div>
       <ul>
         <li><a href="index.php">HOME</a></li>
         <li class="menu"><a href="#">MENU</a>
         <div class="menu-content">
            <a href="#">Indian Cuisine</a>
            <a href="#">South Indian Cuisine</a>
            <a href="#">Italian Cuisine</a>
          </div>
          </li>
         <li style="float:right"><a class="active1" href="#">ABOUT</a></li>
         <li><a href="http://yaj22.wordpress.com">BLOG</a></li>
       </ul>
     </div>
    <div id=login>
     <li style="float:right;"><a class=signin href="login.php">SIGN IN</a></li>
     </div>
     
     <div id="frm">
       <fieldset><legend style="font-family: arial; font-weight: bold;">SIGN-UP</legend>
       <form method="POST" action="process2.php">
       <div style="font-family:arial; padding: 20px 10px;font-weight: bold;">Name <br><input type="text" placeholder="Username..." name="user" id="user"/><br></div>
       <div style="font-family:arial;  padding:0 0 10px 10px;font-weight: bold;"> Password<br> <input type="password" placeholder="Password..." name="pass" id="pass"><br></div>
       <div style="font-weight:bold;"><input id="button" type="submit" name="submit" value="Sign Up"></div>
       </form>
     </div>
</body>
</html>