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
		<br/>
		<!-- Insert my Twitter feed using Twitter's widget capabilities.
			 Looking at these makes me realize how rarely I tweet.. whoops
			 Pretty messy but I don't have the guts to mess around with
			 what Twitter's got going here. Cool feature, though! -->
		<a class="twitter-timeline" href="https://twitter.com/samporach" data-widget-id="726104825176403968">Tweets by @samporach</a>
		<script>
			!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
		</script>
	</body>
	
</html>