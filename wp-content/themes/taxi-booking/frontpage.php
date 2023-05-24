<?php 

/* Template Name: Front Page Template */

get_header(); ?>

<div id="content">
	<?php get_template_part( 'core/sections/car-slider' ); ?>
	<?php get_template_part( 'core/sections/vehicle-booking' ); ?>
	<?php get_template_part( 'core/sections/additional-content' ); ?>
</div>

<div id="map"></div>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
<script>
  function initMap() {
    var mapOptions = {
      center: { lat: 40.7128, lng: -74.0060 }, // Set the initial map center coordinates
      zoom: 12 // Set the initial zoom level
    };
    var map = new google.maps.Map(document.getElementById('map'), mapOptions);
    // Customize the map, add markers, etc.
  }
  initMap();
</script>


<?php get_footer(); ?>