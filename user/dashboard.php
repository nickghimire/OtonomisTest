<?php
$nam = "";
	$servername ="localhost";
$name ="root";
$password ="";
$dbName="db_admin";

$conn = new mysqli($servername, $name , $password, $dbName);

if($conn->connect_error){
	echo"Something went wrong";
}else{
	echo "Connection Successful";
}



if(isset($_POST['email']) && isset($_POST['password'])){
	$email = $_POST['email'];
	$password = $_POST['password'];


	$sql = "SELECT name from tbl_info where email = ? and password = ?";
	if($stmt = $conn->prepare($sql)){
		$stmt->bind_param('ss',$email,$password);
		if($stmt->execute()){

			$stmt->store_result();
			$stmt->bind_result($name);

			$stmt->fetch();
			echo "Successfull";
			$nam = $name;

		}else{
			echo "Something Went Wrong";
		}
	}else{
		echo "Error in query";
	}



}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Welconme To Otonomis</title>
</head>
<body class="offline">
<div class="interstitial-wrapper">
<h1>Hello <?=$nam;?></h1>

</body>
</html>

