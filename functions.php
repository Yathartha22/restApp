<?php
function nav(){
?>
   <div class="row"> <div class="col-md-10 col-md-offset-1">
       <h1 style="margin-top:-10px; font-weight:bold; font-family:verdana;">REST<span style="color:grey">APP</span></h1>
</div>
</div>  
<div class="row">
 <div class="col-md-10 col-md-offset-1">
      <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li style="font-weight:bold; font-style: tahoma;"><a href="index.php">HOME</a></li>
        <li style="font-weight:bold; font-style: tahoma;"><a href="#">MENU</a></li>
        <li style="font-weight:bold; font-style: tahoma;"><a href="http://yaj22.wordpress.com">BLOG</a></li>
        <li style="font-weight:bold; font-style: tahoma;"><a href="#">ABOUT</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>  Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>  Login</a></li>
      </ul>
    </div>
  </div>
     
   </nav> 
   </div>
   </div> 
<?php
}
