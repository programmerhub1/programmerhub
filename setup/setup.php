<?php
	
	$db = mysqli_connect('localhost', 'root', '');
	if (!$db) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "create database programmerhub";
	if (mysqli_query($db, $sql)) {
		$errors = [];
		$temp=0;
		$sqlTable0= 'create table if not exists programmerhub.user(id varchar(20),name varchar(20),phno varchar(16),city varchar(30),state varchar(30),country varchar(30), pincode varchar(15),address varchar(100),pic varchar(40),email varchar(30),password varchar(30),PRIMARY KEY(name),CONSTRAINT UC_user UNIQUE (email,phno))';
		$sqlTable1='create table if not exists programmerhub.project(pid varchar(20),pname varchar(20),pdis text,pexlink varchar(50),ppic varchar(40),uid varchar(20))';
		$sqlTable2='create table if not exists programmerhub.chat(myid varchar(20),frdid varchar(20))';
		$sqlTable3='create table if not exists programmerhub.connection(mefollowing varchar(20),thisperson varchar(20))';
		$sqlTable4='create table if not exists programmerhub.like(projectid varchar(20),uid varchar(20),u_comment varchar(300))';
		$sqlTable5='create table if not exists programmerhub.hirendpaym(myid varchar(20),frdid varchar(20),payment varchar(100))';
		$tables = [$sqlTable0,$sqlTable1,$sqlTable2,$sqlTable3,$sqlTable4,$sqlTable5];		
		foreach($tables as $k => $sql1){
		    $query = mysqli_query($db,$sql1);
		    if(!$query)
		       echo "error".mysqli_error($db)."<br/>";
		    else
		       $temp++;
		}
		echo $temp;
		if($temp==6)
			echo "<script>alert('Successfully Created Database and Tables');</script>";
	} else {
	    echo "Error creating database: " . mysqli_error($db);
	}

	mysqli_close($db);
?>