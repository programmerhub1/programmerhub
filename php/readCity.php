<?php
	$city=strtolower($_POST['name']);
	$myfile = fopen("../txt/".$city.".txt", "r") or die("Unable to open file!");
	while(!feof($myfile)) {
	  echo fgets($myfile);
	}
	fclose($myfile);
?>