<!doctype html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Welcome</title>
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link href="w3css/w3.css" rel="stylesheet">
     <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    
     <link rel="stylesheet" type="text/css" href="style.css">
      <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
   document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
}
</script> 
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Indian</a>
  <a href="#">Chinese</a>
  <a href="#">Italian</a>
  <a href="#">Thai</a>
</div>
<div id="main">
<div class="container-fluid">   
<?php include('functions.php') ;
   nav();
?>
<?php 
login_modal();
?>
<?php
signup_modal();
?>


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

<div class="row">
 <div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1">
<div class="slideshow" style="margin-left:13px; margin-right:13px;" >
<div id="myCarousel" class="carousel slide" data-ride="carousel">
 
<!--   <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol> -->

  
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/1.jpg" style="width:100%; height: 400px; " >
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>

    <div class="item">
      <img  src="images/2.jpg" style="width:100%; height: 400px;">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>

    <div class="item">
      <img src="images/3.jpg" style="width:100%; height: 400px;">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>
 </div>

  
<!--   <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div> -->



 </div>
  </div>
   </div>
   </div>
<?php footer(); ?>
</div>
</div>
</div>
</div>
</body>
</html>

