<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); // show the blog name, from settings ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
</title>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-LB8CTFQ4CY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-LB8CTFQ4CY');
</script>
	
<?php wp_head(); 
// This fxn allows plugins, and Wordpress itself, to insert themselves/scripts/css/files
// (right here) into the head of your website. 
// Removing this fxn call will disable all kinds of plugins and Wordpress default insertions. 
// Move it if you like, but I would keep it around.
?>
</head>
<body>


<header id="masthead" class="site-header">
    <div class="header-container">
	<div id="logo">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <img src="https://firebasestorage.googleapis.com/v0/b/portfolio-708bc.appspot.com/o/129538426_156294726181857_1548133163662862385_n.png?alt=media&token=bbeb00e3-56a4-4596-8a4b-21f9e0f0ad68" width="60" height="40"></a>
	</div>

	<nav class="site-navigation main-navigation">
		<?php wp_nav_menu( array( 'container_class' => 'main-nav', 'theme_location' => 'header' ) ); // Display the user-defined menu in Appearance > Menus ?>
    </nav><!-- .site-navigation .main-navigation -->
	</div>
</header><!-- #masthead .site-header -->
<main class="main-fluid">
    
