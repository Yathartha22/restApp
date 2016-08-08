<!doctype html>
<html>
<head>
   <title>Log In</title>
   <link rel ="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
   <div id="big_wrapper">
   <div class="top-heading">
      <h1 style="margin-top:-20px">RESTAPP</h1>
     </div>
     <div id="nav">
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
     
    <div id="frm">
      <fieldset><legend style="font-family: arial; font-weight: bold;">SIGN-IN HERE</legend>
       <form action ="process.php" method="POST">
       <div  style="font-family:arial; padding: 20px 10px;font-weight: bold;">User<br><input type="text" placeholder="Username..." name="user" id="user"><br></div>
       <div  style="font-family:arial; padding: 0px 10px;font-weight: bold;">Password <br><input type="password" placeholder="Password..." name="pass" id="pass"><br></div>
       <input id="button" type="submit" name="submit"
       value="Sign in">
       <div class="signindown">NEW USER?? SIGN UP HERE<a style="margin:4px; color: grey;" href="signup.php">SIGN UP</a></div>
       </form>
    </div>
   
 </body>
</html>