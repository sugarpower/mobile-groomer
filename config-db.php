<?php 

define(HOST,'localhost');
define(USER,'root');
define(PASS,'root');
define(DB,'mobile_groomer');


$con = mysqli_connect(HOST,USER,PASS,DB);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//mysql_select_db(DB,$con) or die("can not select database");
?>