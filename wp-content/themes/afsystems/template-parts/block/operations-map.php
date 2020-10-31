<?php /* Block Name: Operations Map */ ?>

<?php $backgroundImage = get_field('image'); if( !empty($backgroundImage) ): 
	$backgroundThumb = $backgroundImage['sizes'][ 'primer-1400' ]; endif;
?>

<section class="operations-map">
	<div class="operations-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mx-auto text-center" data-aos="fade-up">
					<h2><?php the_field('title'); ?></h2>
					<p><?php the_field('subtitle'); ?></p>
				</div><!-- end .col-lg-6 -->
			</div><!-- end .row -->
		</div><!-- end .container -->
	</div><!-- end .operations-top -->
	
	<div class="map-container" data-aos="fade-in">
		<div class="map-wrap" id="map">
		</div>
	</div>
	<?php
	$locations = array();
	?>
	<?php if( have_rows('locations') ): while ( have_rows('locations') ) : the_row(); ?>
		<?php
		$address = get_sub_field('address');
		$locations[] = $address;
		?>
	<?php endwhile; endif; ?>
	<script>
		var geocoder;
		var map;
		var locations = JSON.parse('<?php echo json_encode($locations)?>');
		var geoLocations = [];

		function codeAddress() {
			var address = document.getElementById('address').value;
			geocoder.geocode( { 'address': address}, function(results, status) {
				if (status == 'OK') {
					map.setCenter(results[0].geometry.location);
					var marker = new google.maps.Marker({
						map: map,
						position: results[0].geometry.location
					});
				} else {
					alert('Geocode was not successful for the following reason: ' + status);
				}
			});
		}

		function convertLatLong(index){
			if(index < locations.length){
				geocoder.geocode( { 'address': locations[index]}, function(results, status) {
					if (status == 'OK') {
						geoLocations.push({
							lat: results[0].geometry.location.lat(),
							lng: results[0].geometry.location.lng()
						})
						index ++;
						// map.setCenter(results[0].geometry.location);
						// var marker = new google.maps.Marker({
						// 	map: map,
						// 	position: results[0].geometry.location
						// });
						convertLatLong(index);
					} else {
						alert('Geocode was not successful for the following reason: ' + status);
					}
				});
			}
			else{
				addMarkers();
			}
		}

		function addMarkers(){
			var bounds = new google.maps.LatLngBounds();
			for(var index = 0; index < geoLocations.length; index++){
				var point = new google.maps.LatLng(geoLocations[index].lat, geoLocations[index].lng);
				var marker = new google.maps.Marker({
					map: map,
					position: point,
					icon: '<?php echo get_template_directory_uri()?>/library/images/icon-map-pin.svg'
				});

				bounds.extend(marker.position);
			}

			map.fitBounds(bounds);
		}

		var silver = [
			{
				elementType: "geometry",
				stylers: [{ color: "#f5f5f5" }],
			},
			{
				elementType: "labels.icon",
				stylers: [{ visibility: "off" }],
			},
			{
				elementType: "labels.text.fill",
				stylers: [{ color: "#616161" }],
			},
			{
				elementType: "labels.text.stroke",
				stylers: [{ color: "#f5f5f5" }],
			},
			{
				featureType: "administrative.land_parcel",
				elementType: "labels.text.fill",
				stylers: [{ color: "#bdbdbd" }],
			},
			{
				featureType: "poi",
				elementType: "geometry",
				stylers: [{ color: "#eeeeee" }],
			},
			{
				featureType: "poi",
				elementType: "labels.text.fill",
				stylers: [{ color: "#757575" }],
			},
			{
				featureType: "poi.park",
				elementType: "geometry",
				stylers: [{ color: "#e5e5e5" }],
			},
			{
				featureType: "poi.park",
				elementType: "labels.text.fill",
				stylers: [{ color: "#9e9e9e" }],
			},
			{
				featureType: "road",
				elementType: "geometry",
				stylers: [{ color: "#ffffff" }],
			},
			{
				featureType: "road.arterial",
				elementType: "labels.text.fill",
				stylers: [{ color: "#757575" }],
			},
			{
				featureType: "road.highway",
				elementType: "geometry",
				stylers: [{ color: "#dadada" }],
			},
			{
				featureType: "road.highway",
				elementType: "labels.text.fill",
				stylers: [{ color: "#616161" }],
			},
			{
				featureType: "road.local",
				elementType: "labels.text.fill",
				stylers: [{ color: "#9e9e9e" }],
			},
			{
				featureType: "transit.line",
				elementType: "geometry",
				stylers: [{ color: "#e5e5e5" }],
			},
			{
				featureType: "transit.station",
				elementType: "geometry",
				stylers: [{ color: "#eeeeee" }],
			},
			{
				featureType: "water",
				elementType: "geometry",
				stylers: [{ color: "#c9c9c9" }],
			},
			{
				featureType: "water",
				elementType: "labels.text.fill",
				stylers: [{ color: "#9e9e9e" }],
			},
		];
		
		function initMap() {
			geocoder = new google.maps.Geocoder();
			map = new google.maps.Map(document.getElementById('map'), {
				// center: new google.maps.LatLng(-33.863276, 151.207977),
				zoom: 12,
				mapTypeControl: false
			});

			map.setOptions({ styles: silver });

			convertLatLong(0);
        	
			// var infoWindow = new google.maps.InfoWindow;
			// var markers = JSON.parse("<?php echo $markers?>");
			// Array.prototype.forEach.call(markers, function(markerElem) {
			// 	var id = markerElem.getAttribute('id');
			// 	var name = markerElem.getAttribute('name');
			// 	var address = markerElem.getAttribute('address');
			// 	var type = markerElem.getAttribute('type');
			// 	var point = new google.maps.LatLng(
			// 		parseFloat(markerElem.getAttribute('lat')),
			// 		parseFloat(markerElem.getAttribute('lng')));

			// 	var infowincontent = document.createElement('div');
			// 	var strong = document.createElement('strong');
			// 	strong.textContent = name
			// 	infowincontent.appendChild(strong);
			// 	infowincontent.appendChild(document.createElement('br'));

			// 	var text = document.createElement('text');
			// 	text.textContent = address
			// 	infowincontent.appendChild(text);
			// 	var icon = customLabel[type] || {};
			// 	var marker = new google.maps.Marker({
			// 	map: map,
			// 	position: point,
			// 	label: icon.label
			// 	});
			// 	marker.addListener('click', function() {
			// 	infoWindow.setContent(infowincontent);
			// 	infoWindow.open(map, marker);
			// 	});
			// });
		}
	</script>
	<?php
	$api_key = get_field('google_map_api_key', 'option');
	?>
	<script defer
	src="https://maps.googleapis.com/maps/api/js?key=<?php echo $api_key?>&callback=initMap">
	</script>
</section>