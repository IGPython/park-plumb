<?php
/*
Image Changer Changes Images Depenent on page name & text 
Written By: Rhys Park

*/

If ($pagename == 'index.php' || $pagename == 'feedback.php'){


		define('image1', 'images/shower_tiles.jpg');
		define('image2', 'images/wetrooms.jpg');
		define('image3', 'images/bathrooms.jpg');
		define('image4', 'images/kitchen.jpg');

		//IMAGE 1 DETAILS
		define('image1_name', 'Exceptional bathroom tiling and plumbing service from floors to walls');
		define('image1_title', 'Exceptional Bathrooms');
		define('image1_desc', 'From tiling toilets, floors, sinks and basins whatever your design ideas Park Plumbing &amp; will help you every step of the way.');

		// IMAGE 2 DETAILS
		define('image2_name', 'Park plumbing offer a full wet room fitting service from design to installation');
		define('image2_title', 'Fully Tiled Wet Rooms');
		define('image2_desc', 'No longer is a wet room considered a necessity in the holiday home abroad they are now seen as the low maintenance wash and go option for many people. call today for a free estimate');

		// IMAGE 3 DETAILS

		define('image3_name', 'From a simple new toilet or a kitchen splash back Park plumbing &amp; tiling offer a complete service');
		define('image3_title', 'Complete Bathrooms');
		define('image3_desc', 'From installation of a new toilet to a complete bathroom. Park Plumbing &amp; Tiling can install you toilets, sink basins, taps and showers anywhere in, Cardiff, Vale of Glamorgan and the South Wales Region.');

		// IMAGE 4 DETAILS
		define('image4_name', 'Kitchen splash backs and flooring laid from granite to marble and porcelain');
		define('image4_title', 'Kitchen Wall &amp; Floor Tiling');
		define('image4_desc', 'Need a new kitchen floor? or a small wall tiled? to complete kitchen refurbishments including worktops and sinks no job to big or too small Call Now for a free estimate');
}

//*****************************
// Tile Floor Page

If ($pagename == 'flooring.php') {
	define('image1', 'images/stone_floor.jpg');
	define('image2', 'images/porcelain_floor_tiles.jpg');
	define('image3', 'images/kitchen_floor.jpg');
	define('image4', 'images/gloss_tiles.jpg');

	//IMAGE 1 DETAILS
	define('image1_name', 'Stone Flooring');
	define('image1_title', 'Stone Floors');
	define('image1_desc', 'Natural stone flooring laid and sourced, natural stone floor tiles offer beautiful natural finishes and turn any kitchen of tiled utility room into a beautiful central point of any house.');

	// IMAGE 2 DETAILS
	define('image2_name', 'Porcelain floor tiles laid and grouted');
	define('image2_title', 'Porcelain Floor Tiles ');
	define('image2_desc', 'Porcelain Floor Tiles are easy to clean, cost effective and when your bathroom or kitchen is tiled make a stunning feature of any room I take extra care to ensure that joints are hard wearing and look perfect day in day out');

	// IMAGE 3 DETAILS

	define('image3_name', 'Tiling you kitchen floor can make any kitchen a modern elegant feature in any home');
	define('image3_title', 'Kitchen Floors');
	define('image3_desc', 'Tiling your kitchen floor can turn any kitchen into a modern central focal point of any home, from porcelain tiles stone tiles to composite tiles we lay them with care ensuring your dream floor is a reality');

	// IMAGE 4 DETAILS
	define('image4_name', 'Floor tiles are a great addition to any room');
	define('image4_title', 'High Gloss Flooring');
	define('image4_desc', 'Floor Tiles are a great addition to any home. Regardless of the home decor and design floor tiles may be added to any room to create a fresh and clean look. ');
}
//************************************
//Laminate Page Start

If ($pagename == 'laminate.php'){


		define('image1', 'images/laminate_flooring.jpg');
		define('image2', 'images/laminate_flooring2.jpg');
		define('image3', 'images/tile_effect_laminate.jpg');
		define('image4', 'images/solid_wood_flooring.jpg');

		//IMAGE 1 DETAILS
		define('image1_name', 'Laminate flooring for kitchens and bathrooms and living rooms laid');
		define('image1_title', 'Laminate Flooring');
		define('image1_desc', 'From kitchens to living rooms and bathrooms laminate flooring is highly resistant to scuffs and wear. Moisture resistance makes it ideal for kitchens, utility rooms and bathroom floors');

		// IMAGE 2 DETAILS
		define('image2_name', 'Laminate floors laid with care and precision');
		define('image2_title', 'Laminate Living Room');
		define('image2_desc', 'Ideal for living rooms and hallways with its strong durable finish we fit laminate flooring all over South Wales');

		// IMAGE 3 DETAILS

		define('image3_name', 'Tile effect laminate is popular in kitchens and bathrooms');
		define('image3_title', 'Tile Effect Laminate');
		define('image3_desc', "Tile effect laminate is supreme where you would like the look and effect of tiles but don't want the hard tile floor, Tile effect laminate is very popular in new bathrooms and kitchens due to its high resistance to water");

		// IMAGE 4 DETAILS
		define('image4_name', 'Real Wood Floor');
		define('image4_title', 'Real wood flooring');
		define('image4_desc', 'Good wood flooring last for decades, is easy to clean and works well with underfloor heating. Wood has a natural warmth that radiates throughout the house and gives that quality feel to any room');
}
//******************************************
// Start of Wall Tiling Page banner

If ($pagename == 'walltiling.php') {
	define('image1', 'images/wall_tiles_bathroom.jpg');
	define('image2', 'images/wall_tiles_sink.jpg');
	define('image3', 'images/wall_tiles_2.jpg');
	define('image4', 'images/kitchen_wall_tiles.jpg');

	//IMAGE 1 DETAILS
	define('image1_name', 'Bathroom Wall Tiles');
	define('image1_title', 'Bathroom Wall Tiling');
	define('image1_desc', 'Modern or classic, whatever your taste wall tiles set off any shower or bathroom and give a clean and modern look for your dream bathroom .');

	// IMAGE 2 DETAILS
	define('image2_name', 'Sinks And Basins');
	define('image2_title', 'Utility Rooms and Cloakrooms');
	define('image2_desc', 'Clean hygienic and beautiful Park plumbing and tiling can create a stunning design for you wall tiles only limited by your imagination. Cloakroom tiling is clean bright and more hygienic than carpet');

	// IMAGE 3 DETAILS

	define('image3_name', 'Tiling you kitchen floor can make any kitchen a modern elegant feature in any home');
	define('image3_title', 'Cloakroom ');
	define('image3_desc', 'Tiling your spare toilet on-suite bathroom or just your utility room can give a clean and pleasant look to any room. Incorporate chrome fittings vanity mirrors and shaving sockets for that extra touch.');

	// IMAGE 4 DETAILS
	define('image4_name', 'Floor tiles are a great addition to any room');
	define('image4_title', 'Kitchen Splash-Backs');
	define('image4_desc', 'Set of that new kitchen with a stunning tile splash-back fitted by Matthew of Park Plumbing and Tiling, with stainless steel trims and plug-tops your kitchen can look simply stunning. ');
}
?>
