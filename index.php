<?php 
	require 'config/config.php';

 ?>

<html>
	<head>
		<title>eCapsule</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/logoposs.png"/>	
	</head>

	<body>

		<div class= 'wrapper'>
			<br><br>
			<div class= 'header'>
				
				<div class="heading">
				<img src="assets/images/logoposs.png" style="width: 8rem; padding-top: 1rem">    
			    <div style="font-size: 6rem">	<span style="font-family:'Raleway-Thin'; ">e</span>Capsule</div>
				</div>
					
		
					<div class="home_blurb">
					In 5 Billion Years From Now, When We Are All Gone And Forgotten, This Tingme Capsule Will Survive As A Testament To Our Lives - Join The Movement ...Upload A Picture ...Or Two Or Three</span>
				<br>
					</div>
					
			</div>
			
			


<br>					

<br>

<br>
				<form action="upload.php" method="post" enctype="multipart/form-data">

			<div class="pic_div">
				<label for="fileToUpload" class="choose_file">
				<img src="assets/images/favicon.png.png" alt="Pic?">
				</label>	
				<input type="file" name="fileToUpload" id="fileToUpload" onchange="form.submit()" action="upload.php">			
			</div>

				</form>
			</div>

	<script type="text/javascript">
document.getElementById("file").onchange = function() {
    document.getElementById("form").submit();
};
	</script>			



		</div>
	</body>
</html>