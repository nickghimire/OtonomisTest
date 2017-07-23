<?php
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


		$name =$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];

		$password=$_POST['password'];


if(isset($name) && isset($email) && isset($phone) && isset($address) && isset($password)){
	if(!empty($name && $password && $phone && $address && $email)){
		$sql = "INSERT INTO tbl_info (name,email,phone,address,password) VALUES (?, ?, ?, ?, ?)";

		if($stmt = $conn->prepare($sql)){
			$stmt->bind_param('sssss',$name,$email,$phone,$address,$password);
			if($stmt->execute()){
				echo "Successfull";
			}else{
				echo "Query Execution failed";
			}

		}else{
			echo "There was something wrong with the query.";
		}
		


	}
}
?>