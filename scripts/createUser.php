<?php
	require('../config.php');
	$host = $config['host'];
	$dbUser = $config['username'];
	$dbPassword = $config['password'];
	$mysqli = new mysqli($host, $dbUser, $dbPassword, "polls");
	if ($mysqli->connect_errno) {
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	} else {
		echo "connection established";
	
		if((!empty($_POST["SignUpUserName"])) and (!empty($_POST['SignUpPassword']))){
			$userName = $_POST["SignUpUserName"];
			$password = $_POST["SignUpPassword"];
			echo "hello";
			if ($stmt = $mysqli->prepare("INSERT INTO Users(userName, password) VALUES(?, ?)")) {
			
				/* bind parameters for markers */
				$stmt->bind_param("ss", $userName, $password);
			
				/* execute query */
				$stmt->execute();
			
				/* close statement */
				$stmt->close();
				echo "User Created";
				$_SESSION["username"] = $userName;
			}
		} else {
			echo "couldn't create an account.";
		}
		
	}
	header("Location: ../index.php");
$mysqli->close();