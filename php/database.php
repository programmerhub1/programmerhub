<?php
	$db = mysqli_connect('localhost','root','','programmerhub');
		if(!$db){
			die('Connection failed: '. mysqli_connect_error());
		}

?>