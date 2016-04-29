<?php
	session_start();
	$loggedin = isset($_SESSION["loggedin"]);
	
	if(!$loggedin)	//if not logged in, don't let them check my messages!
	{ 	
		$_SESSION["error"] = "You have not logged in. Please log in first";
		header("Location: home.php"); // Redirect browser
		exit();
	}
?>
<!DOCTYPE html>
<html>
<?php
	$page = 'secret';
	include("header.php");
?>	
	<h3>Messages</h3>

	<body>
	<?php
	
		$servername = "localhost";
		$username = "root";
		$password = "deathstar";
		$dbname = "website";
		
		// Create connection
		$db = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if(mysqli_connect_errno())
		{
			printf("Connect failed: %s <br />",mysqli_connect_error());
			exit();
		}
		
		$query = "SELECT * FROM messages"; 		//setting up query
		$result = mysqli_query($db, $query); 	//getting query from db
		$num_rows = mysqli_num_rows($result); 		//get number of rows in result
		$num_fields = mysqli_num_fields($result); 	//get number of fields in result
		//print results in table
		print "<table><h2> Query Results </h2>";
		print "<tr align = 'left'>";
		
		if($num_rows>0)
		{
			$row = mysqli_fetch_assoc($result);
			
			//output column labels
			$keys = array_keys($row);
			for($index=0;$index<$num_fields;$index++){
				print "<th>" . $keys[$index] . "</th>";
			}
			
			print "</tr>";
			
			//output values of the fields in the row
			for($row_num=0;$row_num<$num_rows;$row_num++)
			{
				print "<tr>";
				$values = array_values($row);
				for($index=0;$index<$num_fields;$index++)
				{
					$value = htmlspecialchars($values[$index]);
					print "<td>" . $value . "</td>";
				}
				
				print "</tr>";
				$row = mysqli_fetch_assoc($result);
			}
		}
		else
		{
			print "There were no rows in the table <br />";
		}
		print "</table>";	?>
	</body>
</html>