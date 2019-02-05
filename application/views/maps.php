<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?php echo base_url('assets/leaflet/leaflet.css')?>">
	<script type="text/javascript" src="<?php echo base_url('assets/leaflet/leaflet.js')?>"></script>

	<title>test maps</title>
</head>
<body>

	<div id="mapid" style="width: 600px; height: 400px;"></div>

	<script>

		var mymap = L.map('mapid').setView([-3.990687, 105.380841], 8);

		L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
			maxZoom: 18,
			attribution: 'Copyright github.com/taufiq2810',
			id: 'mapbox.streets'
		}).addTo(mymap);

		var circle = L.circle([-3.990687, 105.380841], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 50000
		}).addTo(mymap);

	</script>

</body>
</html>
