<?php error_reporting(0);
session_start();
include '../config-root.php';?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>Mobile Groomer-Features</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<script src="../js/jquery.maskedinput.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webshim/1.15.10/dev/polyfiller.js"></script>
        <script type="text/javascript" src="../js/initialiseWebshim.js"></script>
		<script src="../js/login.js"></script>
		<link href="../css/style.css" rel="stylesheet">
	</head>
	<body>
		<?php include '../header.php';
		include '../login.php';
		include '../register.php';
		?>
		<div class="container">
			
			<div class="row features-details">
				<div class="col-sm-8 ">
					<h3>Mobile Groomer</h3>
					<p>Now a days, an increasing number of people are starting to keep a pet as their companion, but pet owners may easily get sick because they are unhygienic. Some owners may help pets “take a shower”, however, it is hard without professional guidance. While for some people who have no time to go to pet shop, this project is quite suitable for them.
					The ‘Mobile Groomer’ project is a web based software which allows its users to register on the portal and make appointments for grooming their dogs. Users only need to register and provide some basic information like their address, dog’s breed, name and special requirements etc. With an easy to use user interface, users can enter all the information needed prior to the appointment and schedule the appointment for their preferred time, based on the availability. Users are also given an option to cancel and reschedule appointments. The portal displays the list containing the details of all the previous and upcoming bookings, to the groomer and also sends a reminder 24 hours prior to the appointment time. Appointments are scheduled in such a manner so as to reduce the groomer’s travel time.
 </p>
					<h4>Features</h4>
					<ul>
						<li>Customer Management System - This mainly includes the basic features for the user like registration, login and update & modify their profiles. During the time of registration, users need to provide information like client’s name, his/her address, contact information, details about the dog, like its breed, number of dogs, date of birth and special requirements etc.</li>
						<li>Appointment System - Customers can make, modify, cancel and reschedule the appointments using this system. They are given an option to select the dog from the list of dogs already available in the system, select the preferred 90 min time slot, and different grooming options like wash only, wash and nail clipping, deluxe clipping and provide special instructions etc.</li>
						<li>Reminder System- This system will give a reminder 24 hours prior to the appointment time. The reminder can be via either email or text message or both.</li>
						<li>Management System - The groomer is given an option to see the list of previous bookings. He can also modify and cancel the appointments and remove the client and all the booking information related to him from the system.</li>
					</ul>
				</div>
				<div class="col-sm-4">
					<img style="display:block;margin:0 auto;width: 450px;border: 1px solid #1c4c69;" src="<?php echo $root;?>images/screenshot2.png" class="features-img">
				</div>
			</div>
			<p>&nbsp;</p>
			
		</div>
		<p>&nbsp;</p>
		<?php include '../footer.php';?>
	</body>

</html>	
	