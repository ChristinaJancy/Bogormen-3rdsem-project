<?php
/**
 * The template for displaying any single page.
 *
 */

get_header(); // This fxn gets the header.php file and renders it ?>
  <div class="contact-banner">
    <h2>KONTAKT OS</h2>
    <p>Kom forbi og få en snak, eller skriv til os her:</p>
  </div>
	<div id="primary" class="row-fluid">
		<div id="content" role="main" class="span8 offset2">
		<div class="container-contact">
  <div class="row">
    <div class="column">
      <img src="https://www.esbjergcity.dk/wp-content/uploads/2018/05/Bogormen.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">Fornavn</label>
        <input type="text" id="fname" name="firstname" placeholder="Dit fornavn..">
        <label for="lname">Efternavn</label>
        <input type="text" id="lname" name="lastname" placeholder="Dit efternavn..">
        <label for="country">Country</label>
        <select id="country" name="country">
			<option value="danmark">Danmark</option>
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
        <label for="emne">Emne</label>
        <textarea id="emne" name="emne" placeholder="Skriv dit emne her..." style="height:170px"></textarea>
        <input type="send" value="Send">
      </form>
    </div>
  </div>
</div>
		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>