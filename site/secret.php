<?php
	session_start();
?>	

<!DOCTYPE html>
<html>

<?php
	$page = 'secret';
	include("header.php");
?>	
	<h3>Log-in to check your messages</h3>

	<body>
		<form action = "login.php" method="POST">
			Username:&emsp;<input placeholder = "username" type = "text" name = "username" size="30" /><br/><br/>
			Password: &emsp;<input placeholder = "password" type = "password" name = "password" size="30" /><br/><br/>
			<input type = "submit" value = "Submit" />
		</form>	
		<?php
			$error = isset($_SESSION["error"]);
			if($error): 						//get error message if there is one
				echo "<br/>".$_SESSION["error"]; //print error for user
				unset($_SESSION["error"], $error);	//unset for next time
			endif;
		?>
		
	</body>
	
</html>