<!DOCTYPE html>
<html>

<?php
	$page = 'home';
	include("header.php");
?>	
	<img src="imgs/myface.jpg" align="right" style="margin-top:15px;">
	<h3>Yo!</h3>

	<body>
	<?php
		$textfile = fopen("docs/intro.txt", "r");
		while(!feof($textfile))
		{
			echo fgets($textfile) . "<br/>";
		}
		fclose($textfile);	
	?>
	</body>
	
</html>