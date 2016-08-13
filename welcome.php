<!doctype html>
<html>
<head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Welcome</title>
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="style.css">
     <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
   <?php
   include('functions.php');
   nav2();
   ?>
     
     <div id= "welcome">
     <fieldset class="group"><legend>Select your option</legend>
       <form action="menu.php" method="POST">
       <div class="checkbox">
       <input type="checkbox" name="check_list[]" value="100"><label>ChickenRice</label><labell>Rs.100</labell>
       <input type="checkbox" name="check_list[]" value="300"><label>Gulabjamun</label><labell>Rs.300</labell>
       <input type="checkbox" name="check_list[]" value="150"><label>Dal Makhani</label><labell>Rs.150</labell>
       <input type="checkbox" name="check_list[]" value="200"><label>Mix Veg</label><labell>Rs.200</labell>
       <input type="checkbox" name="check_list[]" value="250"><label>Panner Pasanda</label><labell>Rs.250</labell>
       <input type="checkbox" name="check_list[]" value="100"><label>Shahi Paneer </label><labell>Rs.100</labell>
       <input type="checkbox" name="check_list[]" value="175"><label>Shahi Pulao </label><labell>Rs.175</labell>
       <input type="checkbox" name="check_list[]" value="125"><label>Resturant Special</label><labell>Rs.125</labell>
       <input  type="submit" name='submit' value="Submit">  
       </fieldset> 
       </div>
       </form>
     </div>
     
     
     

</body>
</html>