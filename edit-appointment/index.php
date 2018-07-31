<?php
error_reporting(0);
include '../config-root.php';
include '../config-db.php';
session_start();
if(!isset($_SESSION["userid"])){
	//header("Location: ".$root);
}


$sql_bookings="Select * from bookings where id='".$_GET["id"]."'";
$res_bookings=mysqli_query($con,$sql_bookings);
if(!$res_bookings){
die("Error: ".mysqli_error($con));
}
$row_bookings=mysqli_fetch_array($res_bookings,MYSQLI_ASSOC);
				 








?>
<html lang="en-US">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>Mobile Groomer</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<script src="../js/jquery.maskedinput.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webshim/1.15.10/dev/polyfiller.js"></script>
		<link href="../css/style.css" rel="stylesheet">
		
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
			<h2>Edit An Appointment</h2>
			<form id="form-appointment-edit">
			  <div class="form-group">
			    <input type="hidden" value="<?php echo $_GET['id'];?>" id="appointment_id" name="appointment_id">	
			    <label for="dog_name">Select Your Dog:</label>
				  <select class="form-control" id="dog_name" name="dog_name">
				  <?php 
				  	$sql_select_user="Select * from dog_details where userId='".$_SESSION["userid"]."'";
					$res_select_user=mysqli_query($con,$sql_select_user);
					if(!$res_select_user){
						die("Error: ".mysqli_error($con));
					}
					while($row_select_user=mysqli_fetch_array($res_select_user,MYSQLI_ASSOC)){ ?>
						<option <?php if($row_bookings['dogId']==$row_select_user['id']) {?> selected <?php }?>         value="<?php echo $row_select_user['id']?>" id="<?php echo $row_select_user['id']?>"><?php echo $row_select_user['dog_name']?></option>

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
			                    	if($flag!=1){
			                    		if($row_bookings['timeSlot']==$text) { 
			                    			$optString .='<option selected value="'.$text.'">'.$text.'</option>';
										}
										else{
											$optString .='<option value="'.$text.'">'.$text.'</option>';
										}
									}
			                    		


			        }
			        return $optString;

			    } ?>
			    <label for="dog_name">Select Your Time Slot:</label>
			    <select class="form-control" id="time_slot" name="time_slot">
			    	<?php 

			    	$sql="Select `timeSlot` from bookings where `status` = 1 and `timeSlot`!='".$row_bookings['timeSlot']."' ";
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
			    		<option <?php if($row_bookings['groomingType']=="wash"){?> selected <?php } ?>   value="wash">Wash Only</option>
			    		<option <?php if($row_bookings['groomingType']=="wash_nail"){?> selected <?php } ?> value="wash_nail" >Wash and Nail Clipping</option>
			    		<option <?php if($row_bookings['groomingType']=="delux"){?> selected <?php } ?> value="delux">Delux Clipping</option>
					</select>
			   </div>	
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
			<hr>




		</div>
		<p>&nbsp;</p>
		</div>
		<p>&nbsp;</p>
		<?php include '../footer.php';?>
	</body>
</html>	