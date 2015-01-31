<?php 
include 'includes/filenames.php'; // define the filname for use in the project
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<?php
	$pagename= basename( $_SERVER['PHP_SELF'] );
	if 	($pagename == 'index.php') {
	 include banner_image_changer;
	}
	$title = ' Park Plumbing &amp; Tiling | Wall Tiling | Floor Tiling | Plumbing';
	
	$keywords = 'wall floor tiles Cardiff, Bridgend tiling, Llanharan plumbers, barry floor tiling and plumbing services, wood flooring, shower repair, shower replacement';
	
	$pageDesc = 'Plumbing and Tiling. we supply plumbing and wall or floor tiling services in the Cardiff and Pontyclun area, from a kitchen floor or bathroom floor tiles';
	
// set Banner Images for pages




		include header;?>
	<body>
	<?php
	    include_once("analyticstracking.php");
		include navigation; //navigation includes Logo etc
		?>
	
	<?php
	include  slider;
	?>	
	<!-- main content -->
    <div id="homepage">
      <!-- Introduction -->
      <section id="intro" class="clear">
        <article class="one_fifth">
          <figure><a href="#"><img src="images/130_small_bathroom.jpg" width="130" height="130" alt=""></a>
            <figcaption>Small Bathroom Refits</figcaption>
          </figure>
        </article>
        <article class="one_fifth">
          <figure><a href="#"><img src="images/toilet_basin.jpg" width="130" height="130" alt=""></a>
            <figcaption>Toilet &amp; Basin Replacement</figcaption>
          </figure>
        </article>
        <article class="one_fifth">
          <figure><a href="#"><img src="images/bath_shower.jpg" width="130" height="130" alt=""></a>
            <figcaption>Bath &amp; Shower Replacement</figcaption>
          </figure>
        </article>
        <article class="one_fifth">
          <figure><a href="#"><img src="images/large_showers.jpg" width="130" height="130" alt=""></a>
            <figcaption>Shower Trays &amp; Cubicles </figcaption>
          </figure>
        </article>
        <article class="one_fifth lastbox">
          <figure><a href="#"><img src="images/modern_taps.jpg" width="130" height="130" alt=""></a>
            <figcaption>Sinks &amp; Taps Fitted</figcaption>
          </figure>
        </article>
      </section>
      <!-- / Introduction -->
      <!-- ########################################################################################## -->
      <!-- Services -->
      <section id="services" class="last clear">
        <article class="one_third">
          <figure><img src="images/laying_tiles_cardiff.jpg" width="290" height="120" alt="">
            <figcaption>
              <h2>Full Tiling Service</h2>
              <p> Park Plumbing &amp; Tiling offer an experienced professional tiling service laid and installed to a perfectionist's standard.<br/>All budgets are catered for, from the simple splash back, to a floor, or even an entire room with under floor heating.</p>
            </figcaption>
          </figure>
        </article>
        <article class="one_third">
          <figure><img src="images/plumbing_tap.jpg" width="290" height="120" alt="">
            <figcaption>
              <h2>Plumbing Service</h2>
              <p>We carry out a complete household plumbing service ranging from instant repairs to the domestic water system to a breakdown of radiators and frozen or burst pipes and blocked toilets. We complete bathroom renovations and re-fits. Drawing from over years experience we are well placed to offer advice and help when you need it.</p>
            </figcaption>
          </figure>
        </article>
        <article class="one_third lastbox">
          <figure><img src="images/splashback_small_130.jpg" width="290" height="120" alt="Tile Splashback">
            <figcaption>
              <h2>Kitchen Splash Backs</h2>
              <p>Kitchen Splash Backs and kitchen wall tiling. Revamp your kitchen with new wall and floor tiles. Park Plumbing &amp; Tiling can advise help and guide you through every step of your kitchen renovation project.</p>
            </figcaption>
          </figure>
        </article>
      </section>
      <!-- / Services -->
    </div>
	</div>
    <!-- / content body -->

	<?php
		include footer;
	?>
	</body>
	</html>