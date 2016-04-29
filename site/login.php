<?php
	session_start();
	$name = "skywalker";
	$pass = "deathstar";
	if (isset($_POST["username"])) $username = $_POST["username"]; //seeing if name is already set, if not setting to ""
		else $username = "";
	if (isset($_POST["password"])) $password = $_POST["password"]; //seeing if pass is already set, if not setting to ""
		else $password = "";
	if ($username && $password) //if username and password exist
	{
		if ((strcmp($username, $name) == 0) && (strcmp($password, $pass) == 0))  //see if info is correct
		{
			$_SESSION["loggedin"] = 1; //logged in flag
			header("Location: checkmessages.php"); // Redirect browser
			exit();
		}
		$_SESSION["loggedin"] = 0; //logged in flag
		$_SESSION["error"] = "Your username and/or password is incorrect, please try again"; 
		header("Location: secret.php"); // Redirect browser
		exit();
	}
	else
	{
		$_SESSION["loggedin"] = 0; //logged in flag
		$_SESSION["error"] = "Your username and/or password is incorrect, please try again";
		header("Location: secret.php"); // Redirect browser
		exit();
	}
?>	