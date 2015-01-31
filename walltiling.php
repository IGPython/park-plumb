<?php 
include 'includes/filenames.php'; // define the filname for use in the project
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<?php
	$pagename= basename( $_SERVER['PHP_SELF'] );
	if 	($pagename == 'walltiling.php') {
	 include banner_image_changer;
	}
	$title = 'Wall Tiles and Tiling | Park Plumbing &amp; Tiling';
	
	$keywords = 'bathroom wall tiling, wall tiles, floor tiling, bathroom fitters, plumbers in llanharan, plumbers in pencoed, Cardiff plumbers ';
	
	$pageDesc = 'Wall tiling services from bathroom wall tiling and shower replacement to kitchen splash backs and kitchen floor tiling services Park Tiling and Plumbing are always happy to help';
	
		include header;?>
	<body>
	
	<?php
	include_once("analyticstracking.php");
		include navigation; //navigation includes Logo etc
		?>
	
	<?php
	include  slider;
	?>	</div>
		<div class="wrapper row3">
				<div class="wrapper row3">

					<div class="wrapper row2">
					  <div id="container" class="clear">
					    <div id="portfolio" class="clear">
					      <ul>
					        <li>
					          <div class="article">
					            <div class="figure"><a href="#"><img src="images/shower_tiles_tray.jpg" alt="Shower Trays and Tiles cubicals" /></a>
					              <div class="figcaption">
					                <h2>Shower Trays &amp; Tiles</h2>
					                <p class="one_third">Bathroom shower trays and shower splash backs bake for a stunning modern bathroom design.</p>
					              </div>
					            </div>
					          </div>
					        </li>
					        <li>
					          <div class="article">
					            <div class="figure"><a href="#"><img src="images/kitchen_wall_small.jpg" alt="Kitchen Walls &amp; Splash Backs" /></a>
					              <div class="figcaption">
					                <h2>Kitchen Walls Tiles </h2>
					                <p class="one_third">Tiles in the kitchen are hygienic and easy to clean, setting off any kitchen by tiling the walls makes for a clean and bright environment</p>
					              </div>
					            </div>
					          </div>
					        </li>
					        <li class="last">
					          <div class="article">
					            <div class="figure"><a href="#"><img src="images/cloakroom_tiling.jpg" alt="Cloak Rooms" /></a>
					              <div class="figcaption">
					                <h2>Cloakroom Tiling</h2>
					                <p class="one_third">You chose the tiles you chose the design and Matt from Park Plumbing and tiling will make your vision a reality.</p>
					              </div>
					            </div>
					          </div>
					        </li>



					      </ul>
					    </div>
					  </div>
					</div>
	<?php
		include footer;
	?>
	</div>
	</body>
	</html>