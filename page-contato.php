<?php get_header(); ?>

<div class="container">
	<main id="main" class="site-main hentry" role="main" style="margin-bottom: 0">
		<?php echo do_shortcode("[contact-form-7 id='4' title='Formulário de contato']"); ?>
	</main>

	<div id = "map-canvas"></div>
</div>
<?php get_footer(); ?>

<script src = "https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script src = "<?php bloginfo('stylesheet_directory');?>/js/map.js"></script>