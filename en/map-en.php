<html lang="en">
<head>
	<?php include("../assets/misc/head.php"); ?>
	<title>Map</title>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
	<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script>
	<?php include("../assets/misc/scripts.php"); ?>
</head>
<body>
	<?php include("layouts/header-en.php"); ?>
	<?php
		$i = 0;

		$title =  array('Cantemir','Tehnologic','Fericit','Petru Poni');
		$body =  array('<strong>Cante</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at nibh sit amet mauris ultricies commodo. Integer vel tincidunt magna. Maecenas ex nulla, varius sed consectetur eget, placerat sit amet purus. Etiam fringilla in felis eu dapibus. Pellentesque euismod convallis volutpat. Suspendisse blandit eros nec nibh accumsan dignissim. Morbi in pulvinar ipsum. Integer in diam vel urna accumsan fringilla non sagittis purus. Mauris iaculis feugiat orci, vitae ultricies eros pulvinar ut. Phasellus mattis justo commodo diam condimentum, non ornare augue interdum. Nulla vel eros quis tellus viverra pellentesque posuere in mi.</p> <p> Nulla lorem nulla, lacinia non sodales non, facilisis sit amet elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris id purus iaculis, egestas leo eu, facilisis neque. Curabitur ultrices nisi eu ante vehicula, ac tempor nunc interdum. Mauris at purus erat. Donec vel sem lorem. Aenean iaculis odio non mi lacinia ultricies. Praesent suscipit erat eu rutrum mattis. Aliquam ornare tellus sit amet mi fermentum, a tempor diam ultrices. Praesent ornare augue cursus pharetra fermentum. Aliquam venenatis pretium turpis, vel volutpat metus tempor a.',
					   '<strong>Tehno</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at nibh sit amet mauris ultricies commodo. Integer vel tincidunt magna. Maecenas ex nulla, varius sed consectetur eget, placerat sit amet purus. Etiam fringilla in felis eu dapibus. Pellentesque euismod convallis volutpat. Suspendisse blandit eros nec nibh accumsan dignissim. Morbi in pulvinar ipsum. Integer in diam vel urna accumsan fringilla non sagittis purus. Mauris iaculis feugiat orci, vitae ultricies eros pulvinar ut. Phasellus mattis justo commodo diam condimentum, non ornare augue interdum. Nulla vel eros quis tellus viverra pellentesque posuere in mi.</p> <p> Nulla lorem nulla, lacinia non sodales non, facilisis sit amet elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris id purus iaculis, egestas leo eu, facilisis neque. Curabitur ultrices nisi eu ante vehicula, ac tempor nunc interdum. Mauris at purus erat. Donec vel sem lorem. Aenean iaculis odio non mi lacinia ultricies. Praesent suscipit erat eu rutrum mattis. Aliquam ornare tellus sit amet mi fermentum, a tempor diam ultrices. Praesent ornare augue cursus pharetra fermentum. Aliquam venenatis pretium turpis, vel volutpat metus tempor a.',
					   '<strong>Fericit</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at nibh sit amet mauris ultricies commodo. Integer vel tincidunt magna. Maecenas ex nulla, varius sed consectetur eget, placerat sit amet purus. Etiam fringilla in felis eu dapibus. Pellentesque euismod convallis volutpat. Suspendisse blandit eros nec nibh accumsan dignissim. Morbi in pulvinar ipsum. Integer in diam vel urna accumsan fringilla non sagittis purus. Mauris iaculis feugiat orci, vitae ultricies eros pulvinar ut. Phasellus mattis justo commodo diam condimentum, non ornare augue interdum. Nulla vel eros quis tellus viverra pellentesque posuere in mi.</p> <p> Nulla lorem nulla, lacinia non sodales non, facilisis sit amet elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris id purus iaculis, egestas leo eu, facilisis neque. Curabitur ultrices nisi eu ante vehicula, ac tempor nunc interdum. Mauris at purus erat. Donec vel sem lorem. Aenean iaculis odio non mi lacinia ultricies. Praesent suscipit erat eu rutrum mattis. Aliquam ornare tellus sit amet mi fermentum, a tempor diam ultrices. Praesent ornare augue cursus pharetra fermentum. Aliquam venenatis pretium turpis, vel volutpat metus tempor a.',
					   '<strong>Petrut</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at nibh sit amet mauris ultricies commodo. Integer vel tincidunt magna. Maecenas ex nulla, varius sed consectetur eget, placerat sit amet purus. Etiam fringilla in felis eu dapibus. Pellentesque euismod convallis volutpat. Suspendisse blandit eros nec nibh accumsan dignissim. Morbi in pulvinar ipsum. Integer in diam vel urna accumsan fringilla non sagittis purus. Mauris iaculis feugiat orci, vitae ultricies eros pulvinar ut. Phasellus mattis justo commodo diam condimentum, non ornare augue interdum. Nulla vel eros quis tellus viverra pellentesque posuere in mi.</p> <p> Nulla lorem nulla, lacinia non sodales non, facilisis sit amet elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris id purus iaculis, egestas leo eu, facilisis neque. Curabitur ultrices nisi eu ante vehicula, ac tempor nunc interdum. Mauris at purus erat. Donec vel sem lorem. Aenean iaculis odio non mi lacinia ultricies. Praesent suscipit erat eu rutrum mattis. Aliquam ornare tellus sit amet mi fermentum, a tempor diam ultrices. Praesent ornare augue cursus pharetra fermentum. Aliquam venenatis pretium turpis, vel volutpat metus tempor a.');
	?>
	<div class="container">
		<div class="row my-5">
			<div class="col">
				<div id="mapid">
				<script>
					const markerPos = [
						{x: 46.25321, y: 26.77684}, 	// cantemir
						{x: 46.24145, y: 26.76189}, 	// tehnologic
						{x: 46.24236, y: 26.76669}, 	// fericit
						{x: 46.25375, y: 26.77424} 		// petru poni
					];
					let markers = [];

					let mymap = L.map('mapid').setView([46.2484, 26.7925], 14);
					L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    					attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    					maxZoom: 18,
    					id: 'mapbox.streets',
    					accessToken: 'pk.eyJ1IjoiZXRoYW53ZXN0aWNrIiwiYSI6ImNqbWM5dnVzMzFyNWwzcGxrcWM4dDJqYXMifQ.PW-7Jf_2icBH59RJ1js7UQ'
					}).addTo(mymap);

					for (let i = 0; i < markerPos.length; i++) {
						markers[i] =  L.marker([markerPos[i].x, markerPos[i].y]).addTo(mymap);
						markers[i].on('click', () => {
							window.location.href="map-ro.php?index=" + i
						});
					}
					
					
					//if (red === 0)
					//window.setTimeout(() => {
						//let i = Math.floor((Math.random() * 3));
						//window.location.href="map-ro.php?index=" + i;
					//}, //3000);

				</script>
				</div>
			</div>
			<div class="col mapText">
				<?php $i = $_GET['index']; ?>
				<h3 class="mapTextH"> <?= $title[$i]; ?></h3>
				<p class="mapTextP"> <?= $body[$i]; ?></p>
			</div>
			</div>


	<?php include("layouts/footer-en.php"); ?>
	
</body>
</html>