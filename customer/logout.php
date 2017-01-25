<?php
  session_start();
  ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Log Out</title>
 	 <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link href="../w3css/w3.css" rel="stylesheet">
     <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="../style.css">
      <script src="../bootstrap/js/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
 </head>
 <body>

    <?php 
         include('cust_functions.php');
         nav3();
          unset($_SESSION['user']);
          session_unset();
          session_destroy();
           login_modal(); 
           signup_modal(); 
    ?>
     <div class="container-fluid">
     <div class="row">
     <div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1">
     <h3 style="text-align:center; font-weight: bold;" >SUCCESSFULLY LOGGED OUT</h3>
     <div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-5 ">
     <button id="myBtn" type="button" class="btn btn-link" style=" font-weight: bold;color:grey;cursor:pointer;">LOGIN AGAIN</button> </div>
     <div class="col-xs-9 col-xs-offset-0 col-md-7 col-md-offset-2"><h5 style="text-align:center;margin-left:35px; font-weight: bold;color: black;">OR</h5></div>
     <div class="col-xs-10 col-xs-offset-2 col-md-12 col-md-offset-5">
     <button id="myBtn2" type="button" class="btn btn-link" style=" margin-top:0px; ;font-weight: bold;color:grey;cursor:pointer;">SIGN UP</button> </div>
     
     
     </div>
    </div>
    <div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1">
    <?php footer(); 
    ?> 
    </div>
    </div>
 </body>
 </html