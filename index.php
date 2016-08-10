<!doctype html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Welcome</title>
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="style.css">
      <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
     
<!--      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/css/jquery.min.js"></script>
  <script src="bootstrap/css/bootstrap.min.js"></script>  -->
</head>

<body>
   <div id="big_wrapper">
    
<div class="top-heading">
       <h1 style="margin-top:10px; font-weight:bold;">REST<span style="color:grey">APP</span></h1>
  </div>
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
       <ul class="nav navbar-nav">
         <li><a style="font-weight: bold;" href="index.php">HOME</a></li>
         <li><a style="font-weight: bold;" href="#">MENU</a></li>
         <li style="float:right"><a style="font-weight: bold;" href="#">ABOUT</a></li>
         <li><a style="font-weight: bold;" href="#">BLOG</a></li>
       </ul>
       <ul class="nav navbar-nav navbar-right">
         <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
         <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log-in</a></li>
       </ul>
       
       </div>
     
     </nav>
     
    
<!--    
    
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
-->
<div class="slideshow">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/1.jpg" style="width:1000px; height: 400px;" >
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>

    <div class="item">
      <img  src="images/2.jpg" style="width:1000px; height: 400px;">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>

    <div class="item">
      <img src="images/3.jpg" style="width:1000px; height: 400px;">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>
 </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
    <footer>
      <div class="footer">
        <p>CopyRight@2016 RestApp</p>
      </div>
    </footer>

    
  </div>

</body>
</html>