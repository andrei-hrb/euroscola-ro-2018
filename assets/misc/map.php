<html lang="en">
<head>
	
	<title>Map</title>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
	<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script>
	<?php include("../assets/misc/scripts.php"); ?>
</head>
<body>
	
	<hr>
		<div class="container">
		<div class="row md-7">
			<div class="col">
				<div id="mapid">
				<script>
					
				

					let mymap = L.map('mapid').setView([46.2484, 26.7925], 14);
					L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    					attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    					maxZoom: 18,
    					id: 'mapbox.streets',
    					accessToken: 'pk.eyJ1IjoiZXRoYW53ZXN0aWNrIiwiYSI6ImNqbWM5dnVzMzFyNWwzcGxrcWM4dDJqYXMifQ.PW-7Jf_2icBH59RJ1js7UQ'
					}).addTo(mymap);
 		 			L.marker([46.25321, 26.77684]).addTo(mymap)
    	 			.bindPopup('Colegiul National "Dimitre Cantemir"')
    	 			.openPopup();
					
					

				</script>
				</div>
			</div>
		<div class="col mapText">
			

	
</body>
</html>
