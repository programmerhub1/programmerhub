<?php
	$myfile = fopen("../txt/country.txt", "r") or die("Unable to open file!");
	while(!feof($myfile)) {
	  echo fgets($myfile);
	}
	fclose($myfile);
?>