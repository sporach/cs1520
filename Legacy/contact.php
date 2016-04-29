<?php
	session_start();
	$notfirst = isset($_SESSION["notfirst"]);
?>

<!DOCTYPE html>
<html>

<?php
	$page = 'contact';
	include("header.php");
?>	
	<h3>Send me a message!</h3>

	<body>
		<form id = "contactform" action = "contact.php" method="POST">
			Name:&emsp;<input placeholder = "Name" type = "text" name = "name" size="30" /><br/><br/>
			Email:&emsp;<input placeholder = "Email" type = "text" name = "email" size="30" /><br/><br/>
			Message:
			<br/><br/>
			<textarea form = "contactform" placeholder = "Write your message here" name = "message" cols = "35" rows = "5" wrap = "soft"></textarea>
			<br/><br/>
			<input type = "submit" value = "Submit" />
		</form>	
		<?php			
			if($notfirst)
			{
				$servername = "localhost";
				$username = "root";
				$password = "deathstar";
				$dbname = "website";
				$match=0;
				$dataentered=0;
				
				// Create connection
				$db = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if(mysqli_connect_errno())
				{
					printf("Connect failed: %s <br />",mysqli_connect_error());
					exit();
				}
				
				if (isset($_POST["name"])) $name = $_POST["name"]; //seeing if name is already set, if not setting to ""
					else $name = "";
				if (isset($_POST["email"])) $email = $_POST["email"]; //seeing if email is already set, if not setting to ""
					else $email = "";
				if (isset($_POST["message"])) $message = $_POST["message"]; //seeing if message is already set, if not setting to ""
					else $message = "";
				if ($name && $email && $message)		//if all fields entered
				{ 
					$found = 0;
					$dataentered=1;
					$query = "SELECT * FROM messages"; 		//setting up query
					$result = mysqli_query($db, $query); 	//getting query from db
					$num_rows = mysqli_num_rows($result); 	//finding number of rows in result
					$num_fields = mysqli_num_fields($result); //finding number of fields in result
					
					$row = mysqli_fetch_assoc($result); //getting first row
					for ($row_num=0; $row_num<$num_rows; $row_num++)
					{
						$values = array_values($row); 	//getting values of row
						$getname = $values[0]; 			//extracting name
						$getemail = $values[1]; 		//extracting email
						$getmessage = $values[2]; 		//extracting message
						if((strcmp($getname, $name)==0) && (strcmp($getemail, $email) == 0) && (strcmp($getmessage, $message) == 0))
						{ 				//comparing form input to database
							$match = 1; //if matched mark matched flag
						}
						$row = mysqli_fetch_assoc($result);
					}
				}
				if ((!$name || !$email || !$message) && $notfirst==1)	//if they didn't complete all form fields
				{
					echo "Please enter something for all fields.";
				}
				if ($match == 1) //if their name matches a name in the database
				{ 
					echo "You've already submitted a message!";
				}
				else if ($match == 0 && $dataentered==1) //otherwise add to database
				{ 
					$query2 = "INSERT INTO messages(Name, Email, Message)
					VALUES ('$name', '$email', '$message')";
					mysqli_query($db, $query2);
				}

				$db->close();
				$name = "";
				$email = "";
				$message = "";
			
			}
			else
			{
				$_SESSION["notfirst"] = 1;
			}
		?>	
	</body>
	
</html>