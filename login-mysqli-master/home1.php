<?php 
include('dbcon.php');
include('session.php'); 
 

$result=mysqli_query($con, "select * from login where user_id='$session_id'")or die('Error In Session');

$row=mysqli_fetch_array($result);


 ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="form-wrapper"> 
    <center><h3>Welcome: <?php echo $row['username']; ?> </h3></center>
	<?php echo $row['role'];
			echo $row['user_id'];
			if($row['role']=='staff'){
				
			include_once('dbcon.php')	;
			
			$result1 = mysqli_query($con,"select * from master_staff where staff_id='$session_id'")or die('Error In Session');
			
			$datas = array();
			if(mysqli_num_rows($result1)>0){
					while($row = mysqli_fetch_assoc($result1)){
					$datas[] = $row;
			
	$json = $datas;
	$d = json_encode($json);
	
	print_r($d);
			}
			}
			}
	
			if($row['role']=='trainer'){
               include_once('dbcon.php')	;
			$result3 = mysqli_query($con,"select * from master_trainer where trainer_id= '$session_id'")or die('Error In Session');
			echo $row['role'];
			//echo $row['trainer_id'];
			/*$datas_one = array($result2);
			 
			print_r($datas_one);*/
			$datas_one = array();
			if(mysqli_num_rows($result3)>0){
					while($row= mysqli_fetch_assoc($result3)){
					$datas_one[] = $row;
					}
		$json_one = $datas_one;
		$d_one= json_encode($json_one);
		print_r($d_one);

			}
			}		
		
	?>
	 <div class="reminder">
    <p><a href="logout.php">Log out</a></p>
  </div>
</div>

</body>
</html>