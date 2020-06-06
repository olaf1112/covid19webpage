<?php
$ln = $_POST['ln'];
$fn = $_POST['fn'];
$mn = $_POST['mn'];
$yn = $_POST['yn'];
$email = $_POST['email'];
$phoneCode = $_POST['phoneCode'];
$phone = $_POST['phone'];

if(!empty($ln)|| !empty($fn) || !empty($mn) || !empty($yn) || !empty($email) || !empty($phoneCode)||!empty($phone)){
include_once('myDbConnector.php');

	
	if(mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}else{
		$SELECT = "SELECT email FROM nCovDb WHERE email = ? Limit 1";
		$INSERT = "INSERT Into nCovDb (lName, fName, mName, travelOutsidePhil, email, phoneCode, phone) values(?,?,?,?,?,?,?)";
		
		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s",$email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum = $stmt->num_rows;
		
		
		if($rnum==0){
			$stmt->close();
			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("sssssii", $ln, $fn, $mn, $yn, $email, $phoneCode, $phone);
			$stmt->execute();
			echo "<h1>New record inserted successfully</h1>";
		}else{
			echo "<h1>Someone already register using this email</h1>";
		}
		$stmt->close();
		$conn->close();
	}
	
}else{
	echo "all field are required!";
	die();
	
}

?>

<a href = "home.php">Return</a>

<style>
a{
padding:10px;
border-radius:10px;
text-decoration:none;
background-color:silver;
}

a:hover{
background-color:teal;
font-size:20;	
}
</style>