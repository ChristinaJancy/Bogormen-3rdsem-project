<?php
get_header(); // This fxn gets the header.php file and renders it 
?>



<div class="row" id="home-section1">
    <section>
      <div class="col" id="home-col1">
      <h2><?php the_field('col1-h2'); ?></h2>	
	<p class="site-description">
        <?php 'bloginfo'('description'); // Display the blog description, found in General Settings ?>
        </p>
		  <?php the_field('col1-text'); ?>
		  
     
      </div>
    </section>
  <div class="col bgimg" id="home-col2">

  </div>

</div>
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