<?php
	$page = 'resume';
	include("header.php");
	
	/*Display on page*/
	
	/*echo "<br/>";
	echo "<center><iframe src=\"docs\SamanthaPorach_resume.pdf\" width=100% height:100%></iframe></center>";*/

	/* Display fullscreen */
	$file = 'docs/SamanthaPorach_resume.pdf';
	$filename = 'SamanthaPorach_resume.pdf'; 

	header('Content-type: application/pdf');
	header('Content-Disposition: inline; filename="' . $filename . '"');
	header('Content-Transfer-Encoding: binary');
	header('Content-Length: ' . filesize($file));
	header('Accept-Ranges: bytes');

	@readfile($file);

?>