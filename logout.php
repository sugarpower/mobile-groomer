<?php

error_reporting(0);
session_start();
unset($_SESSION['userid']);
session_destroy();
header('location:index.php');

?>