<?php 

get_header(); // This fxn gets the header.php file and renders it ?> 
   
<div class="about-section">
  <h2><?php the_field('about-banner-header'); ?></h2>
 	<?php the_field('about-banner-text'); ?>
</div>

<h3 style="text-align:center"><?php the_field('about-section1-header'); ?></h3>
<div class="row">
  <div class="column-about">
    <div class="card">
      <img src="<?php the_field('about-owner-image'); ?>" alt="Jesper">
      <div class="container-about">
        <h3><?php the_field('about-owner-name'); ?></h3>
        <p class="title"><?php the_field('about-owner-title'); ?></p>
			<?php the_field('about-owner-text'); ?>
		  <p><strong>Mail: </strong><?php the_field('about-owner-mail'); ?>
	
		  </p>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>