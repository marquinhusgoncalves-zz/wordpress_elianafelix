<?php
/**
 * The home template file.
 *
 * @package Perth
 */

get_header(); ?>
	<div class="zeraLateral container">
		<div class="linkServicos col-sm-4">
			<div id="box_01">
			<h4>Elaboração de Leis e Editais</h4>
			<a href="../eflicitacoes/servicos/"><button>MAIS</button></a>
			</div>
		</div>
		<div class="linkServicos col-sm-4">
			<div id="box_02">
			<h4>Processos Licitatórios</h4>
			<a href="../eflicitacoes/servicos/"><button>MAIS</button></a>
			</div>
		</div>
		<div class="linkServicos col-sm-4">
			<div id="box_03">
			<h4>Impugnação de Edital</h4>
			<a href="../eflicitacoes/servicos/"><button>MAIS</button></a>
			</div>
		</div>
	</div>

	<div id="bannerHomeNoticias" class="zeraLateral container">
		<h1 class="container">Notícias</h1>
	</div>

	<div class="zeraLateral container">
		<div id="primary" class="content-area <?php echo esc_attr(perth_blog_layout()); ?>">
			<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<div class="posts-layout">
				<?php

					$args = array(
							'posts_per_page'	=> 2,
							'orderby'			=> 'post_date',
							'order'				=> 'DESC',
							'post_status'		=> 'publish'
					);
					$temp = $wp_query;  // assign orginal query to temp variable for later use
					$wp_query = null;
					$wp_query = new WP_Query($args);
					if( have_posts() ) : 
					while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
					
					<div class="col-sm-6"><?php get_template_part( 'template-parts/content', get_post_format() ); ?></div>

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