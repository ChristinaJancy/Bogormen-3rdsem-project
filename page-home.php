<?php
get_header(); // This fxn gets the header.php file and renders it 
?>



<div class="row" id="home-section1">
    <section>
      <div class="col" id="home-col1">
        <h2>BOGORMEN</h2>
        <p class="site-description">
        <?php 'bloginfo'('description'); // Display the blog description, found in General Settings ?>
        </p>
     
        <p id="home-col1-p">
        Bogormen er Jyllands største køb-salg-bytte forretning indenfor bøger, LP'er, CD'er, DVD'er, Spil og erotik. Både nye og brugte varer sælges. 
        </p>
      </div>
    </section>
  <div class="col bgimg" id="home-col2">

  </div>

</div>

<?php 'get_footer'(); // This fxn gets the footer.php file and renders it 
?>