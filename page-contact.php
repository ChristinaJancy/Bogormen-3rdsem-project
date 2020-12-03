<?php
/**
 * The template for displaying any single page.
 *
 */

get_header(); // This fxn gets the header.php file and renders it ?>
<div id="snackbar">Some text some message..</div>

  <div class="contact-banner">
    <h2><?php the_field('contact-banner-header'); ?></h2>
	  <?php the_field('contact-banner-text'); ?>
  </div>
	<div id="primary" class="row-fluid">
		<div id="content" role="main" class="span8 offset2">
		<div class="container-contact">
  <div class="row">
    <div class="column">
      <img src="<?php the_field('contact-col1-img'); ?>" style="width:100%">
    </div>
    <div class="column">
      <form action="">
        <label for="fname"><?php the_field('contact-form-firstname'); ?></label>
        <input type="text" id="fname" name="firstname" placeholder="Dit fornavn..">
        <label for="lname"><?php the_field('contact-form-lastname'); ?></label>
        <input type="text" id="lname" name="lastname" placeholder="Dit efternavn..">
        <label for="emne"><?php the_field('contact-form-subject'); ?></label>
        <select id="emne" name="emne">
			<option value="køb"><?php the_field('contact-form-subject1'); ?></option>
          	<option value="salg"><?php the_field('contact-form-subject2'); ?></option>
          	<option value="retur_ønske"><?php the_field('contact-form-subject3'); ?></option>
          	<option value="andet"><?php the_field('contact-form-subject4'); ?></option>
        </select>
        <label for="beskrivelse"><?php the_field('contact-form-description'); ?></label>
        <textarea id="beskrivelse" name="beskrivelse" placeholder="Beskriv din henvendelse her..." style="height:170px"></textarea>
        <input type="submit" value="Send" onclick="myFunction()">
      </form>
    </div>
  </div>
</div>
		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>