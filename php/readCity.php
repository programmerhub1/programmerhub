<?php
	$myfile = fopen("../txt/cities.json", "r") or die("Unable to open file!");
	$txt='';
	while(!feof($myfile)) {
	  $txt.=fgets($myfile);
	}
	fclose($myfile);
	echo $txt;
?>