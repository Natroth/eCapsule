<?php 
	require 'config/config.php';

if (isset($_SESSION['id'])) {
	$id = $_SESSION['id'];


}
else {
	header("Location: index.php");	
}
 ?>

 <html>
 <head>
 	<title>eCapsule Receipt</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/logoposs.png"/>	

	
 	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	
 </head>
 <body>
 	<div class="wrapper">
 		<div class="header" style=" padding: 10px;">
 		    <br><br>
 		 <div style="font-size: 9vh;">
 		Submission Complete!
 		</div>
 		<br>
 	 Your Submission Ticket Number is <br>
		<span style="color: #000; font-size: 200%">
			<?php
			 echo $_SESSION['id'];

			 session_destroy();
			 ?> 
		</span><br><br>	
	 Take a picture of this receipt! It may be the only way of you finding your post once the capsule is opened - If it ever is.	 		
 		</div>	
	</div> 
 </body>
 </html>