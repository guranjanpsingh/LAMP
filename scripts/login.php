<?php
	require('../config.php');
	$host = $config['host'];
	$dbUser = $config['username'];
	$dbPassword = $config['password'];
	$mysqli = new mysqli($host, $dbUser, $dbPassword, "polls");
	echo var_dump($_POST);
	echo "<br>";
	if ($mysqli->connect_errno) {
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	} else {
		echo "connection established";
		echo "<br>";
		if((!empty($_POST["SignInUserName"])) and (!empty($_POST['SignInPassword']))){
			$userName = $_POST["SignInUserName"];
			$password = $_POST["SignInPassword"];
			if ($stmt = $mysqli->prepare("SELECT * FROM users WHERE userName = ? AND password = ? ")) {
			
				/* bind parameters for markers */
				$stmt->bind_param("ss", $userName, $password);

				/* execute query */
				$stmt->execute();
				
				$res = $stmt->get_result();
				if ($res->num_rows = 1){
					/* close statement */
					$stmt->close();
					echo "User found";
					$_SESSION["username"] = $userName;
				} else {
					
				}
			}
		} else {
			echo "couldn't create an account.";
		}
		
	}
	#header("Location: ../index.php");
$mysqli->close();