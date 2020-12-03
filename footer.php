<!-- / end page container, begun in the header -->


<!------------------PC NAV----------------->

<footer class="site-footer-pc">

<div id="footer_container">
<br><br><br><br><br><br><br><br><br>
            <div id="footer_bottom">
                <div id="footer_box">
                    <h4>Åbningstider:</h4>
					<p>Man-Tor: 10:00-17:30</p>
					<p>Fredag: 10:00-18:00</p>
                    <p>Lørdag: 10:00-15:00</p>
                    <p>Søndag: LUKKET</p>
                </div>
                <div id="footer_box">
					<h4>Find os her:</h4>
                    <p>Kongensgade 3</p>
                    <p>6700 Esbjerg</p>
					<p>Telefon: +45 75139977</p>
					<a href="https://www.facebook.com/Bogormendk/" target=_blank><i class="fa fa-facebook"></i></a>
                </div>
            </div>
            <div id="footer_text">
                <p>MMD 3rd semester project 2020</p>
                <p>Copyright by #groupgoals</p>
                <p>Created for Bogormen</p>
            </div>
        </div>
</footer>

<!-----------------MOBILE NAV----------->

<footer class="site-footer-mobile">

<nav>
		<?php wp_nav_menu( array( 'container_class' => 'main-nav', 'theme_location' => 'footer' ) ); // Display the user-defined menu in Appearance > Menus ?>
</nav>
</footer>


<!-- #colophon .site-footer -->



<?php 'wp_footer'(); 
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website. 
// Removing this fxn call will disable all kinds of plugins. 
// Move it if you like, but keep it around.
?>

</main>
</body>
</html>