
<?
/* 
Image banner jsquery 
revised by Rhys Park 

*/
?>
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- Slider -->
    <section id="featured_slide">
      <!-- ########################################################################################## -->
      <div id="slider">
        <ul>
          <li>
            <figure><img src="<? echo image1?>" alt="<? echo image1_name ?>" />
              <figcaption>
                <h2><?echo image1_title ?></h2>
                <p><? echo image1_desc ?></p>
              </figcaption>
            </figure>
          </li>
          <li>
            <figure><img src="<? echo image2 ?>" alt="<? echo image2_name ?>" />
              <figcaption>
                <h2><?echo image2_title ?></h2>
                <p><?echo image2_desc ?></p>
              </figcaption>
            </figure>
          </li>
          <li>
            <figure><img src="<? echo image3 ?>" alt="<? echo image3_name?>" />
              <figcaption>
                <h2><?echo image3_title ?></h2>
                <p><?echo image3_desc ?></p>
                <?php // <footer class="more"><a href="#">Read More &raquo;</a></footer>   REMOVED?>
              </figcaption>
            </figure>
			<li>
	            <figure><img src="<? echo image4 ?>" alt=" <? echo image4_name?>" />
	              <figcaption>
	                <h2><?echo image4_title ?></h2>
	                <p><?echo image4_desc?> </p>
	              </figcaption>
	            </figure>
	          </li>
          </li>
        </ul>
      </div>
      <!-- ########################################################################################## -->
    </section>

<?php
include contact;
?>
