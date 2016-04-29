<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/art.css">
</head>
<?php
	$page = 'art';
	include("header.php");
?>	
<h3>Art time.</h3>

	<body>
	As a studio arts minor, I like to show off my art. Here's a few of my pieces! <br/><br/><br/>
		<center><ul style="background-color: #0B173B;">
		<?php
			$textfile = fopen("docs/art.txt", "r");
			$dirname = "imgs/art/";
			$imgs = glob($dirname."*.jpg");
			foreach($imgs as $img){
				echo '<div id="wrapper"><img src="'.$img.'" class="hover"/>';
				echo '<p class="text">'.fgets($textfile).'</p></div>';
			}                 
		?>
		</ul></center>
	</body>
</html>
