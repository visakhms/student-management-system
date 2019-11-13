<?php
	$db = mysqli_connect("localhost","root","root","sms");
if (mysqli_connect_errno()) {
	echo "Database Query Faield: ".mysqli_connect_error();
	exit();
}
?>
