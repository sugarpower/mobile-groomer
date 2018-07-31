<?php
	error_reporting(0);
	include 'config-db.php';
	if(isset($_POST['login_email']) && isset($_POST['login_pwd'])){
		$sql_select_user="Select * from users where email='".$_POST['login_email']."'";
		$res_select_user=mysqli_query($con,$sql_select_user);
		if(!$res_select_user){
			die("Error: ".mysqli_error());
		}
		else{
			if(mysqli_num_rows($res_select_user)>0){
				$row_select_user=mysqli_fetch_array($res_select_user,MYSQLI_ASSOC);
				if(trim(md5($_POST['login_pwd']))==$row_select_user['password']){
					session_start();
					$_SESSION['userid']=$row_select_user['id'];
					$arr = array ('success'=>'1','userid'=>$row_select_user['id'],'name'=>$row_select_user['name'],'email'=>$row_select_user['email']);
					echo json_encode($arr);
				}
				else{
					$arr = array ('success'=>'0','error'=>'Invalid   email or password.');
					echo json_encode($arr);
				}	
					
					
			}
			else{
					$arr = array ('success'=>'0','error'=>'Invalid  email or password.');
					echo json_encode($arr);
				}	
		}
	}
	else{
		$arr = array ('success'=>'0','error'=>"Please enter all the required fields.");
		echo json_encode($arr);
	}
?>				