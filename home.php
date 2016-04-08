<?php
/**
 * The home template file.
 *
 * @package Perth
 */

get_header(); ?>

<div class="container post">
			<?php if ( have_posts() ) : ?>
				<div class="post-capa clearfix post-capa-border">
					<?php
					$args = array(
						'posts_per_page'	=> 1,
						'orderby'			=> 'post_date',
						'order'				=> 'DESC',
						'post_status'		=> 'publish',
						'category_name'		=> 'noticias',
						);
					$temp = $wp_query;  // assign orginal query to temp variable for later use
					$wp_query = null;
					$wp_query = new WP_Query($args);
					if( have_posts() ) : 
						while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
					
					<div class="col-sm-12"><?php get_template_part( 'template-parts/content', 'only'); ?></div>

					<?php
					endwhile;
					else :
						echo '';
					endif;
					?>

				</div>

				<?php //the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
		</div>
<h2 class="container">Licitações</h2>

<div class="zeraLateral container">
	<div id="primary" class="content-area <?php echo esc_attr(perth_blog_layout()); ?>">
		<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<div class="posts-layout">
					<?php

					$args = array(
						'posts_per_page'	=> 3,
						'orderby'			=> 'post_date',
						'order'				=> 'DESC',
						'post_status'		=> 'publish',
						'category_name'		=> 'licitacoes',
						);
					$temp = $wp_query;  // assign orginal query to temp variable for later use
					$wp_query = null;
					$wp_query = new WP_Query($args);
					if( have_posts() ) : 
						while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
					
					<div class="col-sm-4"><?php get_template_part( 'template-parts/content', 'home'); ?></div>

					<?php
					endwhile;
					else :
						echo '';
					endif;
					?>

				</div>

				<?php //the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php
	if ( get_theme_mod('blog_layout','classic') == 'classic' ) :
				//get_sidebar();
		endif;
	?>
</div>

<?php get_footer(); ?>