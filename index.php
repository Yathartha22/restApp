<!doctype html>
<html>
<head>
     <title>Welcome</title>
     <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <div id="welcome">
       <form action="menu.php" method="POST">
       <label class="heading">Select your Option</label>
       <input type="checkbox" name="check_list[]" value="100"><label>ChickenRice</label>       <label>Rs.100</label>
       <input type="checkbox" name="check_list[]" value="300"><label>Gulabjamun</label>        <label>Rs.300</label>
       <input type="checkbox" name="check_list[]" value="150"><label>Dal Makhani</label>        <label>Rs.150</label>
       <input type="checkbox" name="check_list[]" value="200"><label>Mix Veg</label>            <label>Rs.200</label>
       <input type="checkbox" name="check_list[]" value="250"><label>Panner Pasanda</label>     <label>Rs.250</label>
       <input type="checkbox" name="check_list[]" value="100"><label>Shahi Paneer </label>      <label>Rs.100</label>
       <input type="checkbox" name="check_list[]" value="175"><label>Shahi Pulao </label>       <label>Rs.175</label>
       <input type="checkbox" name="check_list[]" value="125"><label>Resturant Special</label>  <label>Rs.125</label>
       <input type="submit" name='submit' value="Submit">   
     </div>
     
</body>
</html>