<?php
// Connect to MySQL
date_default_timezone_set('America/Chicago');
$con = mysqli_connect("localhost","root","root","jsshoutbox",8889);

if(mysqli_connect_errno()){
	echo 'Failed to connect: '.mysqli_connect_error();
}

