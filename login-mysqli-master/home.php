<?php 
include('dbcon.php');
include('session.php'); 

$result=mysqli_query($con, "select * from login where user_id='$session_id' and role='$role'")or die('Error In Session');
//$result=mysqli_query($con, "select * from login where username = '$username' ")or die('Error In Session');

//$result2=mysqli_query($con, "select id from login where user_id='$session_id'")or die('Error In Session');
			/*	if('$role' == 'staff'){
					$sql_query1= mysqli_query($con, "select * from master_staff")or die('Error In Session');
					$row1=mysqli_fetch_array($sql_query1);					
				
					if('$role'=='trainer'){
				$sql_query2=$sql_query1= mysqli_query($con, "select * from master_trainer")or die('Error In Session');
				$row2=mysqli_fetch_array($sql_query2);
				echo $row2['username'];
					 
						
										}
									}*/
$row=mysqli_fetch_array($result);
/*$row1=mysqli_fetch_array($sql_query1);
$row2=mysqli_fetch_array($sql_query2);
*/





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