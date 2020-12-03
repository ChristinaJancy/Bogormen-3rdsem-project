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
<div class="video-section">
  <h2>KOM INDENFOR</h2>
</div>
<br><br>
<section class="video flex">
    <div class="container-box">
      <article class="container-iframe">
        <iframe width="560" height="315" class="resp-iframe"
         src="https://www.youtube.com/embed/Z1wKe9kSFeE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </article>
    </div>
</section>

<?php 'get_footer'(); // This fxn gets the footer.php file and renders it 
?>