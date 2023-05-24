<?php get_header(); ?>

<div id="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 mt-5">
        <div class="row">
          <?php
            if ( have_posts() ) :

              while ( have_posts() ) :

                the_post();
                get_template_part( 'template-parts/content' );

              endwhile;

            else:

              esc_html_e( 'Sorry, no post found on this archive.', 'taxi-booking' );

            endif;

            get_template_part( 'template-parts/pagination' );
          ?>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
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

<?php get_footer(); ?>