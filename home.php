<?php 
include('dbcon.php');
include('session.php'); 

$result=mysqli_query($con, "select * from users where user_id='$session_id' and role='$role'")or die('Error In Session');

//$result2=mysqli_query($con, "select id from login where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);



 ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="form-wrapper"> 
    <center><h3>Welcome: <?php echo $row['username']; ?> </h3>
	<?php echo "user id is :  "  . $row['user_id']; ?><br><br>
	
	<?php echo "user role is :  "  . $row['role']; ?><br><br>
	
	
	
	
	</center>
	 <div class="reminder">
    <p><a href="logout.php">Log out</a></p>
  </div>
</div>

</body>
</html>