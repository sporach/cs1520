<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/menu.css">
</head>

<ul>
  <li><a <?php echo ($page == 'home') ? "class='active'" : ""; ?> href="home.php">Home</a></li>
  <li><a <?php echo ($page == 'art') ? "class='active'" : ""; ?> href="art.php">Studio Arts</a></li>
  <li><a <?php echo ($page == 'resume') ? "class='active'" : ""; ?> href="resume.php">Resume</a></li>
  <li><a <?php echo ($page == 'maps') ? "class='active'" : ""; ?> href="maps.php">Fun Times with Maps</a></li>
  <li><a <?php echo ($page == 'video') ? "class='active'" : ""; ?> href="video.php">Learning Corner</a></li>
  <li><a <?php echo ($page == 'contact') ? "class='active'" : ""; ?> href="contact.php">Contact Me</a></li>
</ul>
	
</html>