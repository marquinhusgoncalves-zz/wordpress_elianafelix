<?php
/**
 * @package Perth
 */
?>

<article id="post-<?php the_ID(); ?>">

	<?php if ( has_post_thumbnail() && ( get_theme_mod( 'index_feat_image' ) != 1 ) ) : ?>
		<div class="entry-thumb">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('perth-large-thumb'); ?></a>
		</div>
	<?php endif; ?>
	
</article><!-- #post-## -->