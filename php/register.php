<?php
	date_default_timezone_set('Asia/Kolkata');
	$date=date('D M Y H:i:s');
	include 'database.php';
	$uname=$_POST['uname'];
	$gender=$_POST['gender'];
	$country=$_POST['country'];
	$city=$_POST['city'];
	$address=$_POST['address'];
	$pincode=$_POST['pincode'];
	$number=$_POST['number'];
	$em=$_POST['email'];
	$pass=$_POST['pass'];

	$time=1582000000000;
	$id=round(microtime(true) * 1000)-$time;

	$sql="insert into user values('".$id."','".$uname."','".$number."','".$city."','".$country."','".$pincode."','".$address."','','".$em."','".$pass."')";
	if(mysqli_query($db,$sql)){
	    echo "success";
	}else{
	    echo mysqli_error($db);
	}
	mysqli_close($db);
?>