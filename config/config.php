<?php
session_start();
ob_start();

$timezone = date_default_timezone_set("America/Los_Angeles");

$con = mysqli_connect("localhost","nathanroth","12Hilltop.","nathanro_ecapsule"); //connection variable

if(mysqli_connect_errno())
{
	echo "You messed up! " . mysqli_connect_errno();
}
 ?>