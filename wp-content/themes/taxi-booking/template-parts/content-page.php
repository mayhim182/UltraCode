<?php
  global $post;
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('page-single p-3 mb-4'); ?>>
  <?php if ( has_post_thumbnail() ) { ?>
    <div class="post-thumbnail">
      <?php the_post_thumbnail(''); ?>
    </div>
  <?php }?>
  <h1 class="post-title"><?php the_title(); ?></h1>
  <div class="post-content">
    <?php the_content(); ?>
  </div>
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
