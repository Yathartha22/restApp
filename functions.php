<?php
function nav(){
?> 
  
   <div class="row"> <div class="col-xs-10 col-xs-offset-1">
       <h1 style="margin-top:-10px; font-weight:bold; font-family:verdana;">REST<span style="color:grey">APP</span></h1>
</div>
</div>  
<div class="row" ">
 <div class="col-xs-10 col-xs-offset-1" >
  <nav class="navbar navbar-inverse">
  <div class="container-fluid" >
  
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav"  >
        <li style="font-weight:bold; font-style: tahoma;"><a href="index.php">HOME</a></li>
        <li style="font-weight:bold; font-style: tahoma; cursor:pointer;" onclick="openNav()"><a>MENU</a></li>
        <li style="font-weight:bold; font-style: tahoma;"><a href="http://yaj22.wordpress.com">BLOG</a></li>
        <li style="font-weight:bold; font-style: tahoma;"><a href="#">ABOUT</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li><a style=" font-weight: bold;  color:grey;cursor:pointer;" id="myBtn">Login <span class="glyphicon glyphicon-log-in"></span></a></li>
        <li><a style=" font-weight: bold;color:grey;cursor:pointer;" id="myBtn2">Sign Up <span class="glyphicon glyphicon-user"></span></a></li>
      </ul> 
    </div>
  </div>
     
   </nav> 
   </div>
   </div> 
   
<?php
}
function nav2(){
?>
   <div class="row"> <div class="col-xs-10 col-xs-offset-1">

  <!-- <h4 style="float:right; margin-right:240px;" >Hello</h4> -->
       
       <h1 style="margin-top:-10px; font-weight:bold; font-family:verdana;">REST<span style="color:grey">APP</span></h1>

</div>
</div>  
<div class="row">
 <div class="col-xs-10 col-xs-offset-1">
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
      <li><a class="logout" href="logout.php" style=" font-weight: bold;color:grey;cursor:pointer;">LOG OUT</a></li> 
      </ul>
      </div>
    
  </div>
     
   </nav> 
   </div>
   </div>
<?php
}
function nav3(){
?>
  <div class="row"> <div class="col-xs-10 col-xs-offset-1">

  <!-- <h4 style="float:right; margin-right:240px;" >Hello</h4> -->
  
       <h1 style="margin-top:-10px; font-weight:bold; font-family:verdana;">REST<span style="color:grey">APP</span></h1>

</div>
</div>  
<div class="row">
 <div class="col-xs-10 col-xs-offset-1">
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
        <li style="font-weight:bold; font-style: tahoma;"><a href="../index.php">HOME</a></li>
        <li style="font-weight:bold; font-style: tahoma;"><a href="#">MENU</a></li>
        <li style="font-weight:bold; font-style: tahoma;"><a href="http://yaj22.wordpress.com">BLOG</a></li>
        <li style="font-weight:bold; font-style: tahoma;"><a href="#">ABOUT</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a class="inventory_list" href="inventory_list.php" style=" font-weight: bold;color:grey;cursor:pointer;">Inventory List</a></li>
      <li><a class="logout" href="../customer/logout.php" style=" font-weight: bold;color:grey;cursor:pointer;">LOG OUT</a></li>

      </ul>
    </div>
  </div>
     
   </nav>
   </div>
   </div>

<?php
}  
function login_modal(){
?>
<div class="container">
  
  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->
  <div class="modal fade " id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="customer/process.php" method="POST">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="user" id="usrname" placeholder="Enter User Name" autofocus="">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" name="pass" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" style="background-color:grey; border-color:grey" name="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" style="background-color:grey; border-color:grey;" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>
<?php
}
function signup_modal(){
?>
<div class="modal fade " id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span>  Sign Up</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="customer/process2.php" method="POST">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="user" id="usrname" placeholder="Enter User Name" autofocus="">
            </div>
            <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-envelope"></span> Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" name="pass" class="form-control" id="psw" placeholder="Enter password">
            </div>
            
              <button type="submit" style="background-color:grey; border-color:grey" name="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Sign Up</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" style="background-color:grey; border-color:grey;" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

        </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
    $("#myBtn2").click(function(){
        $("#myModal2").modal();
    });
});
</script>
<?php
}
function footer(){
 ?>
 <div class="row">
<div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1">
<div style="margin-top:230px;" class="w3-container w3-teal w3-padding-64 w3-center w3-black w3-xlarge">
  <a href="#"><i class="fa fa-facebook-official"></i></a>
  <a href="#"><i class="fa fa-pinterest-p"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-flickr"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <p class="w3-medium " style="font-weight:bold;" >
 <?php echo date("M Y") ?> <i class="fa fa-copyright"></i> RestApp</p>
</div>

</div>

</div>
<?php
} 