<?php
	error_reporting(0);
	session_start();
	include 'config-db.php';
	if(isset($_POST['dog_name']) && isset($_POST['time_slot']) && $_POST['type']){
		$sql_select_user="INSERT INTO bookings(`userId`,`dogId`,`timeSlot`,`groomingType`) VALUES('".$_SESSION['userid']."','".$_POST['dog_name']."','".$_POST['time_slot']."','".$_POST['type']."')";
		$res_select_user=mysqli_query($con,$sql_select_user);
		if(!$res_select_user){
			$arr = array ('success'=>'0','error1'=>mysqli_error($con).$sql_select_user);
			echo json_encode($arr);	
			die();
		}
		else{
				$id=mysqli_insert_id($con);
				$arr = array ('success'=>'1','msg'=>"Appointment has been scheduled! Your appointment id is ".$id);
				echo json_encode($arr);	
		}
	}
	else{
		$arr = array ('success'=>'0','error'=>"Please enter all the required fields.");
		echo json_encode($arr);
	}
?>				