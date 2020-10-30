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
	
	<img data-aos="fade-in" src="<?= $backgroundThumb; ?>" class="img-fluid">
	<div class="map-container">
		<div class="map-wrap" id="map">
		</div>
	</div>
	<?php
	$locations = array();
	?>
	<?php if( have_rows('locations') ): while ( have_rows('locations') ) : the_row(); ?>
		<?php
		$address = get_field('address');
		$locations[] = $address;
		?>
	<?php endwhile; endif; ?>
	<script>
		var geocoder;
		var map;
		var locations = JSON.parse("<?php echo json_encode($locations)?>");
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
					console.log(results);
					// map.setCenter(results[0].geometry.location);
					// var marker = new google.maps.Marker({
					// 	map: map,
					// 	position: results[0].geometry.location
					// });
				} else {
					alert('Geocode was not successful for the following reason: ' + status);
				}
			});
			}
		}
		function initMap() {
			geocoder = new google.maps.Geocoder();
			map = new google.maps.Map(document.getElementById('map'), {
				center: new google.maps.LatLng(-33.863276, 151.207977),
				zoom: 12
			});

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