<!doctype html>
<html>
<head>
    <title>MENU PAGE</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="menu">
<?php

if(isset($_POST['submit'])){
	if(!empty($_POST['check_list'])){
		$checked_count= count($_POST['check_list']);
      if($checked_count!=0)
        {
            echo "You have selected " .$checked_count. " item(s) </br>";
        $value=0;
        foreach ($_POST['check_list'] as $selected) {
        $value=$value+$selected;
        }
        echo "<p>TOTAL AMOUNT IS " .$value. " </p>";
        }
       else
       {
     }  
	}
}

    $ans=0; 
    $conn = mysqli_connect("localhost","root",'');
	  $db = mysqli_select_db($conn,"login");
    $query1 = mysqli_query($conn,"UPDATE user SET amount='$value' ");
    $query2 = mysqli_query($conn,"SELECT * FROM admins where adminname='admin' ");
    
    $row=mysqli_fetch_assoc($query2);
    $ans= $value + $row['sales'];
   # $x=(int)$query2;
    #$result=$x + $value;
    #$ans=(string)$result;
    $query3 = mysqli_query($conn,"UPDATE admins SET sales= '$ans' ");

?>
</div>
</body>
</html>
