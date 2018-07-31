<?php
	error_reporting(0);
	include 'config-db.php';
	$sql="Update bookings SET status = 0 where id = '".$_POST['id']."'";
	$res=mysqli_query($con,$sql);
	if(!$res){
		die("Error: ".mysqli_error());
	}
	$arr = array ('success'=>'1','msg'=>'Appointment has been cancelled successfully');
	echo json_encode($arr);

?>				