<?php 
include 'includes/filenames.php'; // define the filname for use in the project
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<?php
	$pagename= basename( $_SERVER['PHP_SELF'] );
	if 	($pagename == 'feedback.php') {
	 include banner_image_changer;
	}
	$title = 'Customers Tiling Reviews| Park Plumbing &amp; Tiling| Tiler Services';
	
	$keywords = 'tiler in cardiff, wall floor tiles Cardiff, Bridgend tiling, Llanharan plumbers, barry floor tiling and plumbing services, wood flooring, shower repair, shower replacement';
	
	$pageDesc = 'Reviews and feedback on of tiling and plumbing work from floors to bathrooms I aim to please all my clients';
	
	
		include header;?>
	<body>
	
	<?php
	include_once("analyticstracking.php");
		include navigation; //navigation includes Logo etc
		?>
	
	<?php
	include  slider;
	?>	
	<div class="wrapper row2">
	  <div id="container" class="clear">
	    <!-- content body -->
	    <div id="content">
	      </section>
	      <section id="comments">
	        <h2>Customer Feedback</h2>
	        <ul>
	          <li class="comment_odd">
	            <article>
	              <header>
	                <figure><img src="images/demo/avatar.gif" width="32" height="32" alt=""></figure>
	                <address>
	                By <a href="#">rhi_82</a>
	                </address>
	                <time datetime="2012-07-13T08:15+00:00">Friday, 13<sup>th</sup> July 2012 @08:15:00</time>
	              </header>
	              <section>
	                <p>Matt was brilliant. He phoned me and I explained the job I wanted and that I hadn't yet bought the tiles but I described the style. That evening he came to my house and brought a sample tile, made useful suggestions which have really made a difference to the way the kitchen now looks and was friendly and polite. His work is excellent, he is fast and good at communicating what is happening. My family and friends who have seen the finished result have now asked for his contact details for when they need work done. Thanks Matt, we're really happy with your work</p>
	              </section>
	            </article>
	          </li>
	          <li class="comment_even">
	            <article>
	              <header>
	                <figure><img src="images/demo/avatar.gif" width="32" height="32" alt=""></figure>
	                <address>
	                By <a href="#">Grant CF45</a>
	                </address>
	                <time datetime="2010-06-029T08:15+00:00">Wednesday, 29<sup>th</sup> June 2010 @13:12:00</time>
	              </header>
	              <section>
	                <p>We've been really pleased by all aspects of the work carried out. The job was completed to a very high standard, within the timeframes given and in accordance with the quote. We were totally satisfied with an excellent job well done - would whole heartedly recommend.</p>
	              </section>
	            </article>
	          </li>
	          <li class="comment_odd">
	            <article>
	              <header>
	                <figure><img src="images/demo/avatar.gif" width="32" height="32" alt=""></figure>
	                <address>
	                By <a href="#">G Eccles</a>
	                </address>
	                <time datetime="2011-04-01T08:15+00:00">Monday, 1<sup>th</sup> April 2011 @08:15:00</time>
	              </header>
	              <section>
	                <p>Excellent work. Bathroom is lovely. Matt is punctual and hard working. Would recommend.</p>
	              </section>
	            </article>
	          </li>
	        </ul>

	      </section>
	      <!-- ########################################################################################## -->
	      <!-- ########################################################################################## -->
	      <!-- ########################################################################################## -->
	      <!-- ########################################################################################## -->
	    </div>
	    <!-- right column -->
	    <aside id="right_column">
	      <!-- ########################################################################################## -->
	      <!-- ########################################################################################## -->
	      <!-- ########################################################################################## -->
	      <!-- ########################################################################################## -->

	      <section>
	        <h2>Get In Touch</h2>
	        <address>
	        Park Plumbing &amp; Tiling<br>
	        37 St Peters Avenue<br>
	        Llanharan<br>
	        Pontylun<br>
	        CF72 9UQ<br>
	        <br>
	        Tel: 07789 711799<br>
	        Email: <a href="#">matt@parkplumb.co.uk</a>
	        </address>
	      </section>
	      <!-- /section -->
	      <section>
	        <article>
	          <h2>Find me online</h2>
	          <p>Below are a few of the other places you can engage my services online.</p>
	          <ul>
	            <li><a href="http://www.mybuilder.com/profile/view/park-plumbing-and-tiling">My Builder</a></li>
	<li><a href="http://www.facebook.com/pages/Park-Plumbing-Tiling/241690335962785?ref=stream">Facebook</a></li>
	            <li><a href="http://www.ratedpeople.com/profile/park-plumbing-and-tiling/index">Rated People</a></li>
	          </ul>
	          <p>Online by email or over the phone if you have a question about bathroom or kitchen tiling, plumbing wet-rooms or anything else I am always happy to help you. Just drop me a line.</p>
	        </article>
	      </section>
	      <!-- /section -->
	      <!-- ########################################################################################## -->
	      <!-- ########################################################################################## -->
	      <!-- ########################################################################################## -->
	      <!-- ########################################################################################## -->
	    </aside>
	    <!-- / content body -->
	  </div>
	</div>
	</div>
		<div class="wrapper row3">
	<?php
		include footer;
	?>
	</div>
	</body>
	</html>