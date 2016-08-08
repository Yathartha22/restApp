<!doctype html>
<html>
<head>
     <title>Welcome</title>
     <link rel="stylesheet" type="text/css" href="style.css">
     
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
          <div class="menu-content fadee">
            <a href="#">Indian Cuisine</a>
            <a href="#">South Indian Cuisine</a>
            <a href="#">Italian Cuisine</a>
          </div>
         </li>
         <li style="float:right"><a class="active1" href="#">ABOUT</a></li>
         <li><a href="http://yaj22.wordpress.com">BLOG</a></li>
       </ul>
     </div>
    
     <div class="slideshow">
  <img class="mySlides fade" src="images/1.jpg" style="width:900px; height:300px; border-radius:4px;">
  <img class="mySlides fade" src="images/2.jpg" style="width:900px; height:300px; border-radius:4px;">
  <img class="mySlides fade" src="images/3.jpg" style="width:900px; height:300px; border-radius:4px;">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;

    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 5000); 
}
</script>

   
   
     <div id=sign>
     <li style="float:right; margin-top: -300px;margin-right: -5px;"><a class=signup href="signup.php">SIGN UP</a></li>
     </div>
     <div id=login>
     <li style="float:right; margin-top:-360px; margin-right: -2px;"><a class=signin href="login.php">SIGN IN</a></li>
     </div>

    <div class="content">
    <section id="main-section">
      
     
     <aside class="sidebar">
       <h3></h3>
     </aside>
    </section>
    </div>
    <footer>
      <div class="footer">
        <p>CopyRight@2016 RestApp</p>
      </div>
    </footer>
    
  </div>
</body>
</html>