<?php

include '../config-root.php';
include '../config-db.php';
session_start();
if(!isset($_SESSION["userid"])){
	//header("Location: ".$root);
}


?>
<html lang="en-US">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>Mobile Groomer</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet">
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<script src="../js/jquery.maskedinput.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webshim/1.15.10/dev/polyfiller.js"></script>
        <script type="text/javascript" src="../js/initialiseWebshim.js"></script>
		<script src="../js/addFields.js"></script>
		<script src="../js/login.js"></script>

	</head>
	<body>
		<?php include '../header.php';
		include '../register.php';
		include '../edit.php';
		include '../login.php';?>
		<div class="container">
			<h2>Book An Appointment</h2>
			<form id="form-appointment">
			  <div class="form-group">
			    <label for="dog_name">Select Your Dog:</label>
				  <select class="form-control" id="dog_name" name="dog_name">
				  <?php 
				  	$sql_select_user="Select * from dog_details where userId='".$_SESSION["userid"]."'";
					$res_select_user=mysqli_query($con,$sql_select_user);
					if(!$res_select_user){
						die("Error: ".mysqli_error($con));
					}
					while($row_select_user=mysqli_fetch_array($res_select_user,MYSQLI_ASSOC)){ ?>
						<option value="<?php echo $row_select_user['id']?>" id="<?php echo $row_select_user['id']?>"><?php echo $row_select_user['dog_name']?></option>

					<?php }

				  ?>
				  </select>
			  </div>
			  <div class="form-group">
			    <?php 
			    	
			        

			    function creatTimeDropdown($row){
			    	// 0 - canceled
			    	// 1 - active
			    	// 2 - done
			    	$hours = $minutes = $ampm = $optString='';
			        $i=0;
			        for( $i = 540; $i <= 1260; $i += 90){
			        			$flag=0;
			                    $hours = floor($i / 60);
			                    $minutes = $i % 60;
			                    if ($minutes < 10){
			                        $minutes = '0' . $minutes; // adding leading zero
			                    }
			                    $ampm = $hours % 24 < 12 ? 'AM' : 'PM';
			                    $hours = $hours % 12;
			                    if ($hours === 0){
			                        $hours = 12;
			                    }



			                    $hours_next = floor(($i+90) / 60);
			                    $minutes_next = ($i+90) % 60;
			                    if ($minutes_next < 10){
			                        $minutes_next = '0' . $minutes_next; // adding leading zero
			                    }
			                    $ampm_next = $hours_next % 24 < 12 ? 'AM' : 'PM';
			                    $hours_next = $hours_next % 12;
			                    if ($hours_next === 0){
			                        $hours_next = 12;
			                    }

			                    $text =$hours.':'.$minutes.' '.$ampm." - ".$hours_next.':'.$minutes_next.' '.$ampm_next ;
			                    
			                    	for($j=0;$j<sizeof($row);$j++){
			                    		if($row[$j]==$text){
			                    			$flag=1;
			                    			break;
			                    		}
			                    	}
			                    	if($flag!=1)
			                    		$optString .='<option value="'.$text.'">'.$text.'</option>';



			        }
			        return $optString;

			    } ?>
			    <label for="dog_name">Select Your Time Slot:</label>
			    <select class="form-control" id="time_slot" name="time_slot">
			    	<?php 

			    	$sql="Select `timeSlot` from bookings where `status` = 1 ";
					$res=mysqli_query($con,$sql);
					if(!$res){
						die("Error!");
					}
					$row=mysqli_fetch_array($res,MYSQLI_NUM);	


			    	echo creatTimeDropdown($row);?>
				</select>
			  </div>
			  <div class="form-group">
			  	<label for="dog_name">Select the Grooming Option:</label>
			  		<select class="form-control" id="type" name="type">
			    		<option value="wash">Wash Only</option>
			    		<option value="wash_nail">Wash and Nail Clipping</option>
			    		<option value="delux">Delux Clipping</option>
					</select>
			   </div>	
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
			<hr>
			<h2>Previous Appointments</h2>
			<div class="row" style="margin:0px;">
				<div class="row">
					<div class="col-sm-1"><b>Sr No.</b></div>
					<div class="col-sm-2"><b>Appointment Id</b></div>
					<div class="col-sm-1"><b>Dog</b></div>
					<div class="col-sm-2"><b>Time Slot</b></div>
					<div class="col-sm-1"><b>Grooming Type</b></div>
					<div class="col-sm-1"><b>Status</b></div>
					<div class="col-sm-2"></div>
					<div class="col-sm-2"></div>
				</div>
				<?php 
			    	$sql_get_details="Select bookings.id as id,bookings.`userId` as userId,`dogId`,`timeSlot`,`groomingType`,`status`, `dog_name`,`dog_dob`,`dog_breed` from bookings inner join dog_details on bookings.dogId=dog_details.id where bookings.userId =".$_SESSION['userid'];
					$res_get_details=mysqli_query($con,$sql_get_details);
					if(!$res){
						die("Error!");
					}
					while($row_get_details=mysqli_fetch_array($res_get_details,MYSQLI_ASSOC)){
						$i=1;	
						?>
						<div class="row">
							<div class="col-sm-1"><?php echo $i;?></div>
							<div class="col-sm-2"><?php echo $row_get_details['id'];?></div>
							<div class="col-sm-1"><?php echo $row_get_details['dog_name'];?></div>
							<div class="col-sm-2"><?php echo $row_get_details['timeSlot'];?></div>
							<div class="col-sm-1"><?php echo $row_get_details['groomingType'];?></div>
							<div class="col-sm-1"><?php if($row_get_details['status']==1) echo "Active"; else if($row_get_details['status']==2) echo "Completed"; else if($row_get_details['status']==0) echo "Cancelled"; ?></div>
							<div class="col-sm-2"><?php if($row_get_details['status']==1) { ?> <button class="button" onclick="cancelAppointment('<?php echo $row_get_details['id'];?>')">Cancel Appointment</button><?php }?></div>
							<div class="col-sm-2"><?php if($row_get_details['status']==1) { ?> <a href="../edit-appointment/?id=<?php echo $row_get_details['id'];?>"><button class="button" >Edit Appointment</button></a><?php }?></div>
						</div>
					
					<?php 
						$i++;
						}	

				?>
			</div>




		</div>
		<p>&nbsp;</p>
		</div>
		<p>&nbsp;</p>
		<?php include '../footer.php';?>
	</body>
</html>	