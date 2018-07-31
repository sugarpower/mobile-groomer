<?php
	error_reporting(0);
	include 'config-db.php';
	if(isset($_POST['customer_name']) && isset($_POST['address']) && $_POST['email'] && $_POST['pwd'] && $_POST['mobile_number']){
		$sql_select_user="INSERT INTO users(`name`,`address`,`email`,`password`,`mobile_number`,`home_number`,`work_number`) VALUES('".$_POST['customer_name']."','".$_POST['address']."','".$_POST['email']."','".md5($_POST['pwd'])."','".$_POST['mobile_number']."','".$_POST['home_number']."','".$_POST['work_number']."')";
		$res_select_user=mysqli_query($con,$sql_select_user);
		if(!$res_select_user){
			$arr = array ('success'=>'0','error1'=>mysqli_error($con));
			echo json_encode($arr);	
			die();
		}
		else{
				
				$id=mysqli_insert_id($con);
				$count=$_POST['count'];

				for($i=1;$i<=$count;$i++){
					$sql_select_user="INSERT INTO dog_details(`userId`,`dog_name`,`dog_breed`,`dog_dob`) VALUES('".$id."','".$_POST['dog_name'.$i]."','".$_POST['dog_breed'.$i]."','".$_POST['dog_dob'.$i]."')";
					$res_select_user=mysqli_query($con,$sql_select_user);
					if(!$res_select_user){
						$arr = array ('success'=>'0','error2'=>mysqli_error($con));
						echo json_encode($arr);
						die();
					}
				}		
				session_start();
				$_SESSION['userid']=$id;
				$arr = array ('success'=>'1','userid'=>$id,'name'=>$_POST['customer_name'],'email'=>$_POST['email']);
				echo json_encode($arr);	
		}
	}
	else{
		$arr = array ('success'=>'0','error'=>"Please enter all the required fields.");
		echo json_encode($arr);
	}
?>				