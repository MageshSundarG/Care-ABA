<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db="mysql";
	$conn = mysqli_connect($servername, $username, $password,$db);
  $data =$_POST['finaldata'];
	$data1 =$_POST['finaldata1'];
  $sql="INSERT INTO `care aba`(`Receptive_Language`, `Goals`) VALUES ('$data1','$data')";
  if (mysqli_query($conn, $sql)) {
		echo 'Insterted';
	}
	else {
		echo 'Not Insterted';
	}
?>
