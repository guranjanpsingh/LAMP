<?php
	if(!empty($_POST["signInUserName"])){
		$userName = $_POST["signInUserName"];
	} else {
		$userName = "none";
	}
	
	if(!empty($_POST['signInPassword'])){
		$password = $_POST['signInPassword'];
	} else {
		$password = 'blank';
	}
	
	echo $userName;
	echo $password;
	echo var_dump($_POST);