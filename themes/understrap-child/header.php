<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="shop, outdoors">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site" id="page">

<!-- Top Bar -->
<div class="top-bar-wrap">
    <nav class="navbar fixed navbar-expand-lg navbar-dark primary-color top-bar">
      <div class="container">
       
        <button id="navbar-toggler-top-bar" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        <div class="collapse navbar-collapse top-bar-list" id="navbarText">
          

          <ul class="navbar-nav ml-auto top-bar-list">
            <li class="nav-item">
              <a class="nav-link" href="#">About
          <span class="sr-only">(current)</span>
        </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">PH: (05) 12345678</a>
            </li>
            <!-- Hide on Desktop -->
            
            <!-- ./Hide-->

            <!-- SHOPPING CART -->
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light">
          <i class="fa fa-shopping-cart nav-icons"> 0 ITEMS</i>
        </a>
            </li>
            <!-- ./End SHOPPING CART -->

            <!-- SOCIAL ICONS -->
            <li class="nav-item top-bar-icons">
              <a class="nav-link waves-effect waves-light">
          <i class="fa fa-facebook nav-icons"></i>
        </a>
            </li>
            <li class="nav-item top-bar-icons">
              <a class="nav-link waves-effect waves-light">
          <i class="fa fa-twitter nav-icons"></i>
        </a>
            </li>
            <li class="nav-item top-bar-icons">
              <a class="nav-link waves-effect waves-light">
          <i class="fa fa-google-plus nav-icons"></i>
        </a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light">
          <i class="fa fa-youtube nav-icons"></i>
        </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user nav-icons"></i>
        </a>
              <!-- ./End SOCIAL ICONS -->

              <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                <a class="dropdown-item" href="#">Login</a>
                <a class="dropdown-item" href="#">My Account</a>
                <a class="dropdown-item" href="#">Log out</a>

              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!--./End Top-Bar -->

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-lg navbar-dark bg-primary primary-menu">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>


					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
                ); ?>

			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
            <?php endif; ?>
            
           
		</nav><!-- .site-navigation -->

  </div><!-- #wrapper-navbar end -->
 