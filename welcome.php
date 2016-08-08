<!doctype html>
<html>
<head>
     <title>Welcome</title>
     <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="big_wrapper">
     <div id="nav">
       <ul>
         <li><a href="http://localhost/project2/index.php">HOME</a></li>
         <li><a href="#">MENU</a></li>
         <li style="float:right"><a class="active1" href="#">ABOUT</a></li>
         <li><a href="#">BLOG</a></li>
       </ul>
     </div>
     
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
     </div>
     </form>

</body>
</html>