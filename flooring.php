<?php 
include 'includes/filenames.php'; // define the filname for use in the project
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<?php
	$pagename= basename( $_SERVER['PHP_SELF'] );
	if 	($pagename == 'flooring.php') 
	{
	 include banner_image_changer;
	}
	else
	{
		$pagename = 'index.php';
	}
	$title = 'Tile Flooring | Park Plumbing &amp; Tiling';
	
	$keywords = 'wall floor tiles Cardiff, Bridgend tiling, Llanharan plumbers, barry floor tiling and plumbing services, wood flooring, shower repair, shower replacement';
	
	$pageDesc = 'Plumbing and Tiling. Friendly local plumber and tiler in South Wales, from Kitchens to bathrooms, sinks to baths, toilets to showers free estimate and all work guaranteed';
	
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
			
			<div class="wrapper row2">
			  <div id="container" class="clear">
			    <div id="portfolio" class="clear">
			      <ul>
			        <li>
			          <div class="article">
			            <div class="figure"><a href="#"><img src="images/natural_stone_floor.jpg" alt="Natural stone flooring laid" /></a>
			              <div class="figcaption">
			                <h2>Beautiful Stone Tiles</h2>
			                <p class="one_third">Stone Tiles laid in your kitchen or living room make a beautiful addition to any home</p>
			              </div>
			            </div>
			          </div>
			        </li>
			        <li>
			          <div class="article">
			            <div class="figure"><a href="#"><img src="images/porcelain_floor.jpg" alt="Porcelain Floor Tiles Laid" /></a>
			              <div class="figcaption">
			                <h2>Porcelain Floor Tiles </h2>
			                <p class="one_third">Porcelain Floor tiles show off any room in the home clean and cost effective</p>
			              </div>
			            </div>
			          </div>
			        </li>
			        <li class="last">
			          <div class="article">
			            <div class="figure"><a href="#"><img src="images/granite_floor_tiles.jpg" alt=" Steel grey Granite Flooring Tiles" /></a>
			              <div class="figcaption">
			                <h2>Granite Floor Tiles</h2>
			                <p class="one_third">Granite floor tiles are a popular choice and offer durability and a premier finish</p>
			              </div>
			            </div>
			          </div>
			        </li>
			        <li>
			          <div class="article">
			            <div class="figure"><a href="#"><img src="images/ceramic_floor_tiles.jpg" alt="Ceramic flooring laid and grouted" /></a>
			              <div class="figcaption">
			                <h2>Ceramic Floor Tiles</h2>
			                <p class="one_third">With a decorative look laying ceramic floor tiles make any room look great and are maintenance free</a></p>
			              </div>
			            </div>
			          </div>
			        </li>
			        <li>
			          <div class="article">
			            <div class="figure"><a href="#"><img src="images/travertine_floor_tiles.jpg" alt="Travertine floor tiles laid and fitted" /></a>
			              <div class="figcaption">
			                <h2>Travertine Floor Tiles</h2>
			                <p class="one_third">Travertine floor tiles bring sophistication and a strong interior design theme to any home</p>
			              </div>
			            </div>
			          </div>
			        </li>
			        <li class="last">
			          <div class="article">
			            <div class="figure"><a href="#"><img src="images/marble_floor_tiles.jpg" alt="Natural marble floor tiles laid" /></a>
			              <div class="figcaption">
			                <h2>Marble Floor Tiling</h2>
			                <p class="one_third">Marble floor tiles are a natural product and give a beautiful finish to any room, marble bust be honed and sealed if used in a kitchen or bathroom.</a></p>
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