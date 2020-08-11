<?php 


	require 'config/config.php';

if (isset($_SESSION['id'])) {
	$id = $_SESSION['id'];
		$_SESSION['date'] = $date;
		$_SESSION['pic'] = $songName;	


}

		$date= "";






		$date = date("Y-m-d");





	$uploadOk = 1;
	$songName = $_FILES['fileToUpload']['name'];
	$errorMessage = "";

	if($songName != "") {
		$targetDir = "assets/images/";
		$songName = $targetDir . uniqid() . basename($songName);
		$songFileType = pathinfo($songName, PATHINFO_EXTENSION);

		if($_FILES['fileToUpload']['size'] > 100000000) {
			$errorMessage = "Image file is to large";
			$uploadOk = 0;

		}

		if(strtolower($songFileType) != "jpeg" && strtolower($songFileType) != "jpg" && strtolower($songFileType) != "png" && strtolower($songFileType) != "svg" && strtolower($songFileType) != "mov"
	    	&& strtolower($songFileType) != "avi" && strtolower($songFileType) != "flv" && strtolower($songFileType) != "wmv" && strtolower($songFileType) != "mpv"
) {
			$errorMessage = "File type not supported. Try jpg, jpeg, png, svg, mov, avi, flv, wmv, mpv!";
			$uploadOk = 0;
		}

		if($uploadOk) {
			if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $songName)) {
				//song uploaded
			}
			else {
				$uploadOk = 0;
			}
		}
		}

		if($uploadOk && ($text != "" OR $songName != "")) {
			$query = mysqli_query($con, "INSERT INTO posts VALUES ('', '', '', '$date', '$songName')");
			$id = mysqli_insert_id($con);
			$_SESSION['id'] = $id;


			header("location:reciept.php");

		}
		else {
			echo "<div style='text-align:center; padding: 5px; font-size: 2vh;' class='alert alert-danger'>
			<br><br><br>$errorMessage
			</div>";
		}







	
?>

		</div>
	</body>
</html>