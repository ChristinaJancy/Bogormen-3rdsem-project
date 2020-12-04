<?php
get_header(); // This fxn gets the header.php file and renders it 
?>

<section>
<h2 style="text-align:center;"><?php the_field('col1-h2'); ?></h2>	
<div class="row" id="home-section1">
    <div id="home-col1">
     
	<p class="site-description">
        <?php 'bloginfo'('description'); // Display the blog description, found in General Settings ?>
        </p>
		  <?php the_field('col1-text'); ?>
      </div>
    
  <div id="home-col2">
    <img class="icons" src="<?php the_field('icons'); ?>" alt="">
  </div>

</div>

</section>
<div class="video-section">
  <h2><?php the_field('video-header'); ?></h2>
</div>
<br><br>
<section class="video flex">
    <div class="container-box">
      <article class="container-iframe">
        <iframe width="560" height="315" class="resp-iframe"
         src="<?php the_field('video'); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </article>
    </div>
</section>

<?php 'get_footer'(); // This fxn gets the footer.php file and renders it 
?>