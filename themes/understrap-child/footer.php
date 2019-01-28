<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<!-- Footer Bottom -->
<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-6">

				<footer class="site-footer" id="colophon">

					<div class="site-info">
                        ©
                    <?php echo Date('Y'); ?>
                        <?php bloginfo(); ?>
                    Powered by | <?php bloginfo(); ?>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

            </div><!--col end -->
            <div class="col-md-6 site-info AP">Website made by Allen Pavic</div>

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
