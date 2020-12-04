<?php 

get_header(); // This fxn gets the header.php file and renders it ?> 
   
<div class="about-section">
  <h2><?php the_field('about-banner-header'); ?></h2>
 	<?php the_field('about-banner-text'); ?>
</div>
<h3 style="text-align:center"><?php the_field('about-section1-header'); ?></h3>
<div class="row-about">
  <div class="column-about">
      <img src="<?php the_field('about-owner-image'); ?>" alt="Jesper">

  </div>

  <div class="column-about">
  <div class="text-box">
        <h3><?php the_field('about-owner-name'); ?></h3>
        <p><?php the_field('about-owner-title'); ?></p>
        <?php the_field('about-owner-text'); ?>
      </div>
  </div>
</div>

<section class="mobile-section">
  <div class="opening-hours mobile-only">
    <h4><?php the_field('pc-footer-col1-header'); ?></h4>
    <?php the_field('pc-footer-col1-text'); ?>
  </div>
  <div class="find-us mobile-only">
    <h4><?php the_field('pc-footer-col2-header'); ?></h4>
    <?php the_field('pc-footer-col2-text'); ?>
  </div>
</section>

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>