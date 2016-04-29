<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/menu.css">
</head>

<ul>
  <li><a <?php echo ($page == 'home') ? "class='active'" : ""; ?> href="home.php">Home</a></li>
  <li><a <?php echo ($page == 'art') ? "class='active'" : ""; ?> href="art.php">Studio Arts</a></li>
  <li><a <?php echo ($page == 'resume') ? "class='active'" : ""; ?> href="resume.php">Resume</a></li>
  <li><a <?php echo ($page == 'contact') ? "class='active'" : ""; ?> href="contact.php">Contact Me</a></li>
</ul>
	
</html>