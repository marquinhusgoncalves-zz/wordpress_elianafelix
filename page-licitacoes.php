<?php get_header(); ?>
<div class="container">
	<div class="col-sm-12">
	<div id="bannerLicitacoes" class="banner banner-p">
			<div>
				<h1>Licitações</h1>
				<p>informação sobre licitações...</p>
			</div>
		</div>
	</div>
	<?php
			// Define custom query parameters
	$custom_query_args = array( 
		'orderby'			=> 'post_date',
		'order'				=> 'DESC',
		'post_status'		=> 'publish',
		'category_name'		=> 'licitacoes',
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

			        // Loop output goes here ?>
			        <div class="col-sm-4"><?php get_template_part( 'template-parts/content', 'home'); ?>
			        </div>

			        <?php
			        endwhile;
			        endif;
			// Reset postdata
			        wp_reset_postdata();

			        ?>

			        <?php the_posts_navigation(); ?>

			    </div>

			    <?php get_footer(); ?>
