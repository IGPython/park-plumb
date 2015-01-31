<?php 
include 'includes/filenames.php'; // define the filname for use in the project
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<?php
	$pagename= basename( $_SERVER['PHP_SELF'] );
	if 	($pagename == 'laminate.php') 
	{
	 include banner_image_changer;
	}
	else
	{
		$pagename = 'index.php';
	}
	$title = 'Real Wood and Laminate Floors | Park Plumbing &amp; Tiling';
	
	$keywords = 'real wood floor, laminate floor, plumbing, tiling, south wales,  ';
	
	$pageDesc = 'Real wood and laminate flooring laid, along with tiling and plumbing services all at affordable rates';
	
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
				            <div class="figure"><a href="#"><img src="images/tile_effect_laminate_flooring.jpg" alt="Tile Effect Laminate" /></a>
				              <div class="figcaption">
				                <h2>Tile Effect Laminate</h2>
				                <p class="one_third">Tile effect laminate flooring is ideal for kitchens and bathrooms and looks just like tiles.</p>
				              </div>
				            </div>
				          </div>
				        </li>
				        <li>
				          <div class="article">
				            <div class="figure"><a href="#"><img src="images/laminate_whats_in.jpg" alt="Porcelain Floor Tiles Laid" /></a>
				              <div class="figcaption">
				                <h2>Laminate Flooring Laid </h2>
				                <p class="one_third">The construction makes it a solid, stable and attractive choice for any area of the home</p>
				              </div>
				            </div>
				          </div>
				        </li>
				        <li class="last">
				          <div class="article">
				            <div class="figure"><a href="#"><img src="images/solid_wood_small.jpg" alt=" Real wood floors" /></a>
				              <div class="figcaption">
				                <h2>Real Wood Flooring</h2>
				                <p class="one_third">Real wood flooring makes for a premier finish to any room of hallway kitchen or bathroom. It radiates warmth and lasts decades</p>
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