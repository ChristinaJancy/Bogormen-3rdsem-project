<!-- / end page container, begun in the header -->


<!------------------PC NAV----------------->

<footer class="site-footer-pc">

<div id="footer_container">
<br><br><br><br><br><br><br><br><br>
            <div id="footer_bottom">
                <div id="footer_box">
                    <h4><?php the_field('pc-footer-col1-header'); ?></h4>
						<?php the_field('pc-footer-col1-text'); ?>
                </div>
                <div id="footer_box">
					<h4><?php the_field('pc-footer-col2-header'); ?></h4>
					<?php the_field('pc-footer-col2-text'); ?>
					<a href="https://www.facebook.com/Bogormendk/" target=_blank><i class="fa fa-facebook"></i></a>
                </div>
            </div>
            <div id="footer_text">
        		<?php the_field('footer-copyright-text'); ?>
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