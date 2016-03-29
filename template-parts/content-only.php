<?php
/**
 * @package Perth
 */
?>

<article id="post-<?php the_ID(); ?>">

	<?php if ( has_post_thumbnail() && ( get_theme_mod( 'index_feat_image' ) != 1 ) ) : ?>
		<div class="entry-thumb">
			<a href="<?php the_permalink(); ?>"title="<?php the_title(); ?>"><?php the_post_thumbnail('perth-large-thumb'); ?></a>
		</div>
	<?php endif; ?>
	
	<header class="col-md-offset-1 col-md-3 entry-header">
		<?php if ( 'post' == get_post_type() && get_theme_mod('hide_meta_index') != 1 ) : ?>
		<?php endif; ?>
		<?php the_title( sprintf( '<h2 class="entry-title post-capa-cor-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>		
	</header><!-- .entry-header -->

	<div class="col-md-offset-1 col-md-6 entry-content">
		<?php if ( (get_theme_mod('full_content_home') == 1 && is_home() ) || (get_theme_mod('full_content_archives') == 1 && is_archive() ) ) : ?>
			<?php the_content(); ?>
		<?php else : ?>
			<?php the_excerpt(); ?><a href="<?php the_permalink(); ?>" class="btn button btn-materia">Matéria</a>
		<?php endif; ?>

	</div><!-- .entry-content -->
</article><!-- #post-## -->