### When choosing page as frontpage, add script to pages.php to display the Hero Slider & Hero Canvas widgets.

Right above the beginning

```
 <div class="wrapper" id="page-wrapper">

```

```
<?php if ( is_front_page() ) : ?>
	<?php get_template_part( 'global-templates/hero', 'none' ); ?>
<?php endif; ?>

```
