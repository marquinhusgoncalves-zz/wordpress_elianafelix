<?php get_header(); ?>
<div class="container">

	<div id="bannerNoticias_i" class="banner clearfix">
		<div>
			<h1>Notícias</h1>
			<p>e informação sobre licitações, leis, editais...</p>
		</div>
	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
				// Define custom query parameters
				$custom_query_args = array( 
					'orderby'			=> 'post_date',
					'order'				=> 'DESC',
					'post_status'		=> 'publish',
					‘paged’ 			=> $paged
				);

				// Get current page and append to custom query parameters array
				$custom_query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

				// Instantiate custom query
				$custom_query = new WP_Query( $custom_query_args );

				// Pagination fix
				$temp_query = $wp_query;
				$wp_query   = NULL;
				$wp_query   = $custom_query;

				// Output custom query loop
				if ( $custom_query->have_posts() ) :
				    while ( $custom_query->have_posts() ) :
				        $custom_query->the_post();
				        
				        // Loop output goes here
				    	get_template_part( 'template-parts/content', get_post_format() );

				    endwhile;
				endif;
				// Reset postdata
				wp_reset_postdata();

				?>

				<?php the_posts_navigation(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
