<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a> &rarr;</h2>
		<p class="entry-date fancy">
      <abbr class="published">
        <?php twentyeleven_posted_on(); ?>
      </abbr>
    </p>
	</article><!-- #post-<?php the_ID(); ?> -->
