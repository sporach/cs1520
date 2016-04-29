<!DOCTYPE html>
<html>
<head>
	<style>
		.gm-style-iw {
			color: black;
			font-weight: bold;
		}
	</style>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script type = "text/javascript">
		var mapFocus = new google.maps.LatLng(28.4729, -81.4728); //mystery location
		function initialize() {
			var mapProp = {
				center: mapFocus,
				zoom: 6,
				mapTypeId: google.maps.MapTypeId.HYBRID
			};
			var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
			
			//set a marker on the map that bounces!
			var bouncy = new google.maps.Marker({
				position: mapFocus,
				animation: google.maps.Animation.BOUNCE
			});

			bouncy.setMap(map);
			
			//little info bubble
			var bubble = new google.maps.InfoWindow({
				content: "Click me!"
			});
			
			bubble.open(map,bouncy);
			
			//zoom into mystery vacation location on click
			google.maps.event.addListener(bouncy, 'click', function() {
				map.setZoom(111);
				map.setCenter(bouncy.getPosition());
			});
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
</head>
<?php
	$page = 'maps';
	include("header.php");
?>	
	<h3>Hey check out this map</h3>

	<body>
		(can you tell I want to go on vacation) <br/><br/>
		<div id = "googleMap" style = "width:500px; height:380px;"></div>
	</body>
	
</html>