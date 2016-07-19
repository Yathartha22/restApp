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
       <input type="checkbox" name="check_list[]" value="100"><label>ChickenRice Rs.100</label>
       <input type="checkbox" name="check_list[]" value="300"><label>Gulabjamun Rs.300</label>
       <input type="submit" name='submit' value="Submit">   
     </div>
</body>
</html>